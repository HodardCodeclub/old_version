<?php
include('function.php');
$cn=makeconnection();
$sql=mysqli_query($cn,"SELECT * FROM news_info")or die(mysqli_error($cn));
while($info=mysqli_fetch_array($sql)){
echo "<h1>".$info['News_Title']."</h1><br/>";
echo $info['Full_Content'];
}
?>