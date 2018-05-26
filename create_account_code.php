<?php
//Code for Sign Up
include "con_nect.php";
	 if(isset($_POST['signup'])){
		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$lastname = $_POST["lastname"];
		$country = $_POST["txtcountry"];
		$birthdate = $_POST["bdate"];
		$sex = $_POST["sex"];
		$cardetails = $_POST["cardetails"];
		$email = $_POST["email"];
		$enc = $_POST["password"];
		$retypepassword = $_POST["password-repeat"];
		//Password Hashing
		$user_pass = password_hash($enc, PASSWORD_DEFAULT,['cost'=> 12]);
		$query = mysqli_query($run, "SELECT * FROM members WHERE email='$email'");
			if($checkemail = mysqli_fetch_array($query)){
			echo '<script>
					window.alert("E-mail already exist!")
				</script>';
			}
			elseif ($enc <> $retypepassword) {
				echo '<script>
					window.alert("E-mail already exist or your password did not match on repeat password!")
				</script>';
				
// For Male Avatar 
				}elseif ($sex=="Male"){
				mysqli_query($run,"INSERT INTO members SET 
							firstname = '$firstname', 
							middlename = '$middlename', 
							lastname = '$lastname', 
							country = '$country', 
							birthdate = '$birthdate', 
							sex = '$sex', 
							cardetails = '$cardetails', 
							email = '$email', 
							password = '$user_pass', 
							profilepicture = 'assets/Profilepic/maleavatar.png' ");
				session_start();		
				$_SESSION['Email']= $email;
				$_SESSION['LastName']= $y['lastname'];
				$_SESSION['FirstName']= $y['firstname'];
				
				echo '<script>window.location.href="user_dashboard.php"</script>';
				
				}
// For Female Avatar 
			else{
				mysqli_query($run,"INSERT INTO members SET 
							firstname = '$firstname', 
							middlename = '$middlename', 
							lastname = '$lastname', 
							country = '$country', 
							birthdate = '$birthdate', 
							sex = '$sex', 
							cardetails = '$cardetails', 
							email = '$email', 
							password = '$user_pass', 
							profilepicture = 'assets/Profilepic/maleavatar.png' ");
				session_start();			
				$_SESSION['Email']= $email;
				$_SESSION['LastName']= $y['lastname'];
				$_SESSION['FirstName']= $y['firstname'];
				
				echo '<script>window.location.href="user_dashboard.php"</script>';
				
				}

			}
?>
