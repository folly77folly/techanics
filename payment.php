<?php
require 'config.php';
session_start();
require 'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;
$keyid= 'rzp_test_aGt0njtFw7509b';
$secretkey= 'qMVfOdwWGyQckJexj9NDgZUe';
$api= new Api($keyid,$secretkey);

if(!isset($_SESSION['user_id'])){
        header("Location: ./login.php");
    }
$uid=$_SESSION['user_id'];
// if(!isset($_POST['aid'])){
//         echo '<script>alert("No address chosen!!"); window.location.href = `./address.php`</script>';
//     }
// $_SESSION['aid']=$_POST['aid'];
// $subtotal=0;
// $csubtotal=0;
// $select_query="select * from cart where user_id='$uid'";
// $select_query_result= mysqli_query($conn, $select_query);
// while($row= mysqli_fetch_array($select_query_result)){
//     $sname=$row['product_sname'];
//     $select="select * from products where sname='$sname'";
//     $select_result= mysqli_query($conn, $select);
//     $rows= mysqli_fetch_array($select_result);
//     $amt=$rows['s_price']*$row['qty'];
//     $camt=$rows['c_price']*$row['qty'];
//     $csubtotal+=$camt;
//     $subtotal+=$amt;
// }
// $subtotal=$subtotal-$_SESSION['coupon_discount'];
// $profit=$subtotal-$csubtotal;
// $subtotal=$subtotal*100;

$subtotal=100;
$order= $api->order->create(array(
    'receipt'=> 'ORD'.rand(1000,99999),
    'amount'=> $subtotal,
    'payment_capture'=>1,
    'currency'=>'INR',
));
?>

<!-- <html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

 <?php
    require 'header_top.php';
 ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- <script src="js/counter.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
  <style>
     body{
        background-color: #fff !important;
     }
     .minh{
         min-height: 80vh;
     }
  </style>
    <div class='container minh'>
        <br>
        <div style="margin-top:100px; text-align:center;">
            <h1 style="color: #3f8995;">You will be Redirected to the payment gateway</h1>
            <p style="color: #002730;">Click button to continue.</p>
        </div><br><br>
        
        <div class="row">
            <div style="width:30px; margin: auto;">
        <form action="after_payment.php?amount=<?php echo 100;?>&profit=<?php echo 200;?>" method="POST">
        <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $keyid;?>"
        data-amount="<?php echo $order->amount;?>"
        data-currency="INR"
        data-order_id="<?php echo $order->id;?>"
        data-buttontext=" Continue "
        data-name="Techanics"
        data-description="transaction"
        data-image=""
        <?php
            $select_user="select * from users where id='$uid'";
            $select_user_result= mysqli_query($conn, $select_user);
            $userrow= mysqli_fetch_array($select_user_result);
        ?>
        data-prefill.name="a<?php echo $userrow['u_name'];?>"
        data-prefill.email="b<?php echo $userrow['u_email'];?>"
        data-prefill.contact="c<?php echo $userrow['u_phone'];?>"
        ></script>
        <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
        </div>
        </div>
    </div>
    
  <?php 
  include('footer.php')
  ?>


