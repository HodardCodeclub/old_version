<?php
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
$sql="SELECT * FROM news_info WHERE Sub_category='".@$_GET['subcat']."'";
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
	<div class=" col-md-12">
                    <img src="images/full_advert.jpg" style=" width: 100%">    
                        
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
<br><br><br>
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
			
				<div class="news">
					<div class="news-grids">
						<div class="col-md-6 news-grid-left">
							<h3>latest news of <?php echo @$_GET['name']; ?></h3>
							<ul>
							<?php
			$results=fetch_data($cn,$sql);
			if(!empty($results)){
			 foreach($results as $latest_news) {
			//var_dump($latest_news);
			 ?>
								<li>
									<div class="news-grid-left1">
										<img src="./Panel/news_info/news_icons/<?php echo $latest_news['news_icon'] ?>" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href='./single.php?article=<?php echo $latest_news['news_ID']; ?>'><?php echo $latest_news['News_Title'] ?></a></h4>
										<h5>By <a href="#"><?php echo $latest_news['news_author'] ?></a> <label>|</label> <i><?php $latest_news['Published_on'] ?></i></h5>
										<p><?php echo $latest_news['Short_description'] ?></p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<?php }

								} else
								echo "No latest news of ".@$_GET['name']; ?>
							</ul>
						</div>
						<div class="col-md-3 video-grids-right">
                                
				            <div class="breaking_news">
					<h2>Advertisement</h2>
                                
                                
				</div>
                                <img src="images/short_advert.jpg"><hr/>
                                <img src="images/short_advert.jpg"><hr/>
                                <img src="images/short_advert.jpg"><hr/>
                                <img src="images/short_advert.jpg"> <br>
                                
					</div>
						<div class="col-md-3 news-grid-right">
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