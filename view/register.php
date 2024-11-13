<!DOCTYPE html>
<html>
  <head>
    <title>Recipe Haven - Sign Up</title>
    <link rel="stylesheet" href="../assets/register.css">
    <link rel="icon" type="image/jpg" href="images/fav2.png" alt="Recipe Haven Icon">
  </head>

  <body>
    <div class="formbox">
      <div class="login">
        <h1 id="sign-up-text" class="text">Sign Up</h1>
        <br>
        <form action="" method="POST" enctype="multipart/form-data" style="padding-bottom: 10px" id="form" action="../actions/register_user.php">
          <!--FirstName-->
          <label class="text" for="firstname" id="firstname">FirstName</label>
          <br>
          <input style="border-radius: 20px; border: none; width: 300px; height: 30px; background-color: #ffffffe0; margin-top: 12px;" type="text" name="fname" id="firstname" placeholder="   John" minlength="3" required>
          <br><br>
          <!--LastName-->
          <label class="text" for="lastname" id="lastname" >LastName</label>
          <br>
          <input style="border-radius: 20px; border: none; width: 300px; height: 30px; background-color: #ffffffe0; margin-top: 12px;" type="text" name="lname"  id="lastname" placeholder="   Doe" minlength="3" required>
          <br><br>
          <!--Email-->
          <label class="text" for="email" id="email">Email</label>
          <br>
          <input style="border-radius: 20px; border: none; width: 300px; height: 30px; background-color: #ffffffe0; margin-top: 12px;" type="email" name="email"  id="email" placeholder="   johndoe@gmail.com">
          <br><br>
          <!--Password-->
          <label class="text" for="password" id="password">Password</label>
          <br>
          <input style="border-radius: 20px; border: none; background-color: #ffffffe0; width: 300px; height: 30px; margin-top: 12px;" type="password" name="psw" id="password" placeholder="   Password" minlength="8" maxlength="16" required>
          <br><br>          
          <!--Confirm Password-->
          <label class="text" for="repassword" id="confirm-password">Confirm Password</label>
          <br>
          <input style="border-radius: 20px; border: none; background-color: #ffffffe0; width: 300px; height: 30px; margin-top: 12px" type="password" name="psw-confirm"  id="repassword" placeholder="   Confirm Password" minlength="8" maxlength="16" required>
          <br><br><br>
          <!--SignUp Button-->          
          <button type="submit" class="text" id="sign-up-button" id="submit" style="background: rgb(102, 181, 133); color: white; border-radius: 20px; border: none; width: 300px; height: 35px; color: white;">Sign Up</button>            
          <br><br>
        </form>
        <div class="remember-forgot">
          <label for="subscribe" class="text">
            <input type="checkbox" id="remember">Remember me
          </label>
          <a href="#" id="forgotten" class="text" >Forgot Password?</a>
        </div>
        

        <br><br>

        <div style="text-align: center;">
          <span class="text" style="display: inline-block;">Or do you have an account?</span>
        <a href="LogIn.html" class="text" style="display: inline-block;"><p id="log-back-in">Log In</p></a>
        </div>
        
      </div>
    </div>

    <script>     

      document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault(); 
        console.log(document.getElementById('firstname').value);

        // Remove existing error messages
        const errors = document.querySelectorAll('.error');
        errors.forEach(error => error.remove());

        let isValid = true;

        // First Name Validation
        let firstName = document.getElementById('firstname').value;
        if (firstName === ''){
          showErrorMessage('firstname','Please enter your first name');
          isValid = false;
        }
        
        // Last Name Validation
        let lastName = document.getElementById('lastname').value;
        if (lastName === ''){          
          showErrorMessage('lastname','Please enter your last name');
          isValid = false;
        }

        // Email Validation
        let email = document.getElementById('email').value;
        let emailRegEx = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,6}$/;
        console.log(emailRegEx.test(email))

        if(!emailRegEx.test(email)){
          showErrorMessage('email', 'Invalid Email');
          isValid = false;
        }

        // Password validation
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('repassword').value;
        // let passwordRegEx = /^(?=.*[A-Z])(?=.*\d{3,})(?=.*[!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~])[A-Za-z\d!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~]{8,}$/;
        let passwordRegEx = /^(?=.*[A-Z])(?=.*\d.*\d.*\d)(?=.*[!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~])[A-Za-z\d!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~]{8,}$/
        // let passwordRegEx = /^(?=.*[A-Z])(?=.*\d{3,})(?=.*[!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>\/?`~])[A-Za-z\d!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>\/?`~]{8,}$/


        if (!passwordRegEx.test(password)) {
          showErrorMessage('password', 'Invalid Password !');
          isValid = false;
        }
        if (password !== confirmPassword) {          
          showErrorMessage('repassword', 'Passwords do not match');
          isValid = false;
        }

        if (!isValid) {
          document.querySelectorAll('.error').forEach(error => error.remove());
          alert('Registration successful!');
        }


      });
      // Error message
      function showErrorMessage(fieldId, message) {
        let field = document.getElementById(fieldId);
        let error = document.createElement('div');
        error.classList.add('error');
        error.style.color = 'red';
        error.innerText = message;
        field.parentNode.insertBefore(error, field.nextSibling);
      }
      
    </script>

  </body>
</html>
