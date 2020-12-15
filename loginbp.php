<?php
session_start();
require 'header_top.php';
if(isset($_SESSION['error'])){
    $errorMsg = $_SESSION['error'][1];
    $errorKey = $_SESSION['error'][0];
    unset($_SESSION['error']);
}else{
    $errorMsg = "";
}

if(isset($_SESSION['success'])){
    $successMsg = $_SESSION['success'][1];
    unset($_SESSION['success']);
}else{
    $successMsg = "";
}
?>
 
 <style>
.minh{
    min-height: 80vh;
    margin-top: 100px;
}  
div.mycontainer {
    margin: auto;
    margin-bottom: 30px;
    padding: 1em;
    overflow: hidden;
    background-color: whitesmoke;
}

div.mycontainer label,
div.mycontainer input,
div.mycontainer button {
    display: block;
    width: 80%;
    font-size: 1em;
}

div.mycontainer label {
    margin: 0.5em auto 0.5em auto;
}

div.mycontainer input {
    padding: 0.8em 0 0.8em 0.8em;
    outline: none;
    border: none;
    border-bottom: 2px solid #7eb3bd;
    margin: 0.5em auto 0.5em auto;
}

div.mycontainer button {
    outline: none;
    margin: 2em auto 1em auto;
    padding: 1.2em;
    cursor: pointer;
    letter-spacing: 0.2em;
    box-shadow: 0 0 2px 2px #888;
    background-color: #7eb3bd;
    color: white;
    border: none;
    border-radius: 5px;
}



.tab {
    margin: 0 auto 0 auto;
    display: flex;
    width: 100%;
}

.tablinks {
    padding: 1em 0 1em 0;
    width: 50%;
    text-align: center;
    cursor: pointer;
    border: 0.4px solid #7eb3bd;
    transition: all 0.2s linear;
}

.mycontainer .active {
    animation-name: activetab;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    background-color: #7eb3bd;
    color: white;
}

@keyframes activetab {
    from {
        transform: rotateY(180deg);
    }
    to {
        transform: rotateY(0deg);
    }
}

.tabcontent {
    width: 100%;
    margin: 0 auto 0 auto;
    display: none;
    padding: 2em 0 2em 0;
    overflow: hidden;
}


@media only screen and (min-width: 1224px) {
    div.mycontainer {
        overflow: hidden;
        width: 400px;
    }
}

@media only screen and (min-width: 1824px) {
    div.mycontainer {
        width: 400px;
    }
}
@media only screen and (min-device-width: 481px) and (max-device-width: 1223px) {
    div.mycontainer {
        width: 400px;
    }
}
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    div.mycontainer {
        width: 80%;
    }
}
 </style>
 <head>
 <?php

 ?>
 </head>
 <div class='minh'>
    <div class="mycontainer">
        
        <div class="tab">
            <div class="tablinks" id="logintab" data-form-id="login">Login</div>
            <div class="tablinks" id="signuptab" data-form-id="signup">Sign up</div>
        </div>
        <div class="tabcontent" id="login">
            <?php if($successMsg !== ""){ 
                ?>
                    <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$successMsg ?>
                    </div>
                <?php } ?>
                <div class="alert alert-dismissible" style="display:none" id="msgdiv">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <label for="loginphone">Phone Number:</label>
                <input required type="phone" id="loginphone" placeholder="+91 1234567890" />
                <button type="button" id="sign-in-button2">Login</button>
               
                <!-- <label for="loginotp">OTP:</label>
                <input required  id="loginotp" placeholder="six-digit otp" />
                <button type="button" id="verify-button" >Verify OTP</button> -->
        </div>
        <div class="tabcontent" id="signup">
            <form action="backend/signup_script.php" method = "POST">
                <?php if($errorMsg !== ""){ 
                ?>
                    <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?= $errorMsg ?>
                    </div>
                <?php } ?>
                <label for="signuphone">Phone:</label>
                <input required name ="phoneNo" type="phone" id="signupphone" placeholder="+91-1234567890" value="+2348030785155" />
                <label for="signupemail">Email:</label>
                <input type="email" name="email" id="signupemail" placeholder="you@domain.com"  value="you@domain.com"/>
                <label for="signupPassword">Name:</label>
                <input required type="text" name="name" id="signupPassword" placeholder="Your name" value="aqimss"/>
                
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </div>
</div>
     <script>
        var tablinks = document.querySelectorAll("div.tablinks");

for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].onclick = function(e) {
        openForm(e.target.getAttribute('data-form-id'), e.target.getAttribute('id'));
    }
}

function openForm(formid, tabid) {
    var tabcontent = document.querySelectorAll("div.tabcontent");
    var links = document.querySelectorAll("div.tablinks");
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(formid).style.display = "block";
    document.getElementById(tabid).classList.add("active");
}

var error_type = `<?php echo $errorKey; ?>`;

document.getElementById("logintab").click();
if (error_type === "signup"){
    document.getElementById("signuptab").click(); 
}
        </script>
<?php
require 'footer.php';
 require 'login_header_script.php';
?>