<?php if(!isset($_SESSION)) { session_start(); }
require_once("../../db_connect/functions.php");
include('function.php');
if(isset($_GET['act'])=="accept")
{
mysqli_query($cn,"UPDATE news_comments SET Accepted='Yes' WHERE CmtID='".@$_GET['comment']."'");							
}
if(isset($_GET['act'])=="deny")
{
mysqli_query($cn,"UPDATE news_comments SET Accepted='Not' WHERE CmtID='".@$_GET['comment']."'");							
}
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->

<script type="text/javascript" src="./Editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
<?php
$ql_TITLE=mysqli_query($cn,"SELECT DISTINCT news_info.News_Title, news_ID FROM news_comments,news_info WHERE news_info.news_ID=news_comments.InfoID")or die(mysqli_error($cn));
if(mysqli_num_rows($ql_TITLE)){
echo "<table width='100%' border=1>";
echo "<tr><th>News title</th><th>Comment and Sender</th></tr>";
while($TITLE=mysqli_fetch_array($ql_TITLE)){
$ql_comments=mysqli_query($cn,"SELECT * FROM news_comments WHERE InfoID='".$TITLE['news_ID']."' && Accepted='No'");
echo "<tr>";
echo "<td>".$TITLE['News_Title']."</td>";
echo "<td>";
while($comment=mysqli_fetch_array($ql_comments)){
echo $comment['Comment']." by <i  style='color:blue'>".$comment['Email']."</i>&nbsp;&nbsp;<a href='newsComments.php?act=accept&comment=".$comment['CmtID']."' style='color:green'>Accept</a>&nbsp;|&nbsp;<a href='newsComments.php?act=deny&comment=".$comment['CmtID']."' style='color:red'>Deny</a><hr/>";
}
echo "</td>";
}
echo "</table>";
}else{
echo "No comments";
}
?>
</div>
</div>
<?php include('bottom.php'); ?>


	
		


</body>
</html>


