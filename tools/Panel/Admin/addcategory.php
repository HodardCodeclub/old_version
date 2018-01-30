<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: Hodard Hazwinayo
Author Phone: (+250)789610956
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
<!--<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>-->

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>
<style type="text/css">
.sub_menus a{
color:green;
font-weight:bolder;
padding:20px;
}
</style>
<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
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
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into news_categories(CatNAME) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Category Saved');</script>";
}
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">


<?php if($_SESSION["usertype"]=="Admin")
{?>
<center><div class='sub_menus'><a href="addcategory.php">New Category</a>|<a href="viewcategory.php">View categories</a>|<a href="updatecategory.php">Update Category</a>|<a href="deletecategory.php">Delete Category</a></div></center><br/>

<tr><td></td></tr>
<tr><td></td></tr>
<?php }?>

<form method="post">
<table border="0" width="400px" height="200px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add Category</td></tr>
<tr><td class="lefttxt">Category Name</td><td><input type="text" name="t1" required pattern="[a-zA-z _]{3,20}" title"Please Enter Only Characters between 3 to 10 for Category Name" /></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>