<?php
 include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/acb2e144e1.js" crossorigin="anonymous">

    </script>
    <title>Sign In Sign Up Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" required id="show">
                    </div>
                    
                    <input type="submit" value="Login" class="btn solid">

                    <a   class="social-text">
                    </a>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form action="" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" required>
                    </div>



                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                    </div>
                    <button type="submit" class="btn solid pure-button pure-button-primary"
                        value="Sign up">submit</button>


                    <p class="social-text">
                    </p>

                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Welcome to our health care site register and get new updates</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="logo1.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>one of us</h3>
                    <p>Welcome to our health care site register and get new updates</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="logo2.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>