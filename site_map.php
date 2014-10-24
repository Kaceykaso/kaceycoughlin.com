<?php 
// Page category
$cat = "Site Map";

include('scripts/imagerandomizer.php');
include('scripts/googleplus.php'); 

// date/time
date_default_timezone_set('America/Los_Angeles'); //set timezone
time(); //get current timestamp
$today = date('m-d-Y'); //format
$nextYear = date('Y')+1;
$copyright = date('Y')."-".$nextYear; //build copyright (this year to next year)


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('content/includes/header.php'); ?>
</head>
  <body class="static site_map">
  <?php include_once("analyticstracking.php") ?>
  <!-- Navbar -->
  <?php include('content/includes/navbar.php'); ?>
  
  <!-- Overall Container -->
  	<div class="container row">
  		
  		<!-- Banner -->
  		
  		<!--Breadcrumbs-->
  		<ol class="breadcrumb">
		  <li><a href="../../index.php">Home</a></li>
		  <li class="active"><?php echo $cat; ?></li>
		</ol>
		<div class="middle">
			<div class="row h-sitemap">
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="Home"><a class="u-url" href="//www.kaceycoughlin.com/index.php">Home</a></h2>
	              <p class="summary">Your first stop.</p>
	            </div><!--/span-->
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="About"><a class="u-url" href="//www.kaceycoughlin.com/content/about/">About</a></h2>
	              <p class="summary">Everything you need to know about yours truly.</p>
	            </div><!--/span-->
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="Web"><a class="u-url" href="//www.kaceycoughlin.com/content/web/">Work</a></h2>
	              <p class="summary">Professional work done for the web.</p>
	            </div><!--/span-->
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="Misc"><a class="u-url" href="//www.kaceycoughlin.com/content/misc/">Misc</a></h2>
	              <p class="summary">Random amusements, hacks, print and/or design work.</p>
	            </div><!--/span-->
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="Archive"><a class="u-url" href="//www.kaceycoughlin.com/content/archive/">Archive</a></h2>
	              <p class="summary">Oldies but goodies.</p>
	            </div><!--/span-->
	            <div class="col-6 col-sm-6 col-lg-4">
	              <h2 id="Site Map"><a class="u-url" href="//www.kaceycoughlin.com/site_map.php">Site Map</a></h2>
	              <p class="summary">You're already here!</p>
	            </div><!--/span-->
          </div><!--/row-->
		
	  	</div> <!-- end .middle -->
  
  	<!-- Footer -->
	  	<?php include('content/includes/footer.php'); ?>
  	
  	</div> <!-- end container -->
  
   <?php include('content/includes/js.php'); ?>
   <script type="text/javascript">
		 // Instagram pics
		 // low_resolution(306), thumbnail(150), standard_resoltuion(612). Default is thumbnail
		 
		$("#instagram").jqinstapics({
			  "count": 6,
			  "size" : "thumbnail"
		});
		
    </script>
  </body>
</html>