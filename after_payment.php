<?php
    require 'config.php';
    if(!isset($_SESSION['user_id'])){
        header("Location: ./login.php");
    }
    $uid=$_SESSION['user_id'];
    $counter=0;
    if(isset($_POST)){
        $aid=$_SESSION['aid'];
        $cid=$_SESSION['cid'];
        $discount=$_SESSION['coupon_discount'];
        $select_address="select * from address where aid='$aid'";
        $select_address_result= mysqli_query($conn, $select_address);
        $row_address= mysqli_fetch_array($select_address_result);
        $address=$row_address['address'].", ".$row_address['city'].", ".$row_address['state'].", ".$row_address['zip'];
        $payid=$_POST['razorpay_payment_id'];
        $order_id=$_POST['razorpay_order_id'];
        $sign=$_POST['razorpay_signature'];
        $amt=$_GET['amount'];
        $profit=$_GET['profit'];
        $amt=$amt/100;
        $payment_query="insert into payments(`user_id`,`rp_payment_id`,`rp_order_id`,`rp_signature`,`amount`,`address`,`coupon_id`,`coupon_discount`,`status`,`profit`) values ('$uid','$payid','$order_id','$sign', '$amt', '$address','$cid', '$discount','ordered','$profit')";
        if(mysqli_query($conn, $payment_query)){
            $select_cart="select * from cart where user_id='$uid'";
            $select_cart_result= mysqli_query($conn, $select_cart);
            $num_rows_cart= mysqli_num_rows($select_cart_result);
            while($row_cart= mysqli_fetch_array($select_cart_result)){
                $prod="select * from products where sname='".$row_cart['product_sname']."'";
                $prod=mysqli_query($conn,$prod);
                $prod=mysqli_fetch_array($prod);
                $insert_order="insert into user_orders(`user_id`,`rp_orderid`,`product_sname`,`qty`,`cp`,`sp`) values ('$uid','$order_id','".$row_cart['product_sname']."','".$row_cart['qty']."','".$prod['c_price']."','".$prod['s_price']."')";
                $insert_order_result= mysqli_query($conn, $insert_order);
                if($insert_order_result){
                    $select_product="select * from products where sname='".$row_cart['product_sname']."'";
                    $select_product_result= mysqli_query($conn, $select_product);
                    $row_product= mysqli_fetch_array($select_product_result);
                    $new_qty=$row_product['qty']-$row_cart['qty'];
                    $update_product="update products set qty='$new_qty' where sname='".$row_cart['product_sname']."'";
                    if(mysqli_query($conn, $update_product)){
                        $delete_cart="delete from cart where user_id='$uid' and product_sname='".$row_cart['product_sname']."'";
                        if(mysqli_query($conn, $delete_cart)){
                            $counter++;
                        }
                        else{
                            echo "<script>alert('cart delete query unsuccessful')</script>";
                        }
                    }
                    else{
                        echo "<script>alert('product qty update query unsuccessful')</script>";
                    }
                }
                else{
                    echo "<script>alert('order insert query unsuccessful')</script>";
                }
            }
            if($counter==$num_rows_cart && $counter>0){
                unset($_SESSION['cid']);
                unset($_SESSION['aid']);
                unset($_SESSION['coupon_discount']);
                header("Location: ./order_confirmation.php");
            }
            else{
                echo "<script>alert('counter not equal to cart rows')</script>";
            }
        }
        else{
            echo "<script>alert('Payment query unsuccessful')</script>";
        }
        
    }
    else{
        echo "<script>alert('payment unsuccessful'); window.location.href = `./cart.php`</script>";
    }
?>