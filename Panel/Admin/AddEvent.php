<?php if(!isset($_SESSION)) { session_start(); } 
include('function.php');
include('../../db_connect/functions.php');
if(isset($_POST["sbmt"]))
{
$title=input($cn,$_POST['title']);	
$date=input($cn,$_POST['dte']);	
$desc=input($cn,$_POST['mdetails']);	
$CAT=input($cn,$_POST['cat']);
mysqli_query($cn,"INSERT INTO event(EvTitle,Descript,Category,Edate) VALUES('$title','$desc','$CAT','$date')")or die(mysqli_error($cn));							
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
<title>UmucoWacu::Panel</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="./Editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>



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
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
<?php 
require_once('./CalenderCode.php');
?>
<form method="post" enctype="multipart/form-data">
<table border="0" width="500px" height="" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">ADD EVENT</td></tr>
</td></tr>

<tr><td class="lefttxt">Title</td><td><input type="text" name='title'  value="<?php if(isset($_POST["show"])){ echo $Packname ;} ?> " name="title" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for Package Name"/></td></tr>

</select>
<tr><td class="lefttxt">Date</td><td><input type='text' name='dte' placeholder='Date of starting' onClick="ds_sh(this);" readonly="readonly" style="cursor: text" onFocus="this.select();" id="txtDate" required /></td></tr>
<tr><td class="lefttxt">Category</td><td>
<select name="cat" required><option value="" selected>Select category</option>
<?php
$cn=makeconnection();
$s="select * from news_categories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
echo"<option value=$data[0]>$data[1]</option>";
}
mysqli_close($cn);



?>

</select>
</td></tr>
<tr><td class="lefttxt">Description</td><td>
<?php require_once('./editor/demos/new.html'); ?>
</td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Save" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>


	
		


</body>
</html>


