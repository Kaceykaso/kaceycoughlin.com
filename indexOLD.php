<?php 
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
	  <?php include_once("analyticstracking.php") ?>
  	<div id="container" class="container row">

	  	<div class="cube">
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
	  		<div class="slice">
	  			<div class="sliver pull-left design" onclick="document.location='content/about/'">
	  				<img src="../img/me.jpg" alt="Kacey Coughlin">
		  			<span>Ab<span class="hiddenText">out</span></span>
	  			</div>
	  			<div class="sliver pull-left print" onclick="document.location='content/web/'">
	  				<?php cubeRand('web'); ?>
		  			<span>Wo<span class="hiddenText">rk</span></span>
	  			</div>
	  			<div class="sliver pull-left web" onclick="document.location='content/misc/'">
	  				<?php //cubeRand('misc'); ?>
					<img src="http://gracehopper.org/2013/wp-content/uploads/2013/05/GHC-ghc-web-banners300x240.jpg" alt="Grace Hopper Celebration of Women in Computing 2013">
	  				<span>Mi<span class="hiddenText">sc</span></span>
	  			</div>
	  		</div>
	  		<div class="slice">
	  			<div class="sliver empty pull-left">
	  				<span class="popup-bottom">KACEY</span>
	  			</div>
	  			<div class="sliver shade-up pull-left">
	  			</div>
	  			<div class="sliver pull-left misc">
	  				<?php //cubeRand('misc'); ?>
	  				<span><span class="hiddenText"></span></span>
	  			</div>
	  		</div>
	  	</div>
	  	
	  	<!--- Lower content -->
	  	<div class="middle">
	  		<div class="row featurette">
	  			<div class="col-lg-7 col-sm-8">
	  			<h2 class="featurette-heading">
	  				<span class="text-muted">Obsessed with</span> Aesthetics <span class="text-muted">and</span> Efficiency<span class="text-muted">.</span>
	  			</h2>
	  				<p class="lead">
	  					I love good design, and I love it even more when done with as few lines of code as possible. Don't get me wrong, I love coding too, but efficient scripts can be as beautiful as what those scripts are rendering.  I make websites for a living, but more importantly, I make them with both form and function. Any great thing in life has both.
	  				</p>
	  			</div>
	  			<div class="col-lg-5 col-sm-4 example">
	  				<?php cubeRand('web'); ?>
	  			</div>
	  		</div>
	  		<hr class="featurette-divider">
	  		<div class="row featurette">
	  				<div class="col-lg-10 col-sm-10">
	  				<h2 class="featurette-heading">
	  					<span class="text-muted">What I</span> do<span class="text-muted">.</span>
	  				</h2>
	  				</div>
	  				<div class="col-lg-4 col-sm-4 summary">
	  						<span class="icon-stack icon-4x text-center">
							    <i class="icon-laptop icon-stack-base"></i>
							</span>
	  					<h2>Web</h2>
	  					<p>
	  						If it's web-based, I have probably tackled it: Websites, web apps, web services, anything web-related, ya dig?
	  					</p>
	  					<p>
	  						<a href="content/web/" class="btn btn-default" title="">View more <i class="icon-chevron-right"></i></a>
	  					</p>
	  				</div>
	  				<div class="col-lg-4 col-sm-4 summary">
	  					<span class="icon-stack icon-4x">
	  						<i class="icon-print icon-stack-base"></i>
	  					</span>
	  					<h2>Print</h2>
	  					<p>
	  						Dead trees: Graphic design, logos, print layout, posters...anything that can be printed out, I can design.
	  					</p>
	  					<p>
	  						<a href="content/print/" class="btn btn-default" title="">View more <i class="icon-chevron-right"></i></a>
	  					</p>
	  				</div>
	  				<div class="col-lg-4 col-sm-4 summary">
	  				<span class="icon-stack icon-4x">
	  						<i class="icon-terminal icon-stack-base"></i>
	  					</span>
	  					<h2>Hack</h2>
	  					<p>
	  						Everything else: Hardware hacks, misc projects and experiments, and things I find amusing.
	  					</p>
	  					<p>
	  						<a href="content/misc/" class="btn btn-default" title="">View more <i class="icon-chevron-right"></i></a>
	  					</p>
	  				</div>
	  				<div class="clearfix visible-xs"></div>
	  		</div>
	  		<hr class="featurette-divider">
	  	</div><!-- end .middle -->

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