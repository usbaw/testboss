<?php 	session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
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
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing1.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V101.css">
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
    <link rel="stylesheet" href="assets/css/Shop-item.css">
    <link rel="stylesheet" href="assets/css/Shop-item1.css">
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
    <?php
	include'con_nect.php';
	$em=$_SESSION['Email'];
	$ln=$_SESSION['LastName'];
	$fn=$_SESSION['FirstName'];
	
	//Getting Profile Picture
	$getpic = mysqli_query($run, "select * from members where email='$em'");
		if($pic = mysqli_fetch_array($getpic)){
		$profilepic=$pic['profilepicture'];}
	?>
	<div></div>
    <div>
        <nav class="navbar navbar-light navbar-expand-md" style="background-color:#ffffff;">
            <div class="container"><a class="navbar-brand" href="#">ADMIN DASHBOARD</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <form class="form-inline navbar-left">
                        <div class="input-group"><span id="basic-addon1" class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control" type="text" placeholder="Search" aria-describedby="basic-addon1"></div>
                    </form>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Events</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Shop</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Login</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">My Account</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile</a><a class="dropdown-item" role="presentation" href="logout.php">Logout</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#" style="color:rgb(255,255,255);">Home </a></li>
                <li> <a href="edit_profile.php">Edit Profile</a></li>
                <li> <a href="#" style="color:rgb(254,254,254);">Create Event</a></li>
                <li> <a href="#" style="color:rgb(255,255,255);">Approve Event</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1>&nbsp;</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
        <div><img class="rounded-circle" title="You Can Change Your Profile Picture in Edit Profile" src="<?php echo $profilepic; ?>" height="150px" style="margin-top:-70px;">
            <h3><?php echo $fn .' '. $ln;?></h3>
            <p style="padding:20px;padding-bottom:0;padding-top:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque.</p>
        </div>
        <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
            <div class="col-md-6">
                <p class="text-nowrap text-right">Friends</p>
                <p class="text-right"><strong>12M</strong> </p>
            </div>
            <div class="col-md-6">
                <p class="text-left">Shares </p>
                <p class="text-left"><strong>1M</strong> </p>
            </div>
        </div>
    </div>
    <div class="article-list"></div>
    <div class="brands"></div>
    <div class="testimonials-clean"></div>
    <div class="testimonials-clean"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/Grid-and-List-view-V10.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
</body>
</html>