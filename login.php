<?php
    require 'header_top.php';
?>
 
 <style>
.minh{
    min-height: 80vh;
    margin-top: 100px;
}  
div.mycontainer {
    margin: auto;
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
    border-bottom: 2px solid #3d2f95;
    margin: 0.5em auto 0.5em auto;
}

div.mycontainer button {
    outline: none;
    margin: 2em auto 1em auto;
    padding: 1.2em;
    cursor: pointer;
    letter-spacing: 0.2em;
    box-shadow: 0 0 2px 2px #888;
    background-color: #3d2f95;
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
    border: 0.4px solid #3d2f95;
    transition: all 0.2s linear;
}

.mycontainer .active {
    animation-name: activetab;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    background-color: #3d2f95;
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
 <div class='minh'>
    <div class="mycontainer">
        
        <div class="tab">
            <div class="tablinks" id="logintab" data-form-id="login">Login</div>
            <div class="tablinks" id="signuptab" data-form-id="signup">Sign up</div>
        </div>
        <div class="tabcontent" id="login">
            <form action="index.php">
                <label for="loginphone">Phone Number:</label>
                <input required type="phone" id="loginphone" placeholder="+91 1234567890" />
              
                <label for="loginotp">OTP:</label>
                <input required  id="loginotp" placeholder="six-digit otp" />
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="tabcontent" id="signup">
            <form>
                <label for="signuphone">Phone:</label>
                <input required type="phone" id="signupphone" placeholder="+91-1234567890" />
                <label for="signupemail">Email:</label>
                <input type="email" id="signupemail" placeholder="you@domain.com" />
                <label for="signupPassword">Password:</label>
                <input required type="password" id="signupPassword" placeholder="**********" />
                
                <button type="submit">Sign up</button>
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
document.getElementById("logintab").click();
        </script>
<?php
require 'footer.php';
?>