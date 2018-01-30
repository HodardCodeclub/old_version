<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","umucowac_umuco","lecteur1994ange","umucowac_umucodb");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}
$cn=mysqli_connect("localhost","umucowac_umuco","lecteur1994ange","umucowac_umucodb");
?>
