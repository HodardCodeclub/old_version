<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: Hodard Hazwinayo
Author Phone: (+250)789610956
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
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

<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
<center><div class='sub_menus'><a href="addsubcategory.php">New SubCategory</a>|<a href="viewsubcategory.php">View Subcategories</a>|<a href="updatesubcategory.php">Update SubCategory</a>|<a href="deletesubcategory.php">Delete SubCategory</a></div></center><br/>

<form method="post" enctype="multipart/form-data">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add Subcategory</td></tr>
<tr><td class="lefttxt">Subcategory Name</td><td><input type="text" name="t1" required pattern="[a-zA-z _]{2,50}" title"Please Enter Only Characters between 2 to 50 for Subcategory name"/></td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from news_categories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<option value=$data[0]>$data[1]</option>";
	
}




?>

</select>
<tr><td class="lefttxt">Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td class="lefttxt">Details</td><td><textarea name="t4"/></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$target_dir = "subCatProfiles/";
	//$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($_FILES["t3"]["name"], PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t3"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	/*if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	} */
	
	//check file size
	/*if($_FILES["t3"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	*/
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES['t3']['tmp_name'],".\\subCatProfiles\\".$_FILES['t3']['name'])){

	$s="insert into subcategories values(null,'" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . basename($_FILES["t3"]["name"]) . "','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s)or die(mysqli_error($cn));
	
	echo "<script>alert('Subcategory saved!!');</script>";
	
	
		} else{
			echo "sorry there was an error uploading your file.";
		}}
}
?>

</body>
</html>


