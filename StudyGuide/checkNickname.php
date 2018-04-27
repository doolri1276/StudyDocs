<?php 

	header('Content-Type:text/html; charset=utf-8');

	$nickname=$_POST['nickname'];


	//DB연결
	$conn=mysqli_connect("localhost","snownaul2","2324356tct","snownaul2");

	mysqli_query($conn,"set names utf8");

	$sql="select 0 from user where nickname=$nickname";

	$result=mysqli_query($conn,$sql);

	if($result){//중복된 것이 있다.
		echo "NotAvailable";
	}else{
		echo "Available";
	}

 ?>