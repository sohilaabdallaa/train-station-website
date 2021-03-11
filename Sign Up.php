<?php include('ServerSignup.php') ?>
<!DOCTYPE html lang="en">
<html>
<head>
    <title> Sign Up </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="images/train.png"/>
    <link rel="stylesheet" type="text/css" href="Sign Up.css">
</head>
<body>
<div class="container" id="cardy">
    <div class="d-flex justify-content-center h-100" >
        <div class="card" id="in" >
            <div class="card-header">
                <h3>Sign Up</h3>
                <div class="d-flex justify-content-left social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="Sign Up.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="Name" required>
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                        </div>
                        <input type="email" class="form-control"name="Email1" placeholder="Email" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                        </div>
                        <input type="email" class="form-control"name="Email2" placeholder="Re Enter Email" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password_1" placeholder="password" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="passComfi" placeholder="Confirm Password" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input type="password" class="form-control" name="phonenumber" placeholder="Phone Number" required>
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn float-right login_btn">
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Do you have an account?<a href="Log In.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
