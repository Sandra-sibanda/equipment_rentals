<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Equipment Rentals</title>
	 
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>

<?php
    session_start();

    include("database-connection.php");
    if (isset($_POST['register']))
    {
        $user_email = $_POST['ruser_email'];
        $user_password = $_POST['ruser_password'];
        $user_firstname = $_POST['ruser_firstname'];
        $user_lastname = $_POST['ruser_lastname'];
        $user_address = $_POST['ruser_address'];

        $check_user="select * from users WHERE user_email='$user_email'";
        $run_query=mysqli_query($dbcon,$check_user);

        if(mysqli_num_rows($run_query)>0)
        {
            echo "<script>alert('Customer already exist, Please try another one!')</script>";
            echo"<script>window.open('index.php','_self')</script>";
            exit();
        }
 $saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address) VALUE 
 ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address')";
        mysqli_query($dbcon,$saveaccount);
        echo "<script>alert('Data successfully saved, You may now login!')</script>";				
        echo "<script>window.open('index.php','_self')</script>";
    }

?>
<body >
    
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Equipment Rentals</a>
          </div>
          <div class="navbar-collapse collapse move-me">
              <ul class="nav navbar-nav navbar-right">
                  <li ><a href="index.php">Home</a></li>
                  <li> <a href="Admin/items1.php">Shop</a></li>
                  <li> <a href="contact.php">Contact Us</a></li> 
                   
              </ul>
          </div>
         
      </div>
  </div>


  <div class="modal-dialog modal-sm " style="padding-top: 60px;"> 
  <div style="color:white;background-color:#008CBA" class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel"> Registration Form</h4>
    </div>
    <div class="modal-body">
  
    <form role="form" method="post" action="register.php">
         <fieldset>
					
		<div class="form-group">
                      <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
		</div>
		
		<div class="form-group">
                      <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
		</div>
		
		<div class="form-group">
                      <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
		</div>
		
                  <div class="form-group">
                      <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
		</div>
		
		<div class="form-group">
                      <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
		</div>
 
 </fieldset>
        
  
    </div>
    <div class="modal-footer">
     
      <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
      <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
 </form>
</div>

<div id="footer">
      &copy 2021 Equipment Rentals| All Rights Reserved |  </a>
</div>
 <!-- FOOTER SECTION END-->
<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts --> 
     <script src="assets/js/jquery.flexslider.js"></script>
 <!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts --> 
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts --> 
     <script src="assets/js/custom.js"></script>

</body>
</html>













































<!--<?php
//session_start();

?>
<?php /*
include("database-connection.php");
if(isset($_POST['register']))
{
$user_email = $_POST['ruser_email'];
$user_password = $_POST['ruser_password'];
$user_firstname = $_POST['ruser_firstname'];
$user_lastname = $_POST['ruser_lastname'];
$user_address = $_POST['ruser_address'];



$check_user="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer already exist, Please try another one!')</script>";
 echo"<script>window.open('index.php','_self')</script>";
exit();
    }
 
$saveaccount="insert into users (user_email,user_password,user_firstname,user_lastname,user_address) VALUE ('$user_email','$user_password','$user_firstname','$user_lastname','$user_address')";
mysqli_query($dbcon,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('index.php','_self')</script>";


				
	
			
		
	
		

}*/

?> -->
