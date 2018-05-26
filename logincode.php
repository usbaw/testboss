<?php
session_start();
if(isset($_POST['login'])){
		include 'con_nect.php';
			$email=$_POST['email'];
			$pw=$_POST['password'];
			$query = mysqli_query($run, "SELECT * FROM members WHERE email= '$email'");
			$y = mysqli_fetch_array($query);
			if(password_verify($pw,$y['password']) == TRUE) {
				$indicator=1;

				$_SESSION['Email']= $email;
				$_SESSION['LastName']= $y['lastname'];
				$_SESSION['FirstName']= $y['firstname'];
				
				echo '<script>window.location.href="user_dashboard.php"</script>';
			}
			else{
			echo '
				<script>
					window.alert("Wrong user name or Password!");
				</script>
						';
			}
}
?>