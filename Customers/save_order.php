
<?php
include("database-connection.php");
if(isset($_POST['order_save']))
{
$user_id = $_POST['user_id'];
$order_name = $_POST['order_name'];
$order_price = $_POST['order_price'];
$order_quantity = $_POST['order_quantity'];
$order_total=$order_price * $order_quantity;
$order_status='Pending';




 
$save_order_details="insert into orderdetails (user_id,order_name,order_price,order_quantity,order_total,order_status,order_date) VALUE ('$user_id','$order_name','$order_price','$order_quantity','$order_total','$order_status',CURDATE())";
mysqli_query($dbcon,$save_order_details);
echo "<script>alert('Item successfully added to cart!')</script>";				
echo "<script>window.open('shop.php?id=1','_self')</script>";


				
	
			
		
	
		

}

?>
