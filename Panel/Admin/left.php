<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%">
<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">Users</a></td></tr>
<?php }?>

<tr><td><a href="addcategory.php">News Categories</a></td></tr>
<tr><td><a href="addsubcategory.php">News Subcategories</a></td></tr>
<tr><td><a href="./editor/demos/new.php">Post news info</a></td></tr>
<tr><td><a href="">Last posted news</a></td></tr>
<tr><td><a href="AddEvent.php">Add Events</a></td></tr>
<tr><td><a href="miss.php">Misses and history</a></td></tr>
<tr><td><a href="famous.php">Famous and history</a></td></tr>
<tr><td><a href="newsComments.php">News comments</a></td></tr>
<tr><td><a href="sug.php">Messages</a></td></tr>
<tr><td><a href="sub.php">Subscribers</a></td></tr>
<tr><td><a href="part.php">Partners</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatepackage.php">Update Package</a></td></tr>
<tr><td><a href="deletepackage.php">Delete Package</a></td></tr>

<?php }?>

<tr><td><a href="viewpackage.php">View Package</a></td></tr>

<tr><td><a href="addadvertisement.php">Add Advertisement</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="deleteadvertisement.php">Delete Advertisement</a></td></tr>
<?php }?>

<tr><td><a href="viewadvertisement.php">View Advertisement</a></td></tr>
<tr><td><a href="viewenquiry.php">View Enquiry</a></td></tr>
</table>


</body>
</html>