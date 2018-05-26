<?php 
session_start();
if($_SESSION['Email']){
$email=$_SESSION['Email'];
}else{
	include'logout.php';
}
	
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BossCar6</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
    <link rel="stylesheet" href="assets/css/4-Columns-Info-Icons.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Article-Cards.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts1.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-centered-brand.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Navigation-e-commerce.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/prodect-details.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/sss-Product-List-f.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/to-do-list.css">
    <link rel="stylesheet" href="assets/css/User-Tasks-and-User-Activity-Streams---List-Group-Component.css">
</head>

<body style="background-image:url(&quot;matt-henry-59403-unsplash (1).jpg&quot;);">
    <div></div>
	<?php include'con_nect.php';
	$ln="";
	$fn="";
//Getting Data From the Database
	$data=mysqli_query($run,"select * from members where email='$email'");
	if($result=mysqli_fetch_array($data)){
		$id= $result['id'];
		$fn= $result['firstname'];
		$mn= $result['middlename'];
		$ln= $result['lastname'];
		$country= $result['country'];
		$bdate= $result['birthdate'];
		$cardetails= $result['cardetails'];
		$sex= $result['sex'];
		$profilepic= $result['profilepicture'];
	}
	
	?>
	
    <?php include 'nav.php'?>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#" style="color:rgb(255,255,255);">Home </a></li>
                <li> <a href="#">Edit Profile</a></li>
                <li> <a href="#" style="color:rgb(254,254,254);">Create Event</a></li>
                <li> <a href="#" style="color:rgb(255,255,255);">My Shop</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a></div>
        </div>
    </div>
    <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;"></div>
    <div class="container profile profile-view" id="profile">
        <!--form method="POST">
            <input type="submit">
        </form-->
    </div>
	     <form method="POST">
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="center"><img src="<?php echo$profilepic; ?>" width="250px" name="photoco" id="photoco" alt="Upload Image"></div>
                    </div><input type="file" class="form-control" name="avatar-file" accept="image/x-png, image/gif, image/jpeg" id="file"></div>
					<span id="uploaded_image"></span>
					<input type="hidden" id="hiddenfirstphotopath" name="hiddenfirstphotopath" value="<?php echo$profilepic; ?>">
				<div class="col-md-8">
                    <h1>Profile </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Firstname </label><input class="form-control" type="text" name="txtfirstname" value="<?php echo $fn;?>"></div>
                        </div>
						<div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Middlename </label><input class="form-control" type="text" name="txtmiddlename" value="<?php echo $mn;?>"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Lastname </label><input class="form-control" type="text" name="txtlastname" value="<?php echo $ln;?>"></div>
                        </div>
						<div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Country </label><?php include 'country1.php';?></div>
                        </div>
						<div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Birthdate </label><input class="form-control" type="text" name="txtbirthdate" value="<?php echo $bdate;?>"></div>
                        </div>
						<div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Sex </label><select name="sex" class="text form-control"><option value="<?php echo $sex;?>" name="txtsex">Male</option><option value="Female">Female</option></select></div>
                        </div>

                    </div>
					<div class="form-group"><label>Car Details </label><input class="form-control" type="text" autocomplete="off" required name="txtcardetails" value="<?php echo $cardetails;?>"></div>
                    <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off" required name="txtemail" value="<?php echo $email;?>"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Password </label><input class="form-control" type="password" name="txtpassword" autocomplete="off" ></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Confirm Password</label><input class="form-control" type="password" name="confirmpass" autocomplete="off" ></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><input class="btn btn-primary form-btn" type="submit" name="save" value="Save">
						<button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form>
	
	
    <div class="article-list"></div>
    <div class="brands"></div>
    <div class="testimonials-clean"></div>
    <div class="testimonials-clean"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>
</html>

<?php
include "con_nect.php";
	 if(isset($_POST['save'])){
		$txtpic = $_POST["hiddenfirstphotopath"];
		$txtfirstname = $_POST["txtfirstname"];
		$txtmiddlename = $_POST["txtmiddlename"];
		$txtlastname = $_POST["txtlastname"];
		$country = $_POST["txtcountry"];
		$txtbirthdate = $_POST["txtbirthdate"];
		$txtsex = $_POST["txtsex"];
		$txtcardetails = $_POST["txtcardetails"];
		$txtemail = $_POST["txtemail"];
		$enc = $_POST["txtpassword"];
		$confirmpass = $_POST["confirmpass"];
		
		$user_pass = password_hash($enc, PASSWORD_DEFAULT,['cost'=> 12]);
		//$query = mysqli_query($run, "SELECT * FROM members WHERE email='$txtemail'");
			/*if($checkemail = mysqli_fetch_array($query)){
			echo '<script>
					window.alert("E-mail already exist!")
				</script>';
			}*/
			//Password Hashing
		//$user_pass = password_hash($enc, PASSWORD_DEFAULT,['cost'=> 12]);
		/*$query = mysqli_query($run, "SELECT * FROM members WHERE email='$email'");
			if ($enc <> $confirmpass) {
				echo '<script>
					window.alert("E-mail already exist or your password did not match on repeat password!")
				</script>';
			}*/
			if ($enc=="" || $confirmpass="") {
				mysqli_query($run,"UPDATE members SET 
				firstname='$txtfirstname'
				,middlename='$txtmiddlename'
				,lastname='$txtlastname'
				,country='$txtcountry'
				,birthdate='$txtbirthdate'
				,sex='$txtsex'
				,cardetails='$txtcardetails'
				,email='$txtemail'
				,profilepicture='$txtpic'
				WHERE email='$txtemail'");
				//echo'<script>alert("NO PASS");</script>';
				//mysqli_query($run,"update members set");
			}
			else{
				mysqli_query($run,"UPDATE members SET 
				firstname='$txtfirstname'
				,middlename='$txtmiddlename'
				,lastname='$txtlastname'
				,country='$txtcountry'
				,birthdate='$txtbirthdate'
				,sex='$txtsex'
				,cardetails='$txtcardetails'
				,email='$txtemail'
				,profilepicture='$txtpic'
				,password='$user_pass'
				WHERE email='$txtemail'");
				//echo'<script>alert("WITH PASS");</script>';
			}
			echo'<script>alert("'.$txtcountry.'");</script>';
}
?>

<!--For Uploading Image in the Folder Without Reloading of the Page-->
<script>
$(document).ready(function(){
	$(document).on('change', '#file' , function(){
		
		var filesSelected = document.getElementById("file").files;
    if (filesSelected.length > 0)
    {
        var fileToLoad = filesSelected[0];

        if (fileToLoad.type.match("image.*"))
        {
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoadedEvent)
			
            {
				document.getElementById("photoco").src=fileLoadedEvent.target.result;
		
				};
            fileReader.readAsDataURL(fileToLoad);
			var a =document.getElementById("file").value.split('\\');			//Creating New Value for the Hidden Path
			document.getElementById("hiddenfirstphotopath").value ="Profilepic/<?php echo date('ljS\ofFY');?>"+a[2];
        }
    }
		var property = document.getElementById('file').files[0];
		var image_name = property.name;
		var image_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(image_extension, ['gif','jpeg','jpg','png']) == -1 ){
			alert ('Invalid Image File');
		}
		var image_size = property.size;
		if(image_size > 9000000){
			alert ('Image File is Too Big');
		}
		else{
			var form_data = new FormData();
			form_data.append("file", property);
			$.ajax({
				url:"uploadphoto.php",
				method:"POST",
				data:form_data,
				contentType:false,
				cache:false,
				processData:false,
				beforeSend:function(){
					$('uploaded_image').html("<label class='text-success'>Image Uploading... </label>");
				},
				success:function(data){
					$('#uploaded_image').html(data);
				}
				
			})
		}		
	});
	});
	
</script>

