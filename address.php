<?php
    require 'config.php';
    if(!isset($_SESSION['user_id'])){
        header("Location: ./login.php");
    }
    $uid=$_SESSION['user_id'];
    if(isset($_POST['coupon_id'])){
        $_SESSION['cid']=$_POST['coupon_id'];
        $_SESSION['coupon_discount']=$_POST['coupon_discount'];
    }
    if(isset($_GET['rid'])){
        $aid=$_GET['rid'];
        $delete_query="delete from `address` where `aid`='$aid'";
        $delete_query_result= mysqli_query($conn, $delete_query) or die(mysqli_error($conn));
        if($delete_query_result){
            header('location:./address.php');
        }
        else{
            echo 'address NOT removed.';
        }
    }
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/counter.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="js/counter.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="./address.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
     body{
        background-color: #202020 !important;
     }
     .container{
         min-height: 70vh;
     }
     .minh{
         min-height: 60vh;
     }
     .card{
         background-image:linear-gradient(to right,	#D3D3D3,#aaa);
     }
  </style>
</head>

<body>
 <?php
    require 'header.php';
 ?>

    <div class='container'>
        <br>
        <form method='post' action='payment.php'>
        <div class='row minh'>
            
                <?php
                    $select_address="select * from address where uid='$uid'";
                    $select_address_result= mysqli_query($conn, $select_address);
                    $num_rows= mysqli_num_rows($select_address_result);
                    $counter=1;
                    if($num_rows>0){
                        echo '<div class="col-12 my-auto">
                            <div class="card" style="padding: 15px;">
                            <a href="add_address.php" style="color: #333; font-weight: 600;">+ ADD NEW ADDRESS</a>
                            </div>
                            </div>';
                        $userdet="select * from users where id='$uid'";
                        $userdet=mysqli_query($conn, $userdet);
                        $userdet=mysqli_fetch_array($userdet);
                        while($row= mysqli_fetch_array($select_address_result)){
                ?>
            
            
            <div class='col-sm-6 col-xs-12 alignleft mt-2'>
            <div class='card' style='padding: 15px;'>
                <label>
                    <input type='radio' name='aid' id='aid' value='<?php echo $row['aid'];?>' required> Address <?php echo $counter;?>
                </label>
                <h5><?php echo ucfirst($userdet['name']); ?></h5>
                <div class="addspace"><h5><?php echo $row['address'];?></h5></div>
                <h6><?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['zip'];?></h6>
                <h6><?php echo '+'.ucfirst($userdet['phone']); ?></h6><br>
                <center><button onclick="window.location.href='address.php?rid=<?php echo $row['aid'];?>'" class="button" name="remove" type="button" style="background-color: #111; width:100px; padding:2px;">Remove</button></center>
            </div>
            </div>
              <?php $counter++;}
                    }
                    else{
            ?>            
                        <div class="col-12"><div class="card text-center" style="padding: 40px 25px;"><h4>No saved addresses. Please add new address.</h4>
                        <center><a href='add_address.php' class="btn cart mt-3" >Add new address</a></center></div></div>
             <?php
                    }
              ?>
        </div><br><br>
            <div class='row'>
                <div class='col-12 text-center'>
                    <center><button class="button" name="button" type="submit" style="margin-top: 25px; width:20vw; min-width: 130px; padding:10px;">Proceed to Payment</button></center>
                </div>
            </div>
        <br><br>
        </form>
    </div>
    
  <?php 
  include('footer.php')
  ?>

</body>

</html>