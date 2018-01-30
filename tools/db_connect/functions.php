<?php
//Check news category
function category($con,$cat){
$sql_cat=mysqli_query($con,"SELECT * FROM news_categories WHERE CatID='$cat'")or die(mysqli_error($con));
$category=mysqli_fetch_array($sql_cat);
return $category['CatNAME'];
}
//Validate input
function input($connect,$input){
return mysqli_real_escape_string($connect,$input);
}

function fetch_data($con,$query){
$result= mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
			}
			
//Execute query
function Execute_query($con,$query){
return mysqli_query($con,$query);
}
?>