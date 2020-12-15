<?php
require 'config.php';
if(!isset($_SESSION['user_id'])){
        header("Location: ./index.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link  rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <title>BS Auto Accessories | Mumbai</title>
  </head>
  <style>
body {
  background-color: #202020 !important;

}
.container{
    min-height: 80vh;
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.btnn{
  border: none;
  border-radius: 23px;
  padding: 10px 30px;
  color: white;
  background-color: coral;
  font-size:16px;
  transition: all .2s ease-in-out;
}
.popup {
  width: 500px;
  height:280px;
  padding:30px 20px;
  background:#f5f5f5;
  border-radius:10px;
  box-sizing:border-box;
  z-index:2;
  text-align:center;
  opacity:0;
  top:-200%;
  transform:translate(-50%,-50%) scale(0.5);
  transition: opacity 300ms ease-in-out,
              top 1000ms ease-in-out,
              transform 1000ms ease-in-out;
}


@media (max-width: 560px){
    .popup .title {
  margin:5px 0px;
  font-size:20px;
  font-weight:600;
    }
    .popup {
  width: 300px;
  height:320px;
  padding:20px 13px;
}
.popup .description {
  color:#111;
  font-size:13px;
  padding:5px;
}
}


.popup.active {
  opacity:1;
  top:50%;
  transform:translate(-50%,-50%) scale(1);
  transition: transform 300ms cubic-bezier(0.18,0.89,0.43,1.19);
}
.popup .icon {
  margin:5px 0px;
  width:50px;
  height:50px;
  border:2px solid #34f234;
  text-align:center;
  display:inline-block;
  border-radius:50%;
  line-height:60px;
}
.popup .icon i.fa {
  font-size:30px;
  color:#34f234;
} 
.popup .title {
  margin:5px 0px;
  font-size:35px;
  font-weight:600;
}
.popup .description {
  color:#111;
  font-size:18px;
  padding:5px;
}
.popup .dismiss-btn {
  margin-top:15px;
}
.popup .dismiss-btn button {
  padding:10px 20px;
  background:goldenrod;
  color:#f5f5f5;
  border:2px goldenrod;
  font-size:16px;
  font-weight:600;
  outline:none;
  border-radius:10px;
  cursor:pointer;
  transition: all 300ms ease-in-out;
}
.popup .dismiss-btn button:hover {
  color:goldenrod;
  background:black;
}
.popup > div {
  position:relative;
  top:10px;
  opacity:0;
}
.popup.active > div {
  top:0px;
  opacity:1;
}
.popup.active .icon {
  transition: all 300ms ease-in-out 250ms;
}
.popup.active .title {
  transition: all 300ms ease-in-out 300ms;
}
.popup.active .description {
  transition: all 300ms ease-in-out 350ms;
}
.popup.active .dismiss-btn {
  transition: all 300ms ease-in-out 400ms;
}

  </style>
  <body>
<?php
    include 'header.php';
?>
<div class='container'>
    <div class="popup center ">
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <div class="title">
          Thanks for shopping
        </div>
        <div class="description">
         Your order has been placed!!
        </div>
         <div class="dismiss-btn">
          <button  onclick="location.href = 'https://bsautoaccessories.com/myorder.php';" id="dismiss-popup-btn">
            My Orders
          </button>
        </div>
      </div>

</div>

      <script>
      
      $( document ).ready(function() {
    document.getElementsByClassName("popup")[0].classList.add("active");
});
      </script>
<?php
    include 'footer.php';
?>
</body>
</html>
      