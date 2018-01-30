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
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- sb-slider -->
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7243260-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
<!-- //sb-slider -->
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
						<!--<img src="images/c1.png" alt="" />-->
					</div></span>
						</div>
					</div>

					<?php	include ("./includes/header.php"); ?>
					
				</nav>
			</div>
		</div>
	</div>
	<div class=" col-md-12">
                    <img src="images/full_advert.jpg" style=" width: 100%">    
                        
                </div>
<!-- //banner -->
<!-- slicebox-slider -->
	<div class="slicebox-slider">
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
			<div class="slicebox-slider-grid">
				<div class="col-md-8 slicebox-slider-left">
					<div class="wrapper1">

							<ul id="sb-slider" class="sb-slider">
								<li>
									<a href="#" target="_blank"><img src="images/miss1.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Contestants enter boot camp</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss2.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>15 girls to contest for Miss Rwanda 2017</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss3.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Five selected in City of Kigali</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss1.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Contestants enter boot camp</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss2.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>15 girls to contest for Miss Rwanda 2017</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss3.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Five selected in City of Kigali</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/miss2.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>15 girls to contest for Miss Rwanda 2017</h3>
									</div>
								</li>
							</ul>

							<div id="shadow" class="shadow"></div>

							<div id="nav-arrows" class="nav-arrows">
								<a href="#">Next</a>
								<a href="#">Previous</a>
							</div>

					</div><!-- /wrapper -->
					<script type="text/javascript" src="js/jquery.slicebox.js"></script>
					<script type="text/javascript">
						$(function() {
							
							var Page = (function() {

								var $navArrows = $( '#nav-arrows' ).hide(),
									$shadow = $( '#shadow' ).hide(),
									slicebox = $( '#sb-slider' ).slicebox( {
										onReady : function() {

											$navArrows.show();
											$shadow.show();

										},
										orientation : 'r',
										cuboidsRandom : true
									} ),
									
									init = function() {

										initEvents();
										
									},
									initEvents = function() {

										// add navigation events
										$navArrows.children( ':first' ).on( 'click', function() {

											slicebox.next();
											return false;

										} );

										$navArrows.children( ':last' ).on( 'click', function() {
											
											slicebox.previous();
											return false;

										} );

									};

									return { init : init };

							})();

							Page.init();

						});
					</script><br>
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
					<div class="gallery">
						<h3>gallery</h3>
						<div class="gallery-grids">
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/miss1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/miss1.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grd grd">
									<a href="images/miss2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/miss6.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
							</div>
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/miss3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/miss3.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grd grd">
									<a href="images/miss5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/miss5.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
							</div>
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/banner112.png" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/banner112.png" alt=" " class="img-responsive mobile1" />
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="albums">
						<h3>albums</h3>
						<div class="albums-grids">
							<div class="albums-grid1">
								<iframe width="500" height="300" src="https://www.youtube.com/embed/jW4jklSZDGI" frameborder="0" allowfullscreen></iframe>

								<h4><a href="single.html"> Dieudonne Ishimwe, the Managing Director of Rwanda Inspiration Backup, said the boot camp will prepare the girls for the tests of the final event later this month."The fifteen contestants will undergo training for the next two weeks,<br> whereby different personalities from the private sector, public institutions and the civil society will be joining them for sessions that aim to enhance their understanding of different issues,"<br> he said. "The girls will learn more about Rwandan history, culture and values, the role of Miss Rwanda in socio-economic development, public speaking, nutrition and well-being, among other things."</p>
							</div>
							<div class="albums-grid1">
								<iframe width="560" height="300" src="https://www.youtube.com/embed/IQXC2jVI7dA" frameborder="0" allowfullscreen></iframe>

								<h4><a href="single.html">On Saturday, 4 February, our team and fans will be at Petit Stade in Remera for the pre-selection. A panel of five judges will pick 15 girls, out of the 26 selected in the auditions, to contest in the finals.</a></h4>
                                
                                <p> <b>Entrance at the pre-selection will be charged 2,000 (ordinary seats) and 5,000 (VIP seats).</b></p>
							</div>
						</div>
					</div>
				</div>
                <!--upcoming event-->
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
							 
              </div></div>
                <!--upcoming event-->
				<div class="col-md-4video-grids-right">
                                
				            <div class="breaking_news">
					<h2>Advertisement</h2>
                                
                                
				</div><br>
                                <img src="images/short_advert.jpg"><hr/>
                                <img src="images/short_advert.jpg"><hr/>
                                <img src="images/short_advert.jpg"><hr/>
                               
                                
                                <img src="images/short_advert.jpg"> <br>
                                
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
<!-- //slicebox-slider -->
<!-- footer -->
	<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>