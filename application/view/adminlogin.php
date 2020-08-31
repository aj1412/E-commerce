
<?php

  include "header.php";
  

?>


<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="assets/images/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="application/controller/action/adminloginaction" method="post" onSubmit="return validate();">
          <span class="login100-form-title">
            Admin Login
          </span>

              <?php 
                    if(isset($_SESSION["adminerrorMessage"])) {
                    ?>
                    <div class="error-message"><?php  echo $_SESSION["adminerrorMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["adminerrorMessage"]);
                    } 
                ?>

                 <?php 
                    if(isset($_SESSION["sucessMessage"])) {
                    ?>
                    <div class="sucess-message"><?php  echo $_SESSION["adminsucessMessage"]; ?></div>
                    <?php 
                    unset($_SESSION["adminsucessMessage"]);
                    } 
                ?>

          <div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
            <input name="admin" id="admin" type="text"
                            class="input100" placeholder="Email"><span id="user_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input name="password" id="password" type="password"
                            class="input100" placeholder="Password"><span id="password_info" class="error-info"></span>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <input type="submit" name="login" value="Login" 
                        class="btnLogin">
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
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("admin").value;
        var password = document.getElementById("password").value;
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
    }
    </script>
</body>
</html>


