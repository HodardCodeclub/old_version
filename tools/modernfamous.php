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
						<div class="logo">
							<span>
                    <div class="customer-img">
						<img src="images/c1.png" alt="" />
					</div></span>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a href="index.php" class="effect1 active">Home</a></li>
							<li><a href="events.php">Rwandan Dance</a></li>
							<li><a href="breaking.php">Art & Craft</a></li>
							<li><a href="entertainment.php">Miss Rwanda</a></li>
                            <li><a href=#>Museums</a></li>
							<li><a href="book.php">Books</a></li>
							<li role="presentation" class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								  Join us <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="short-codes1.php">Partern</a></li>
								  
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
<!-- //banner --><br><br>
<!-- miss -->
<?php
if(@$_GET['famous'])	$ql_famous=mysqli_query($cn,"SELECT * FROM famous WHERE `FamID`=".@$_GET['famous']."")or die(mysqli_error($cn));
else	$ql_famous=mysqli_query($cn,"SELECT * FROM famous WHERE `Default`=1")or die(mysqli_error($cn));
$famous=mysqli_fetch_array($ql_famous);
?>
	<div class="about">
		<div class="container">
			<div class="about-heading">
				<h2>Latest Rwandan famous music</h2>
			</div>
			<div class="about-grids">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="./Panel/Famous/pic/<?php echo $famous['FamPic']; ?>" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
<p>
					<?php echo $famous['FamDetails']; ?>
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
				<h3>Rwandan famous in music</h3>
			</div>
			<div class="special-grids">
<?php
			$ql_Allstar=mysqli_query($cn,"SELECT * FROM famous")or die(mysqli_error($cn));
while($Allstar=mysqli_fetch_array($ql_Allstar)){
			?>
				<div class="col-md-4 ">
					<div class="col-md-6 w3ls-special-img">
						<img src="./Panel/Famous/profiles/<?php echo $Allstar['FamProfile']; ?>" height=100% alt="" />
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4><a href='modernfamous.php?famous=<?php echo $Allstar['FamID']; ?>' ><?php echo $Allstar['FamNames']; ?></a></h4>
						<p><?php echo $Allstar['FamStyle']; ?> style</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
<!-- //typography-page -->
<!-- footer -->
	<div class="footer-top">
		<div class="container">
			<p> Rwanda – Home of some of The Best Cultural Dances and Music in Africa – Different Dances and Musical Instrument <a href="#">http//www.umucowacu.com</a></p>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left">
					<h3>twitter feed</h3>
					<ul>
						<li><a href="#">The Umuduli is a single string, almost bow like instrument and then there is the Rwandan Horn called the Amakondera. 
							<i>http//example.com</i></a><span>15 minutes ago</span></li>
						<li><a href="mailto:info@example.com" class="cols">@NASA</a> & <a href="mailto:info@example.com" class="cols">
							@orbital science</a> <a href="#">The harvest festival had been part of traditional Rwandan Culture for centuries where people gathered to celebrate share the first fruits of the harvest, this was accompanied music, dance, telling of stories and local brew.</a><span>45 minutes ago</span></li>
						<li><a href="#">The Dance of courtship where men and women dance together – it is also called the Dance of Fiances and in Kinyarwanda Ukurambagiza.</a><span>1 day ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>contact form</h3>
					<form>
						<input type="text" value="enter your full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your full name';}" required="">
						<input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>about us</h3>
					<p>Inside the Gahaya Links workshop on the outskirts of Kigali, Rwanda’s capital, a group of women sit side by side against a brightly-painted wall. Using natural fibers and grasses, they pool their weaving skills to create exquisite hand-made baskets, inspired by the eastern African country’s art and tradition.</span>
						</p>
            <p> <i>Mission</i> Inside the Gahaya Links workshop on the outskirts of Kigali, Rwanda’s capital, a group of women sit side by side against a brightly-painted wall. Using natural fibers and grasses, they pool their weaving skills to create exquisite hand-made baskets, inspired by the eastern African country’s art and tradition.</span>
						<i>- Top Team</i></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left">
					<p>&copy 2017 Umuco Wacu. All rights reserved</p>
				</div>
				<div class="footer-bottom-right">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>