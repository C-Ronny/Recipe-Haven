<!DOCTYPE html>
<html>
  <head>
    <title>Recipe Haven - Login</title>
    <link rel="stylesheet" href="../assets/Login.css">
    <link rel="icon" type="image/jpg" href="images/fav2.png" alt="Recipe Haven Icon">
  </head>

  <body>
    <div class="formbox">
      <div class="login">
        <h1 id="log" class="text">Login</h1>
        <br>
        <form  method="POST" enctype="multipart/form-data" style="padding-bottom: 10px" id="form" action="../actions/login_user.php">
          <!--Email-->
          <label class="email" for="email" id="email">Email</label>
          <br>
          <input style="border-radius: 20px; border: none; width: 300px; height: 30px; margin-top: 12px;" name="email" type="email" id="email" placeholder="  Email" minlength="3" required>
          <br><br>
          <!--Password-->
          <label for="password" class="text" id="password" >PASSWORD</label>
          <br>
          <input style="border-radius: 20px; border: none; width: 300px; height: 30px; margin-top: 12px;" name="psw" type="password" id="password" placeholder="  Password" minlength="8" maxlength="16" required>
          <br><br>
          <br>
          <!--Login Button-->
          <button for="submit" class="log-in" style="background: rgb(102, 181, 133); color: white; border-radius: 20px; border: none; width: 306px; height: 35px; text-align: center;">Log In</button>


          <br> <br>
          <div style="text-align: center">
            <span class="text" >or</span>
          <a href="register.html" class="text" id="sign-back-in">Create an Account</a>
          </div>
          
          <br><br>
        </form>
        <div class="remember-forgot">
            <label for="subscribe" class="text">
              <input type="checkbox" id="remember">Remember me
            </label>
            <a href="#" id="forgotten" class="text">Forgot Password?</a>
          </div>
      </div>
    </div>

    <script>
      // Form submission event listener
      document.querySelector('form').addEventListener('submit', function(e) {
        // Username Validation
        let firstName = document.getElementById('username').value;
        if (firstName === ''){
          showErrorMessage('firstname','Please enter your first name');
          isValid = false;
        }        
        // Password validation
        let password = document.getElementById('password').value;        
        let passwordRegEx = /^(?=.*[A-Z])(?=.*\d{3,})(?=.*[!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~])[A-Za-z\d!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~]{8,}$/;
        if (!passwordRegEx.test(password)) {
          showErrorMessage('password', 'Invalid Password !');
          isValid = false;
        }
                    
      });

      
      // Error message
      function showErrorMessage(fieldID, message) {
        let field = document.getElementById(fieldID);
        let existingError = field.nextElementSibling;
        if (existingError && existingError.classList.contains('error')) {
          existingError.innerText = message;
        } else {
          let errorMessage = document.createElement('div');
          errorMessage.classList.add('error');
          errorMessage.style.color = 'red';
          errorMessage.innerText = message;
          field.parentNode.insertBefore(errorMessage, field.nextSibling);
        }
      }
    </script>

  
  </body>
</html>
