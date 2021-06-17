<?php
	include("config.php");

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];

		$result=mysqli_query($mysqli,"INSERT into record values('','$name')");

		if($result){
			echo "Success";
		}else{
			echo "Failed";
		}
	}
?>