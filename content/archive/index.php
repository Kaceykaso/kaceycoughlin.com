<?php 
// Page category
$cat = "Archive";

include('../../scripts/imagerandomizer.php');
include('../../scripts/googleplus.php'); 

// date/time
date_default_timezone_set('America/Los_Angeles'); //set timezone
time(); //get current timestamp
$today = date('m-d-Y'); //format
$nextYear = date('Y')+1;
$copyright = date('Y')."-".$nextYear; //build copyright (this year to next year)

include('../includes/db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('../includes/header.php'); ?>
</head>
  <body id="archive">
  <?php include_once("../../analyticstracking.php") ?>
  <!-- Navbar -->
  <?php include('../includes/navbar.php'); ?>
  
  <!-- Overall Container -->
  	<div class="container row">
  		
  		<!-- Banner -->
  		<div class="banner">
  			<div class="container">
	  			<h1 class="archive"><?php echo $cat; ?></h1>
	  			<?php banner('archive'); ?>
	  		</div>
  		</div>
  		<!--Breadcrumbs-->
  		<ol class="breadcrumb">
		  <li><a href="../../index.php">Home</a></li>
		  <li class="active"><?php echo $cat; ?></li>
		</ol>
		<div class="middle">
		<?php while($row = $result->fetch_assoc()){ ?>
			<div class="row featurette">
				<div class="col-lg-3 example pull-left">
					<?php 
					echo "<a href=\"".$row['link']."\" ";
					if (strpos($row['link'], "kaceycoughlin.com/img/") !== false) {
						echo "class=\"image-popup-fit-width\" ";
					} else {
						echo "target=\"_blank\" ";
					}
					echo ">";
					?>
		  				<img src="<?php echo $row['thumbnail'];?>" alt="<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>">
					</a>
		  		</div>
				<div class="col-lg-8">
					<?php 
					echo "<a href=\"".$row['link']."\" ";
					if (strpos($row['link'], "kaceycoughlin.com/img/") !== false) {
						echo "class=\"image-popup-fit-width\" ";
					} else {
						echo "target=\"_blank\" ";
					}
					echo ">";
					?>
		  				<h2 class="featurette-heading title"><?php echo $row['name']; ?></h2>
					</a>
		  			<p class="lead">
			  			<?php echo $row['description']; ?>
			  			<br>
			  			<?php if (!($row['cache_img'] == NULL)) {
				  			echo "<a href=\"".$row['cache_img']."\" class=\"image-popup-fit-width\">Cached Image</a>";
			  			} ?>
					</p>
				</div>
			</div><!-- end .featurette -->
			<div class="row featurette">
		  		<div class="col-lg-3 others pull-left">
		  			<?php if (!($row['other'] == NULL)) {
			  				if (strpos($row['other'], ",") !== true) {
				  				$others = explode(", ", $row['other']);
			  				} else {
			  					$others = array();
				  				$others[0] = $row['other'];
			  				}
			  				if (strpos($row['other_thumb'], ",") !== true) {
				  				$thumbs = explode(", ", $row['other_thumb']);
			  				} else {
			  					$thumbs = array();
				  				$thumbs[0] = $row['other_thumb'];
			  				}
				  			
				  			for ($i=0,$max=count($others);$i<$max;$i++) {
					  			echo "<a href=\"../../../img/web/".$others[$i]."\"><img src=\"../../../img/web/".$thumbs[$i]."\" alt=\"".$row['name']." alt ".$i."\" title=\"".$row['name']." alt ".$i."\"></a>";
				  			}
		  			} ?>
		  		</div>
		  		<div class="col-lg-4">
		  			<p class="lead">
			  			<?php echo $row['type']." : ".$row['medium']; ?>
					</p>
				</div>
				<div class="col-lg-4 example before pull-left">
					<?php if (!($row['before_img'] == NULL)) {
						echo "<a href=\"".$row['before_img']."\" class=\"image-popup-fit-width\">";
						echo "<img src=\"".$row['before_thumb']."\" alt=\"Old ".$row['name']."\" title=\"Old ".$row['name']."\"></a>";
					} ?>
		  		</div>
			</div><!-- end .featurette -->
	  		<hr class="featurette-divider">
	  		<?php } ?>
	  		
	  	</div> <!-- end .middle -->
  
  	<!-- Footer -->
	  	<?php include('../includes/footer.php'); ?>
  	
  	</div> <!-- end container -->
  
   <?php include('../includes/js.php'); ?>
  </body>
</html>