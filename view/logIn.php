<!DOCTYPE html>
<html>

<head>
    <title>Recipe Haven | Login</title>
    <link rel="stylesheet" href="../assets/Login.css">
    <link rel="icon" type="image/jpg" href="../assets/images/fav2.png">
</head>

<body>
    <div class="formbox">
        <div class="login">
            <h1 id="log" class="text">Login</h1>
            <br>
            <form method="POST" enctype="multipart/form-data" style="padding-bottom: 10px" id="form" action="../actions/login_user.php">
                <!--Email-->
                <label class="text" for="email">Email</label>
                <br>
                <input style="border-radius: 20px; border: none; width: 300px; height: 30px; margin-top: 12px;" name="email" type="email" id="email" placeholder="  Email" minlength="3" required>
                <br><br>

                <!--Password-->
                <label class="text" for="password">Password</label>
                <br>
                <input style="border-radius: 20px; border: none; width: 300px; height: 30px; margin-top: 12px;" name="psw" type="password" id="password" placeholder="  Password" minlength="8" maxlength="16" required>
                <br><br><br>

                <!--Login Button-->
                <button type="submit" class="log-in" style="background: rgb(102, 181, 133); color: white; border-radius: 20px; border: none; width: 306px; height: 35px; text-align: center;">Log In</button>
                <br><br>

                <div style="text-align: center">
                    <span class="text">or</span>
                    <a href="register.php" class="text" id="sign-back-in">Create an Account</a>
                </div>
                <br><br>
            </form>

            <div class="remember-forgot">
                <label for="subscribe" class="text">
                    <input type="checkbox" id="remember"> Remember me
                </label>
                <a href="#" id="forgotten" class="text">Forgot Password?</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validation
            let isValid = true;

            // Email Validation
            let email = document.getElementById('email').value;
            if (email === '') {
                showErrorMessage('email', 'Please enter your email');
                isValid = false;
            }

            // Password Validation
            let password = document.getElementById('password').value;
            let passwordRegEx = /^(?=.*[A-Z])(?=.*\d{3,})(?=.*[!@#$%^&*()_\-+=\[\]{}|\\:;'",.<>?/`~])[A-Za-z\d!@#$%^&*()_\-+=$begin:math:display$$end:math:display${}|\\:;'",.<>?/`~]{8,}$/;
            if (!passwordRegEx.test(password)) {
                showErrorMessage('password', 'Invalid Password');
                isValid = false;
            }

            // Submit form if valid
            if (isValid) {
                e.target.submit();
            }
        });

        // Error message function
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