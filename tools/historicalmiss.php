<?php
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Umuco Wacu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
<?php	include ("./includes/header.php"); ?>
					
				</nav>
			</div>
		</div>
	</div>
<!-- //banner --><br><br>
<!-- miss -->
<?php
if(@$_GET['miss'])	$ql_lastMiss=mysqli_query($cn,"SELECT * FROM misses WHERE `MissID`=".@$_GET['miss']."")or die(mysqli_error($cn));
else	$ql_lastMiss=mysqli_query($cn,"SELECT * FROM misses WHERE `Default`=1")or die(mysqli_error($cn));
$lastMiss=mysqli_fetch_array($ql_lastMiss);
?>
	<div class="about">
		<div class="container">
			<div class="about-heading">
				<h2><?php echo "MISS RWANDA ".$lastMiss['MissYear']; ?></h2>
			</div>
			<div class="about-grids">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="./Panel/Misses/pics/<?php echo $lastMiss['FullPic']; ?>" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
					<p>
					<?php echo $lastMiss['Details']; ?>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //miss -->
<!--typography-page -->
<div class="special">
		<div class="container">
			<div class="special-heading">
				<h3>Miss images and their descriptions</h3>
			</div>
			<div class="special-grids">
			<?php
			$ql_AllMiss=mysqli_query($cn,"SELECT * FROM misses ORDER BY MissYear DESC")or die(mysqli_error($cn));
while($AllMiss=mysqli_fetch_array($ql_AllMiss)){
			?>
				<div class="col-md-4 ">
					<div class="col-md-6 w3ls-special-img">
						<img src="./Panel/Misses/profiles/<?php echo $AllMiss['ProfilePic']; ?>" height=100% alt="" />
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4><a href='historicalmiss.php?miss=<?php echo $AllMiss['MissID']; ?>' ><?php echo $AllMiss['MissNames']; ?></a></h4>
						<p>Miss Rwanda <?php echo $AllMiss['MissYear']; ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
				}
				?>
				<!--<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img">
						<div class="w3ls-special-text effect-1">
							<h4>Doriane Kundwa</h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Doriane</h4>
						<p>Doriane Kundwa Miss Rwanda 2015</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img1">
						<div class="w3ls-special-text effect-1">
							<h4>Akiwacu Colombe</h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>Akiwacu Colombe</h4>
						<p>Akiwacu Colombe Miss Rwanda 2013</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Aurore K. Mutesi</h4>
						<p>Aurore K. Mutesi Miss Rwanda 2012</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img2">
						<div class="w3ls-special-text effect-1">
							<h4>Aurore</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Grace Bahati</h4>
						<p>Grace Bahati Miss Rwanda 2009</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img3">
						<div class="w3ls-special-text effect-1">
							<h4>Grace</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>Uwera Dalila</h4>
						<p>Uwera Dalila Miss Rwanda 1994</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img4">
						<div class="w3ls-special-text effect-1">
							<h4>Uwera</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div> -->
			</div>
		</div>
	</div>
<!-- //typography-page -->
<!-- footer -->
<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>