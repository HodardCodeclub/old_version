<?php
require_once("./db_connect/connect.php");
require_once("./db_connect/functions.php");
$sql_article=mysqli_query($cn,"SELECT * FROM news_info WHERE news_ID='".@$_GET['article']."'")or die(mysqli_error($cn));
$article=mysqli_fetch_array($sql_article);
Execute_query($cn,"UPDATE `news_info` SET Visited=Visited+1 WHERE news_ID='".@$_GET['article']."'");
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
<style type='text/css'>
.main_content{
font-family:"times new roman";
font-size:18px;
color:black;
}
.main_content p{
font-family:"times new roman";
font-size:16px;
color:black;
}
.main_content img{
width: 100%;
color:black;
}
</style>
</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
		
				

					<?php	include ("./includes/header.php"); ?>
				
			
		</div>
	</div>
	<div class=" col-md-12">
                    <img src="images/advert11.jpg" style=" width: 100%">    
                        
                </div><br> <br>
<!-- //banner -->
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
<br><br><br>
<div class=" col-md-12">
                    <img src="images/ntibavuga-bavuga-15.gif" style=" width: 100%">    
                        
                </div><br> <br>
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-6 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4 style='font-size:20px'> <?php echo date('F Y'); ?> <span></span></h4>
							<h4 style='font-size:12px'><?php echo date('l,jS'); ?></h4>
						</div>
						<div class="blog-leftr">
						<h2 style='padding:30px;'><?php echo $article['News_Title']; ?></h2>
							<img src="./Panel/news_info/news_icons/<?php echo $article['news_icon']; ?>" alt="" style='width:80%;height:300px;align:center' class="img-responsive" />
							<div class='main_content'>
							<b><?php echo iconv("UTF-8","UTF-8//IGNORE",$article['Short_description']); ?></b><br/>
							<?php echo iconv("UTF-8","UTF-8//IGNORE",$article['Full_Content']); ?>
							</div>
							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><?php echo $article['news_author']; ?></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tages</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>
								<?php
								$cmts=0;
								$selCount=mysqli_query($cn,"SELECT count(*) FROM news_comments WHERE InfoID='".$article['news_ID']."'");
								if(mysqli_num_rows($selCount)) {
								$ctCmt=mysqli_fetch_array($selCount);
								$cmts=$ctCmt[0];
								}
								echo $cmts." Comments";
								?>
								</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-viewers" aria-hidden="true"></i><?php echo $article['Visited']; ?>&nbsp;viewers</a> </li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<div class="response">
							<h4>Comments</h4>
							<?php
								$qlComments=mysqli_query($cn,"SELECT * FROM news_comments WHERE InfoID='".$article['news_ID']."' AND Accepted='yes'")or die(mysqli_error($cn));
								while($comment=mysqli_fetch_array($qlComments)){
								?>
							<div class="media response-info">
							<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/icon1.png" alt=""/>
									</a>
									<h5><a href="#"><?php echo $comment['Names']; ?></a></h5>
								</div>
								<div class="media-body response-text-right">
								<div 	<p><?php echo $comment['Comment']; ?></p>
									<ul>
										<li><?php echo $comment['Dte']; ?></li>
										<li><a href="">Reply</a></li>
									</ul>
									
								</div>
								<div class="clearfix"> </div>
							</div>
							</div>
							<?php } ?>
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
</script><br><br>	
						<div class="coment-form">
							<h4>Leave your comment</h4>
							<?php
							if(@$_POST['send']){
							$name=input($cn,$_POST['name']);
							$mail=input($cn,$_POST['mail']);
							$cmt=input($cn,$_POST['comment']);
							mysqli_query($cn,"INSERT INTO news_comments(Names,Email,Comment,InfoID,Accepted,Dte) VALUES('$name','$mail','$cmt','".$article['news_ID']."','No','".Date('d/y/m')."')")or die(mysqli_error($cn));
							echo "<b>Your comment is sent!!</b>";
							}
							?>
							<form method='post'>
								<input type="text" name='name' value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required />
								<input type="email" name='mail' value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required />
								<textarea type="text" name='comment'  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required />Your Comment...</textarea>
								<input type="submit" value="Submit Comment" name='send'>
							</form>
						</div>
					</div>
				</div>
				
				</div>
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
                                <img src="images/short_advert.jpg" style='width:250px;height:400px'><hr/>
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- umucowacu3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:400px"
     data-ad-client="ca-pub-9004413538720603"
     data-ad-slot="6651459571"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> <br>
                                
					</div>
                <!---nnn-->
				<div class="col-md-3 gallery-right">
				<center><h3>RELATED STORIES</h3></center><br/>
				<?php
				$sql_related=mysqli_query($cn,"SELECT * FROM news_info WHERE news_ID!='".@$article['news_ID']."' && news_category='".@$article['news_category']."' ORDER BY Published_on DESC")or die(mysqli_error($cn));
while($related=mysqli_fetch_array($sql_related)){
?>
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="./Panel/news_info/news_icons/<?php echo $related['news_icon'];?>" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.php?article=<?php echo $related['news_ID']; ?>"><?php echo $related['News_Title']; ?></a><i><?php echo $related['Short_description']; ?></i><span><?php echo $related['Published_on']; ?></span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php } ?>
							</div>
                        	
				<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>
<!-- //single -->
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

<!-- footer -->
<?php	include ("./includes/footer.php"); ?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>