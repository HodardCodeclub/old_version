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
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js --><link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
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
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="map">
				<h3>View on map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.6602601502063!2d29.740572314756125!3d-2.6160387980939523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c30c8755d15e0d%3A0xf9be6ccb832afd13!2sBatiment+Central!5e0!3m2!1sen!2srw!4v1492340588466" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact-grids">
				<div class="col-md-3 contact-grid">
					<div class="call">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li>+250 787855188</li>
								<li>+250 728221222</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li> Huye Campus</li>
								<li>South Province</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="mail">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li><a href="mailto:info@example.com">umucowacu112@gmail.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-5 contact-grid">
				<?php
				if(@$_POST['send']){
				$sql=mysqli_query($cn,"INSERT INTO `suggestions` values(null,'".$_POST['names']."','".$_POST['mail']."','".$_POST['sug_body']."')")or die(mysqli_error($cn));
				if($sql){
				echo "<script type='text/javascript'> alert('Your suggestions has been sent!!'); window.location='contact.php?sug=yes'; </script>";
				}
				}
				if(isset($_GET['sug'])) {?><br/><center><i style='color:green'>Thank you for contact us!!</i></center><?php }
				?>
					<form method=post>
						<input type="text" name='names' value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name='mail' value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea type="text" name='sug_body'  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Send" name='send'>
					</form>
				</div>
				<div class="col-md-4 contact-grid">
				<?php
				if(@$_POST['sub']){
				$sql=mysqli_query($cn,"INSERT INTO `subscribers` values(null,'".$_POST['mail']."')")or die(mysqli_error($cn));
				if($sql){
				echo "<script type='text/javascript'> alert('You have subscribed successfully!!'); window.location='contact.php?sub=yes'; </script>";
				}
				}
				if(isset($_GET['sub'])) {?><br/><center><i style='color:green'>Thank you for subscribing!!</i></center><?php }
				?>
					<div class="newsletter1">
						<h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
					</div>
					<form method=post>
						<input type="email" name='mail' value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Subscribe" name='sub' />
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>