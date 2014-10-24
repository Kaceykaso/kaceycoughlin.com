<?php

// Get Index page images
function cubeRand($option) {
		$images = array(); // Create arrays for storing
		$filenames = array();
		foreach (glob("img/".$option."/*.jpg") as $file) { // Get images from folder
			if ((strpos($file, "thumb") === false) && (strpos($file, "other") === false)) { // Check if thumbnail
				$images[] = $file; // Store images in array
				$filename_parts = pathinfo($file); // Get filename
				$filename = $filename_parts['filename'];
				$filenames[] = str_replace("_alternate", "", $filename); // Store name in array
			} else {
				// do nothing
			}
		}
		// Pull random image
		$low = 0; //min
		$high = count($images)-1;
		$pick = rand($low,$high);
		echo "<img src=\"$images[$pick]\" alt=\"$filenames[$pick]\" />"; // Save image to display
		unset($images, $filenames); // Destroy arrays
};




// Get Content page banners
function banner($option) {
		$images = array(); // Create arrays for storing
		$filenames = array();
		foreach (glob("../../img/".$option."/*_banner.*") as $file) { // Get images from folder
				$images[] = $file; // Store images in array
				$filename_parts = pathinfo($file); // Get filename
				$filename = $filename_parts['filename'];
				$filenames[] = str_replace("_alternate", "", $filename); // Store name in array
			
		}
		// Pull random image
		$low = 0; //min
		$high = count($images)-1;
		$pick = rand($low,$high);
		echo "<img src=\"$images[$pick]\" alt=\"$filenames[$pick]\" />"; // Save image to display
		unset($images, $filenames); // Destroy arrays
};

unset($low, $high, $pick); // Destroy variables
?>