<?php include 'logincode.php';?>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div>
        <nav class="navbar navbar-light navbar-expand-md" style="background-color:#ffffff;">
            <div class="container"><a class="navbar-brand" href="index.php">Boss Cars</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <form class="form-inline navbar-left">
                        <div class="input-group"><span id="basic-addon1" class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control" type="text" placeholder="Search" aria-describedby="basic-addon1"></div>
                    </form>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="about.php">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="event.php">Events</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="service.php">Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="shop.php">Shop</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="blog.php">Blog</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><?php if($indicator==1){ echo'Logout';}else{echo'Login';}?></a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="user_dashboard.php">My Account</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
      <!-- Login Code content-->

        <div  style="background-image:url(&quot;campbell-boulanger-348386-unsplash (1) (1).jpg&quot;);background-color:rgb(255,255,255);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group">
			<button class="btn btn-primary btn-block" type="submit" name="login" style="background-color:rgb(224,224,225);">Log In</button>
			</div><a href="user_dashboard.php" class="forgot">Forgot your email or password?</a><br>
			<a href="create_account.php" class="forgot">Create Account</a>
			
			
			
			</form>
			
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>

      <!-- Login Code content-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  