<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

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
  <body id="index">
	  <?php include_once('analyticstracking.php'); ?>
  	<div id="container" class="container row">

  		<!-- Begin cube tiles -->
	  	<div class="cube">
	  		<!-- Top -->
	  		<div class="slice">
	  			<div class="sliver pull-left about">
	  				<span><span class="hiddenText"></span></span>
	  			</div>
	  			<div class="sliver shade-down pull-left">
	  			</div>
	  			<div class="sliver empty pull-left">
	  				<span class="popup-top">COUGHLIN</span>
	  			</div>
	  		</div>
	  		<!-- Middle -->
	  		<div class="slice">
	  			<div class="sliver pull-left design">
	  				<img src="../img/me.jpg" alt="Kacey Coughlin">
		  			<span>Ab<span class="hiddenText">out</span></span>
	  			</div>
	  			<div class="sliver pull-left print">
	  				<?php //cubeRand('web'); ?>
		  			<span>Wo<span class="hiddenText">rk</span></span>
	  			</div>
	  			<div class="sliver pull-left web">
					<?php //cubeRand('misc'); ?>
	  				<span>Mi<span class="hiddenText">sc</span></span>
	  			</div>
	  		</div>
	  		<!-- Bottom -->
	  		<div class="slice">
	  			<div class="sliver empty pull-left">
	  				<span class="popup-bottom">KACEY</span>
	  			</div>
	  			<div class="sliver shade-up pull-left">
	  			</div>
	  			<div class="sliver pull-left misc">
	  			</div>
	  		</div>
	  	</div>

	  	<!-- Footer -->
	  	<?php include('content/includes/footer.php'); ?>
  	
  	</div> <!-- end container -->
  
   <?php include('content/includes/js.php'); ?>

  </body>
</html>