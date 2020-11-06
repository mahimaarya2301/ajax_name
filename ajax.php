<?php
	//1.DB Connection Open
	$con = mysqli_connect('localhost','root','','ajax_name') or die (mysqli_error($con));
	//echo 'ok';
	if($_GET['action'] == 'store_fullname'){
		//Always filter the incoming data
		$fname = filter_var($_GET['fname'],FILTER_SANITIZE_STRING);
	
		//2.Build the query
		$sql = "INSERT INTO user_tbl(fname) VALUES ('$fname')";
		//3.Execute the query
		$result = mysqli_query($con,$sql);
		$data = [
			'status'=>200,
			'msg'=>'User registered successfully'
		];
		
		echo json_encode($data);
	}
	
	//DB Connection Close
	mysqli_close($con);
?>