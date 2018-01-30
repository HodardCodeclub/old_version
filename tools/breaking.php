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
<!-- breaking-news -->
	<div class="breaking-news">
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
			<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="breaking-news-grids">
				<div class="col-md-8 breaking-news-grid-left">
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="baner-beaking">
										<h3> Umuco wacu feel the beauty Rwanda;come and see go, and tell</h3>
										<p>Rwandan baskets make an unusual and very affordable souvenir. These baskets are used to carry wedding gifts to newly married couples but you can use them from everything to holding fruit to hanging on your wall as a unique decoration. </p>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="baner-beaking baner-beaking1">
										<h3>Umuco wacu feel the beauty Rwanda;come and see go, and tell</h3>
										<p>As you visit Kigali’s souvenir shops you’ll see a lot of beautiful ceramics ranging from entire kitchen sets to vases to candle holders to much larger outdoor pots. Pottery in Rwanda has, for many years, been the traditional handicraft.</p>
									</div>
								</div>
							</article>
						</div>
					</div>
					<script src="js/jquery.wmuSlider.js"></script> 
					  <script>
						$('.example1').wmuSlider();         
					 </script> 

				</div>
				<div class="col-md-4 breaking-news-grid-right">
					<h3>Breaking stories</h3>
					<ul>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">The modern Rwandan potter also works  with brown mud, unlike the mica rich traditional form</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="images/muhabura.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">The name Muhabura basket comes from the patterns on the basket which represents the setting sun over the Muhabura mountain</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">Rwandan wood art has a distinct form and can be easily differentiated from those from its neighboring countries</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 1506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="breaking-news-grids-bottom">
				<div class="banner-bottom-grids">
					<div class="col-md-3 banner-bottom-grid-left">
						<div class="br-bm-gd-lt">
							<div class="overlay">
								<div class="arrow-left"></div>
								<div class="rectangle"></div>
							</div>
							<div class="health-pos">
								<div class="health">
									<ul>
										<li><a href="painting.html">The painting</a></li>
										<li>2 Feb 2017</li>
									</ul>
								</div>
								<h4>The most common medium is water colors, enamels are also used,</h4>
								<div class="dummy">
									<p>most Paintings are made to be sold or on the walls of building.</p>
								</div>
								<div class="com-heart">
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>20 Comments</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>536 Likes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 banner-bottom-grid-left">
						<div class="br-bm-gd-lt br-bm-gd-lt1">
							<div class="overlay">
								<div class="arrow-left"></div>
								<div class="rectangle"></div>
							</div>
							<div class="health-pos">
								<div class="health">
									<ul>
										<li><a href="handicraft.html" class="sport">handicrafts and wood</a></li>
										<li>25 Jan 2017</li>
									</ul>
								</div>
								<h4>Rwandan wood art has a distinct form and.</h4>
								<div class="dummy">
									<p>can be easily differentiated from those from its neighboring countries.</p>
								</div>
								<div class="com-heart">
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>20 Comments</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>13 Likes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 banner-bottom-grid-left">
						<div class="br-bm-gd-lt br-bm-gd-lt2">
							<div class="overlay">
								<div class="arrow-left"></div>
								<div class="rectangle"></div>
							</div>
							<div class="health-pos">
								<div class="health">
									<ul>
										<li><a href="pottery.html" class="plane">Pottery and Ceramics</a></li>
										<li>25 Jan 2017</li>
									</ul>
								</div>
								<h4>Pottery is one of the oldest forms of art in Rwanda.</h4>
								<div class="dummy">
									<p>but today make competitively priced bowls, mugs and other vessels.</p>
								</div>
								<div class="com-heart">
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>18 Comments</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>53 Likes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 banner-bottom-grid-left">
						<div class="br-bm-gd-lt br-bm-gd-lt3">
							<div class="overlay">
								<div class="arrow-left"></div>
								<div class="rectangle"></div>
							</div>
							<div class="health-pos">
								<div class="health">
									<ul>
										<li><a href="weaving.html" class="general">Weaving or Basket </a></li>
										<li>25 jan 2017</li>
									</ul>
								</div>
								<h4>The peace basket is one of the products that Rwandan .</h4>
								<div class="dummy">
									<p>Artisans are selling world over with assistance from various NGOs.  .</p>
								</div>
								<div class="com-heart">
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>150 Comments</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>36 Likes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="images/9.jpg" alt=" " class="img-responsive">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
									<span> </span>
							</a>
							<div class="video-grid-pos">
								<h3><span>Inyambo</span> The first cows in Rwanda to represent Rwandan culture..</h3>
								<ul>
									<li>3:32 <label>|</label></li>
									<li><i>Admin</i> <label>|</label></li>
									<li><span>General</span></li>
								</ul>
							</div>

								<!-- pop-up-box -->
								<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
								</div>

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
					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<!--<li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>most shared</span></li>-->
									<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>most read</span></li>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<?php
									$query_mostread_news="SELECT * FROM news_info ORDER BY Visited DESC LIMIT 3";
			$results=fetch_data($cn,$query_mostread_news);
			if(!empty($results)){
			 foreach($results as $mostread_news) { ?>
			 		<div class="facts">
											<div class="tab_list">
												<img src="./Panel/news_info/news_icons/<?php echo $mostread_news['news_icon']; ?>" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#"><?php echo $mostread_news['News_Title']; ?></a> <label>|</label></li>
													<li><?php echo $mostread_news['Published_on']; ?></li>
												</ul>
												<p><a href="#"><?php echo $mostread_news['Short_description']; ?>.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>

<?php }}			 ?>
								
									</div>
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //breaking-news -->
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