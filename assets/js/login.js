$(document).ready(function(){

window.onload= function(){
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
        'size': 'invisible',
        'callback': function(response) {
          // reCAPTCHA solved, allow signInWithPhoneNumber.
          onSignInSubmit();
        }
      });
    // render();
};

  // Initialize Firebase
  // firebase.initializeApp(firebaseConfig);
  // firebase.analytics();
    
      $(document).on('click', '#sign-in-button',  async function(e){
          e.preventDefault();
        var result =  await existingUser()
        console.log('result:', result)
          var phoneNo = $('#loginphone').val();
          if (phoneNo === ""){
                divMessage("alert-danger","Phone Number Cannot Be Empty !!!");
          }else if(!result){
            divMessage("alert-danger","User not registered. Kindly Sign-up !");
          }else{
            var appVerifier = window.recaptchaVerifier;
            console.log("app;", appVerifier);
          $('#sign-in-button').html('<i class="fas fa-spinner fa-spin fa-2x"></i> Sending OTP')
          $(this).attr("disabled", true);
          firebase.auth().signInWithPhoneNumber(phoneNo, appVerifier)
          .then((confirmationResult)=>{
                console.log('confirmation', confirmationResult)
                if (confirmationResult){
                  divMessage("","");
                    divMessage("alert-success","Check your phone for message sent");
                    console.log(confirmationResult);
                    window.confirmationResult = confirmationResult
                    $('#sign-in-button').html('Request OTP')
                    $('#verify-button').attr("disabled", false);
                }

          }).catch((error)=>{
                console.log('gbolahan')
                divMessage("alert-danger", error.message);
                $('#sign-in-button').html('Request OTP')
                $('#verify-button').attr("disabled", false);
          })
          $(this).attr("disabled", false);
          }
          
      })

      function existingUser(){
        var user  = "user"
        var result = ""
        var phoneNo = $('#loginphone').val();
        return new Promise((resolve, reject)=>{
            $.ajax({
                url: "backend/login_script.php",
                type: "POST",
                data: {
                    user: user,
                    phoneNo : phoneNo,
                },
    
                success : function(data){
                    console.log('data;', data)
                    if (data ==="true"){
                        resolve(true)
                    }else{
                        resolve(false)
                    }
                 },
                 error : function(error){
                     reject (error)
                 }
                //  async:false,
          })

        })

        //   console.log('result:',result);
        //   return result
      }

      $(document).on('click', '#verify-button',  function(e){
        // e.preventDefault();
        var code = $('#loginotp').val();
        if (code === ""){
          divMessage("alert-danger","OTP Code Cannot be Empty")
        }else{
          $('#verify-button').html('<i class="fas fa-spinner fa-spin fa-2x"></i> Verifying OTP')
          $('#verify-button').attr("disabled", false);
          if(!window.confirmationResult){
              divMessage('alert-danger', "Kindly Request for New OTP")
              $('#verify-button').html('Verify OTP')
              $('#verify-button').attr("disabled", true);
          }
          confirmationResult.confirm(code).then((result)=>{
              var user = result.user;
              console.log('user:',user)
              login();
          }).catch((error)=>{
            $('#verify-button').html('Verify OTP')
            console.log(error.message)
            divMessage("alert-danger", error.message);
          })
        }

      })

      function login(){
        action = "login"
        var phoneNo = $('#loginphone').val();
          $.ajax({
                url: "backend/login_script.php",
                type: "POST",
                data: {
                    action: action,
                    phoneNo : phoneNo,
                },
                success : function(data){
                  console.log(data)
                    if (data==="true"){
                      window.location.href ="index.php"
                    }else{
                      divMessage('alert-danger', "Incorrect Login Credentials")
                    }
                 },
                 error: function(error){
                     divMessage('alert-danger', error)
                 },
                 async : false,
          })
      }



      function divMessage(divclass , message){
        $('#msgdiv').addClass(divclass);
        $('#msgdiv').html(message) ;
        $('#msgdiv').show(1000);
      }

})