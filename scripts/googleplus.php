<?php
/* Google Plus Activity Feed
 * Written by Kacey Coughlin - www.kaceycoughlin.com
 * MIT License
 */
 // Build variables
 $user = "110565379798163928594";
 $collection = "public";
 $resultCount = 6; // Default is 20
 $key = "AIzaSyBu-5YwxQxyRcjXelV4EEk-eNgS2P4fkbI";
 $url = "https://www.googleapis.com/plus/v1/people/".$user."/activities/".$collection."?maxResults=".$resultCount."&key=".$key;
 
 // Get
 $json = file_get_contents($url);
 $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
 // Create arrays to store posts
 $postTitles = array();
 $postURLs = array();
 
foreach ($jsonIterator as $key => $val) {
    if(!(is_array($val))) {
        // Only grab post title and URL
        if ($key == "title" || $key == "url") {
        	// Check for titles that are not actual posts, leave them out
        	if ((strpos($val, "PUBLIC") == true) || ($val == "Google+")) {
	        	//do nothing
        	} else {
        		// Grab post title
        		if ($key == "title") {
	        		// Clean post of weird characters
					$post = str_replace("&#xA0;"," ",$val);
					// Trim extra links
					/*if (strpos($val, "http") == true) {
						$end = strpos($val, "http");
						$post = substr($val, 0, $end);
					}*/
					$postTitles[] = $post;
				// Grab post URL
        		} else if ($key == "url") {
        			// Only grap post URLs
        			if (strpos($val, "posts") == true) {
        				$thisURL = str_replace("&#xA0;", "&#47;", $val);
        				// Check URL is a duplicate, if so drop it
        				if (in_array($val, $postURLs)) {
	        				// do nothing
        				} else {
        					
	        				$postURLs[] = $thisURL;
        				}
        			}
        		}
        	}
        } 
    }
}
$googleplus = "";
$googleplus .= "<ul id=\"googleplus\" class=\"icons-ul\">";
for ($i=0, $max=count($postTitles);$i<$max; $i++) {
	$googleplus .= "<li><a href=\"".$postURLs[$i]."\"><i class=\"icon-li icon-google-plus-sign icon-large\"></i>";
	if ($postTitles[$i] == "") {
		$googleplus .= "(no title)";
	} else {
		$googleplus .= $postTitles[$i];
	}
	$googleplus .= "</a></li>";
}
$googleplus .= "</ul>";
?>