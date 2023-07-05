<?php
//session_start();
include('connection.php');
//if (isset($_POST['login'])) {
//if($_POST['adminlogin']){
    echo $_POST['name'];
	$adminname  = $_POST['userName'];
	$adminpassword = $_POST['userPassword'];
	mysqli_real_escape_string($conn, $adminname);
	mysqli_real_escape_string($conn, $adminpassword);
$query = "SELECT * FROM admin WHERE user = '$adminname' && password = '$adminpassword'";
//$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
$result = mysqli_query($conn , $query);

$total = mysqli_num_rows($result);

if($total==1){
	$_SESSION['username']=$adminname;
	$_SESSION['password']=$adminpassword;
	header('location:display.php');
} else{
	echo "Login Failed";
}



//}


//if (mysqli_num_rows($result) > 0) {
//	while ($row = mysqli_fetch_array($result)) {
//		$id = $row['id'];
//		$user = $row['name'];
//		$pass = $row['password'];
//		$firstname = $row['firstname'];
//		$lastname = $row['lastname'];
//		$email = $row['email'];
//		$role= $row['role'];
//		$image = $row['image'];
//		if (password_verify($password, $pass )) {
//			$_SESSION['id'] = $id;
//			$_SESSION['username'] = $user;
////			$_SESSION['firstname'] = $firstname;
//			$_SESSION['lastname'] = $lastname;
	//		$_SESSION['email']  = $email;
//			$_SESSION['role'] = $role;
//			$_SESSION['image'] = $image;
			//header('location: display.php');
//		}
//		else {
//			echo "<script>alert('invalid username/password');
//			window.location.href= 'index.php';</script>";

//		}
//	}

//else {
		//	echo "<script>alert('invalid username/password');
		//	window.location.href= 'index.php';</script>";

		//}
//}
//else {
	//header('location: index.php');
//}

?>