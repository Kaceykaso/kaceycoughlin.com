<?php 
// Page category
$cat = "Web";

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
  <body id="web">
  <?php include_once("../../analyticstracking.php") ?>
  <!-- Navbar -->
  <?php include('../includes/navbar.php'); ?>
  
  <!-- Overall Container -->
  	<div class="container row">
  		
  		<!-- Banner -->
  		<div class="banner">
  			<div class="container">
	  			<h1 class="web">Work</h1>
	  			<?php banner('web'); ?>
	  		</div>
  		</div>
  		<!--Breadcrumbs-->
  		<ol class="breadcrumb">
		  <li><a href="../../index.php">Home</a></li>
		  <li class="active">Work</li>
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
					echo "<a href=\"#\" data-toggle=\"modal\" data-target=\"#prodemandMobile\"";
					/*echo "<a href=\"".$row['link']."\" ";
					if (strpos($row['link'], "kaceycoughlin.com/img/") !== false) {
						echo "class=\"image-popup-fit-width\" ";
					} else {
						echo "target=\"_blank\" ";
					}*/
					echo ">";
					?>
		  				<h2 class="featurette-heading title"><?php echo $row['name']; ?></h2>
					</a>
		  			<p class="lead">
			  			<?php echo $row['description']; ?>
			  			<br>
			  			<!--<?php if (!($row['cache_img'] == NULL)) {
				  			echo "<a href=\"".$row['cache_img']."\" class=\"image-popup-fit-width\">Cached Image</a>";
			  			} ?>-->
					</p>
				</div>
			</div><!-- end .featurette -->
			<!--<div class="row featurette">
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
			</div>--><!-- end .featurette -->
	  		<hr class="featurette-divider">
	  		<?php } ?>

	  		<!-- Modal -->
			<div class="modal fade" id="prodemandMobile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Case Study</h4>
			        <h3>ProDemand Mobile</h3>
			      </div>
			      <div class="modal-body">
			        <p>
	  					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis varius justo, quis commodo purus. Maecenas nec augue quis sapien pulvinar maximus sit amet sed turpis. Maecenas bibendum, odio tincidunt volutpat dictum, lectus lacus placerat eros, vel viverra felis est vitae nibh. Donec rhoncus erat at gravida aliquam. Aliquam vel tincidunt massa, eu convallis ligula. Etiam sit amet semper diam. Proin tempus et metus consectetur hendrerit. Nulla facilisi.
	  				</p>
	  				<ul class="techTags">
		  				<li>HTML5</li>
		  				<li>CSS3</li>
		  				<li>Javascript</li>
		  				<li>JQuery</li>
		  				<li>CodeKit</li>
		  				<li>SublimeText</li>
		  			</ul>
		  			<img src="" class="process">
		  			<h4>Before...</h4>
		  			<ul class="img-before">
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  			</ul>
		  			<h4>After...</h4>
		  			<ul class="img-after">
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  				<li><a href=""><img src=""></a></li>
		  			</ul>
			      </div>
			    </div>
			  </div>
			</div>
	  		
	  	</div> <!-- end .middle -->
  
  	<!-- Footer -->
	  	<?php include('../includes/footer.php'); ?>
  	
  	</div> <!-- end container -->
  
   <?php include('../includes/js.php'); ?>
  </body>
</html>