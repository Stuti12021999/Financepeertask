<?php 
	session_start();
	require_once('config.php');
	
	$email = $_POST['a1'];
	$pwd = $_POST['a2'];
	$con = OpenCon();
	$qry1 = mysqli_query($con,"SELECT * FROM client WHERE Email='$email' AND Password='$pwd'");
	$qry2 = mysqli_num_rows($qry1);
	if($qry2) {
		$row = mysqli_fetch_array($qry1);
		$_SESSION['log']=$row;
		$keys = "client";
		$_SESSION['log1']=$keys;
		header("location:index.php");
	} else {
		$qry3 = mysqli_query($con,"SELECT * FROM admin WHERE Email='$email' AND Password='$pwd'");
		$qry4 = mysqli_num_rows($qry3);
		if($qry4){
			$row = mysqli_fetch_array($qry3);
			$_SESSION['log']=$row;
			$keys = "admin";
			$_SESSION['log1']=$keys;
			header("location:index.php");
		} else {
			$qry5 = mysqli_query($con,"SELECT * FROM doctor WHERE Email='$email' AND Password='$pwd'");
			$qry6 = mysqli_num_rows($qry5);
			if($qry6) {
				$row = mysqli_fetch_array($qry5);
				$_SESSION['log']=$row;
				$keys="doctor";
				$_SESSION['log1']=$keys;
				header("location:index.php");
			} else {
				?>
				<script>
					alert ("Wrong Email ID or Password");
					window.location.href = "Signin.php";
				</script>
			<?php	
			}
		}
	}
?>
