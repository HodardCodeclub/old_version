<?php
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>News Times a Entertainment Category Flat Bootstrap Responsive Website Template | New & Events :: w3layouts</title>
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
<!-- //banner -->
<!-- news-and-events -->
	<div class="news-and-events">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>
				<div class="marquee">
<?php
			$query_breaking_news="SELECT * FROM news_info WHERE News_type='break' ORDER BY Published_on DESC LIMIT 5";
			$results=fetch_data($cn,$query_breaking_news);
			if(!empty($results)){
			 foreach($results as $breaking_news) { ?>
			 <div class="marquee1"><a class="breaking" href="single.php?article=<?php echo $breaking_news['news_ID']; ?>"><?php echo $breaking_news['News_Title']; ?></a></div>&nbsp;|&nbsp;
			<?php } 
			} else echo "Breaking news coming soon!!";?>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="upcoming-events-grids">
				<div class="col-md-8 upcoming-events-left">
					<h3>Current videos</h3>
					<div class="gallery">
						<div class="col-md-5 gallery-left">
							<div class="grid">
								<figure class="effect-lexi">
									<img src="images/21.jpg" alt="" class="img-responsive" />
									<figcaption>
										<h2>Umuco <span>wacu</span></h2>
										<p>Rwanda traditional dance is the best in East Africa Region.</p>
									</figcaption>			
								</figure>
							</div>
						</div>
						<div class="col-md-7 gallery-right">
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="images/Indangamuco.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.html">Indangamuco</a><i>UNIVERSITY CULTURAL TROUPE  Former NUR, Indangamuco is a cultural troupe that stands for promote and protect Rwandan traditional culture.</i><span>11.02.2017</span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="images/Urukerereza.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.html">Urukerereza <i>National Ballet Urukerereza revived at inaugural cultural evening gala.</i><span>11.2.2017</span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="images/Inyamibwa.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.html">Inyamibwa <i>Inyamibwa showcases beauty, history of Rwandan culture through dance.</i><span>11.2.2017</span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="upcoming-events-left-grids">
						<div class="col-md-6 upcoming-events-left1">
							<div class="upcoming-events-left11">
								<img src="images/19.jpg" alt=" " class="img-responsive" />
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<i> </i>
								</a>
								<div class="news-eve">
									<h4>INYAMIBWA</h4>
								</div>
								<div id="small-dialog" class="mfp-hide">
									<iframe width="500" height="300" src="https://www.youtube.com/embed/q2N9jioZyoU" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="col-md-6 upcoming-events-left2">
							<div class="upcoming-events-left11">
								<img src="images/20.jpg" alt=" " class="img-responsive" />
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<i> </i>
								</a>
								<div class="news-eve">
									<h4>URUKEREREZA</h4>
								</div>
								<div id="small-dialog" class="mfp-hide">
									<iframe width="500" height="300" src="https://www.youtube.com/embed/iK2hULXWfXc" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
							<!-- pop-up-box -->
													<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
													<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
													<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
												<!--//pop-up-box -->
												<script>
													$(document).ready(function() {
													$('.popup-with-zoom-anim').magnificPopup({
														type: 'inline',
														fixedContentPos: false,
														fixedBgPos: true,
														overflowY: 'auto',
														closeBtnInside: true,
														preloader: false,
														midClick: true,
														removalDelay: 300,
														mainClass: 'my-mfp-zoom-in'
													});
																													
													});
												</script>
					</div>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>upcoming events</h3>
					
					
							   <div class="banner-bottom-video-grid-left">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php
							$ql_event=mysqli_query($cn,"SELECT * FROM event ORDER BY Edate desc")or die(mysqli_error($cn));
while($event=mysqli_fetch_array($ql_event)){
?>
						  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
								  <h4 class="panel-title">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $event['EvTitle']; ?>
									</a>
								  </h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" style="height: auto;">
								   <div class="panel-body">
									<?php echo $event['Descript']; ?></div>
								</div>
							  </div>
							  <?php
							  }
							  ?>
							</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>latest news</h3>
							<ul>
								<li>
									<div class="news-grid-left1">
										<img src="images/inganzo.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Inganzo Ngari perform at African Day in Turkey</a></h4>
										<h5>By <a href="#">Admin</a> <label>|</label> <i>31.1.2017</i></h5>
										<p>Inganzo Ngari was staged a breath taking performance during the African Day gala at Gazi University Ankara, Turkey.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images/18.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Intore</a></h4>
										<h5>By <a href="#">Admin</a> <label>|</label> <i>31.1.2017</i></h5>
										<p>The traditional Ballet of Rwanda is one of Africas longest established and least exposed musical traditions.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images/indangamuco.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">INDANGAMUCO</a></h4>
										<h5>By <a href="#">Admin</a> <label>|</label> <i>11.2.2017</i></h5>
										<p>UNIVERSITY CULTURAL TROUPE FORMER NUR, INDANGAMUCO IS A CULTURAL TROUPE THAT STANDS FOR PROMOTE AND PROTECT RWANDAN TRADITIONAL CULTURE.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images/urukerereza.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">URUKEREREZA</a></h4>
										<h5>By <a href="#">Admin</a> <label>|</label> <i>11.2.2017</i></h5>
										<p>NATIONAL BALLET URUKEREREZA REVIVED AT INAUGURAL CULTURAL EVENING GALA.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images/inyamibwa.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">INYAMIBWA</a></h4>
										<h5>By <a href="#">Admin</a> <label>|</label> <i>11.2.2017</i></h5>
										<p>INYAMIBWA SHOWCASES BEAUTY, HISTORY OF RWANDAN CULTURE THROUGH DANCE.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
							</ul>
						</div>
						<div class="col-md-4 news-grid-right">
							<div class="news-grid-rght1">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in London</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">edit location</a></li>
							  </ul>

							  <!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active london" id="home">
										<ul>
											<li>
												<h4>Wednesday</h4>
												<span></span>
												<p>21<sup>°</sup></p>
											</li>
											<li>
												<h4>Thursday</h4>
												<span class="moon"></span>
												<p>25<sup>°</sup></p>
											</li>
											<li>
												<h4>Friday</h4>
												<span class="sun"></span>
												<p>31<sup>°</sup></p>
											</li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="profile">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359652.109742895!2d-113.72446020222534!3d36.24602872499641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1450786850582" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="news-grid-rght2">
								<h3>subscribe to our newsletter</h3>
								<p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
								<form>
									<input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
									<input type="submit" value="Submit">
								</form>
							</div>
							<div class="news-grid-rght3">
								<img src="images/miss1.jpg" alt=" " class="img-responsive" />
								<div class="story">
									<p>story of the week</p>
									<h3><a href="single.html">MISS RWANDA "THE GIRLS WILL BE TAKEN TO A TWO-WEEK BOOT CAMP AT GOLDEN TULIP HOTEL IN NYAMATA"</a></h3>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
	</div>
<!-- //news-and-events -->
<!-- footer -->
<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>