<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: Hodard Hazwinayo
Author Phone: (+250)789610956
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
<style type="text/css">
.sub_menus a{
color:green;
font-weight:bolder;
padding:20px;
}
</style>

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
	$s="insert into category(Cat_name) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">



<center><div class='sub_menus'><a href="addsubcategory.php">New SubCategory</a>|<a href="viewsubcategory.php">View Subcategories</a>|<a href="updatesubcategory.php">Update SubCategory</a>|<a href="deletesubcategory.php">Delete SubCategory</a></div></center><br/>

<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Subcategory</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="70%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">No</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Image</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Subcategory Name</td></tr>

<?php

$s="select * from subcategories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$c=1;
while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$c</td><td style=' padding:5px;'><img src='./subCatProfiles/$data[3]' width=100 height=70></td><td style=' padding:5px;'>$data[1]</td></tr>";

}


?>

</table>
</td></tr></table>

</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>