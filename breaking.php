<?php
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
$sql="SELECT * FROM news_info WHERE news_category='2' ORDER BY Published_on DESC LIMIT 3";
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
					<h3>Latest stories</h3>
					<ul>
															<?php
							$results=fetch_data($cn,$sql);
			if(!empty($results)){
			 foreach($results as $latest_news) { ?>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href='./single.php?article=<?php echo $latest_news['news_ID']; ?>'><img src="./Panel/news_info/news_icons/<?php echo $latest_news['news_icon'] ?>" class="img-responsive" /></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href='./single.php?article=<?php echo $latest_news['news_ID']; ?>'><?php echo $latest_news['News_Title'] ?></a></h4>
									<p><?php echo $latest_news['Short_description'] ?></p>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $latest_news['news_author'] ?></a></li>
										<li><a href="#"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $latest_news['Published_on'] ?></a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<?php
						}}
						?>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="breaking-news-grids-bottom">
				<div class="banner-bottom-grids">
					<?php
			$query="SELECT * FROM subcategories WHERE Category=2";
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
													<li><a href="single.php?article=<?php echo $mostread_news['news_ID'];  ?>"><?php echo $mostread_news['News_Title']; ?></a> <label>|</label></li>
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
	<?php	include ("./includes/footer.php"); ?>
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