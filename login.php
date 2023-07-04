<?php
session_start();
include('connection.php');
//if (isset($_POST['login'])) {
if($_POST['login']){
	$username  = $_POST['name'];
	$password = $_POST['password'];
	mysqli_real_escape_string($conn, $username);
	mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM profile WHERE name = '$username' && password = '$password'";
//$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
$result = mysqli_query($conn , $query);

$total = mysqli_num_rows($result);

if($total==1){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header('location:display.php');
} else{
	echo "Login Failed";
}



}


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
else {
	header('location: index.php');
}

?>