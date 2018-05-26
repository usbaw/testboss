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
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>

</head>
<?php
include 'con_nect.php';
	$id=$_GET['id'];
	$query = mysqli_query($run, "SELECT * FROM events WHERE id='$id'");
	if($row=mysqli_fetch_array($query)) {
	$imglocation=$row['imglocation'];
	$title=$row['title'];
	$date=$row['date'];
	$time=$row['time'];
	$location=$row['location'];
	$regestrationfee=$row['regestrationfee'];
	$details=$row['details'];
	}
?>
<body style="background-image:url(&quot;matt-henry-59403-unsplash (1).jpg&quot;);">
    <div></div>
    <?php include 'nav.php'?>

    <div class="highlight-phone" style="background-image:url(&quot;<?php echo $imglocation ; ?>&quot;);background-repeat: no-repeat; background-position: center;width:100%;">
        <div class="container">
		
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 style="color:rgb(255,255,255);"><?php echo$title; ?></h2>
						<h3 style="color:rgb(255,255,255);"><?php echo$location; ?></h3>
						<h3 style="color:rgb(255,255,255);"><?php echo'Regestration Fee: '.$regestrationfee.''; ?></h3>
						<h3 style="color:rgb(255,255,255);"><?php echo$date."&nbsp;&nbsp;".$time; ?></h3>
                        <h4 style="color:rgb(254,254,254);"><?php echo$details; ?></h4>
						<a class="btn btn-primary" role="button" href="#" style="background-color:rgb(255,255,255);" data-toggle="modal" data-target="#exampleModal">Regester</a></div>
                </div>
                <div class="col-sm-4">
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="POST" >
      <div class="modal-body">
        
			<input type="text" placeholder="First Name" required value="<?php echo $fn;?>">
			<input type="text" placeholder="Last Name" required value="<?php echo $ln;?>">
			<input type="text" placeholder="Email Address" required value="<?php echo $_SESSION['Email'];?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
		
      </div>
	  </form>
    </div>
  </div>
</div>
<!-- End of Modal -->
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>
    <?php include 'footer.php'?>
</body>

</html>