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
<style type="text/css" media="all">
	@import "editor/css/info.css";
	@import "editor/css/main.css";
	@import "editor/css/widgEditor.css";
</style>
<link href="./style.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script type="text/javascript" src="editor/scripts/widgEditor.js"></script>-->
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




<form method="post" enctype="multipart/form-data">
<table border="0" width="98%" height="450px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Post news</td></tr>
<tr><td class="lefttxt">News title</td><td><input type="text" name="t1" required title="Please Enter Only Characters between 3 to 50 for Package Name"/></td></tr>
<tr><td class="lefttxt">News category</td><td><select name="t2" required><option value="">Select</option>

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

</select></td></tr>

<tr><td class="lefttxt">Subcategory</td><td><select name="t3"/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from subcategories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
echo"<option value=$data[0] >$data[1]</option>";
}



?>

</select>
<tr><td class="lefttxt">News icon</td><td><input type="file" name="t4" /></td></tr>
<tr><td class="lefttxt">Short description</td><td>
				<textarea name="sdesc" style='height:100px;'></textarea>
			</td></tr>
<tr><td class="lefttxt">Full content</td><td>
				<!--<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>-->
				<?php include ('./demos/new.html'); ?>
			</td></tr>
			<tr><td class="lefttxt">Display as</td><td>
				<input type='radio' name="type" value=head />&nbsp;Headline news &nbsp;&nbsp;&nbsp;<input type='radio' name="type" value=sub />&nbsp;Subheadline news</textarea>
			</td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Post" name="sbmt" /></td></tr>
</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$f1=0;
	$f2=0;
	$f3=0;
	$title=mysqli_real_escape_string($cn,$_POST['t1']);
	$category=mysqli_real_escape_string($cn,$_POST['t2']);
	$subcat=mysqli_real_escape_string($cn,$_POST['t3']);
	$icon=mysqli_real_escape_string($cn,$_FILES['t4']['name']);
	$desc=mysqli_real_escape_string($cn,$_POST['sdesc']);
	$content=mysqli_real_escape_string($cn,$_POST['noise']);
	$type=mysqli_real_escape_string($cn,$_POST['type']);
	/*
	$target_dir = "packimages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t4"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t4"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
	
	//t5
	$target_file = $target_dir.basename($_FILES["t5"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t5"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t5"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
			$f2=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	//t6
	$target_file = $target_dir.basename($_FILES["t6"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t6"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t6"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
			$f3=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
		if($f1>0&& $f2>0&&$f3>0)
		{
	*/
	$s="insert into news_info(Published_on,News_Title,Short_description,Full_content,news_icon,Likes,news_author,news_category,Sub_category,News_type) values(now(),'$title','$desc','$content','$icon','0','admin','$category','$subcat','$type')";
	//echo $s;
	//return;
	mysqli_query($cn,$s) or die(mysqli_error($cn));
	move_uploaded_file($_FILES['t4']['tmp_name'],"..\\news_info\\news_icons\\".$_FILES['t4']['name']);
	mysqli_close($cn);
	echo "<script>alert('News posted successfull!!');</script>";
	
		
}
?>

</body>
</html>


