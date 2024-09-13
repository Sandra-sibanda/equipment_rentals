<?php
session_start();

?>
<?php
$host = "localhost:3309";
$user = "root";
$password = "";
$database = "equipment-rental";
$conn = mysqli_connect($host,$user,$password,$database);

if(isset($_POST['user_login']))

$user_email = stripslashes($_REQUEST['user_email']); // removes backslashes
$user_email= mysqli_real_escape_string($conn,$username); //escapes special chara
$user_password = stripslashes($_REQUEST['password']);
$user_password = mysqli_real_escape_string($conn,$password);		
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $sql = "select * from users WHERE user_email='$user_email' AND user_password='$user_password'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $rows = mysqli_num_rows($result);

    if($rows == 1){
        echo "<script>alert('You're successfully login!')</script>";
       /** I see, role is an integer not a string */
        if ($row['role'] == 'User') {
            header('Location: Customers/index.php');
            $_SESSION['user_email']=$user_email;
        } 
        else {
            header('Location: Admin/items.php');
            $_SESSION['admin_username']=$row['user_firstname'];
        }
    }else{
        echo "<script>alert('Email or password is incorrect!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        exit();
    }

    echo "<script>alert($check_user)</script>";
/*
    $run=mysqli_query($dbcon,$check_user);
 

    if(mysqli_num_rows($run))
    {
	    echo "<script>alert('You're successfully login!')</script>";
       
        if ($check_role == 'User') {
            header('Location: Customers/index.php');
            $_SESSION['user_email']=$user_email;
        } else {
            header('Location: Admin/items.php');
            $_SESSION['admin_username']=$admin_username;
        }

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        exit();
		
    }
*/
    
}
?>