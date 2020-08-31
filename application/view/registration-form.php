<?php
include "header.php";

?>

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="assets/images/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="application/controller/action/registration-action.php" method="post" onSubmit="return validate();">
          <span class="login100-form-title">
            Member Registration
          </span>

             <?php 
                    if(isset($_SESSION["errorMessage"])) {
                    ?>
                    <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["errorMessage"]);
                    } 
                ?>

                 <?php 
                    if(isset($_SESSION["sucessMessage"])) {
                    ?>
                    <div class="sucess-message"><?php  echo $_SESSION["sucessMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["sucessMessage"]);
                    } 
                ?>
          <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
            <input name="user_name" id="user_name" type="text"
                            class="input100" placeholder="User ID">
                            <span id="user_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa  fa-id-card-o" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input name="display_name" id="user_name" type="text"
                            class="input100" placeholder="Name" >
                            <span id="name_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input name="password" id="password" type="password"
                            class="input100" placeholder="password">
                            <span id="password_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Email is required">
            <input name="email" id="user_name" type="text"
                            class="input100" placeholder="Email">
                            <span id="email_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <input type="submit" name="login" value="Registration"
                        class="btnLogin">
          </div>


          <div class="text-center p-t-12">
            <span class="txt1">
             Have Account?
            </span>
            <a class="txt2" href="Login">
            Login
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>



<?php

include "footer.php";

?>
<script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("name_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        document.getElementById("email_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        var name = document.getElementById("display_name").value;
        var email = document.getElementById("email").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
            $valid = false;
        }
        if(password == "") 
        {
            document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
        if(name == "") 
        {
            document.getElementById("name_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
        if(email == "") 
        {
            document.getElementById("email_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>
</body>
</html>