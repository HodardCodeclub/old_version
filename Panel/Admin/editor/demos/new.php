<?php if(!isset($_SESSION)) { session_start(); }
//echo $_SERVER['PHP_SELF'];
//return;
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
 include('../../function.php');
 ?>
<style type='text/css'>
.tableshadow{ box-shadow:10px 10px 5px #999; border:solid 1px #60b2e7;width:95%;}

.tableshadow input[type=text] {
    width: 98%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:14px;
}.tableshadow select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:14px;
}

.tableshadow input[type=submit] {
    width: 98%;
    background-color: #60b2e7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:14px;
}
.tableshadow [type=file] {
    width: 40%;
    background-color: silver;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:14px;
}

.tableshadow input[type=submit]:hover {
    background-color: #60b2e4;
}
.tableshadow textarea{
width:98%;
padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:14px;
}

.lefttxt{  font-size:18px; color:#60b2e7;width:10%;font-weight:bold;}
.toptd{ color:white; font-size:24px; text-align:center; height:40px; background-color:#60b2e7}
</style>
<a href='../../index.php' style='padding:20px; padding-bottom:10px;text-decoration:none;font-size:20px;background:black;color:white'>Back to panel</a><br/><br/>
<div id="sample">
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<form method=post enctype="multipart/form-data">
<table class="tableshadow" align=center>
<tr><td colspan="2" class="toptd">News editor</td></tr>
<tr><td class="lefttxt">News title</td><td><input type="text" name="t1" required title="Please Enter Only Characters between 3 to 50 for Package Name"/></td></tr>
<tr><td class="lefttxt">News category</td><td>Category:&nbsp;&nbsp;<select name="t2" required><option value="" selected=selected>Select category</option>
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
</select>&nbsp;&nbsp;&nbsp;&nbsp;Subcategory:&nbsp;<select name=t3><option value="">Select sub category</option>
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
</select></td></tr>
<tr><td class="lefttxt">News profile</td><td><input type="file" name="t4" /></td></tr>
<tr><td class="lefttxt">Short description</td><td>
				<input type="text" name="sdesc" required title="Please Enter Only Characters between 3 to 50 for Package Name"/></td></tr>
							<tr><td class="lefttxt">Display as</td><td>
				<input type='radio' name="type" value=head />&nbsp;Headline news &nbsp;&nbsp;&nbsp;<input type='radio' name="type" value=sub />&nbsp;Subheadline news&nbsp;&nbsp;&nbsp;<input type='radio' name="type" value=break />&nbsp;Breaking news</textarea>
			</td></tr>
<tr><th class="lefttxt" colspan=2> News title</th></tr>
<tr><td colspan=2 align=center>
<textarea name="content" style="height:500px">
</textarea>
</td></tr>
<tr><td colspan=2 align=center><input type="submit" value="Post" name="sbmt" /></td></tr>
</table>
</form>
<br />
</div>
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
	//$icon=mysqli_real_escape_string($cn,$_FILES['t4']['name']);
	$desc=mysqli_real_escape_string($cn,$_POST['sdesc']);
	$content=mysqli_real_escape_string($cn,$_POST['content']);
	$type=mysqli_real_escape_string($cn,$_POST['type']);
	$target_dir = "../../../news_info/news_icons/";
	$icon=time().basename($_FILES["t4"]["name"]);
	$target_file = $target_dir.$icon;
	$s="insert into news_info(Published_on,News_Title,Short_description,Full_content,news_icon,Likes,news_author,news_category,Sub_category,News_type) values(now(),'$title','$desc','$content','$icon','0','admin','$category','$subcat','$type')";
	//echo $s;
	//return;
	mysqli_query($cn,$s) or die(mysqli_error($cn));
	move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file);
	mysqli_close($cn);
	echo "<script>alert('Pay me on BK Acc: 00050-00663596-36 OR 0789610956!!');</script>";
}

?>
