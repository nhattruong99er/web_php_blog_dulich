<?php
	include('../../database/connect.php');
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="DELETE FROM `customers` WHERE ID='$id'";
		$kq = mysqli_query($conn,$sql);
		header("location:show-customer.php");
	}
?>
