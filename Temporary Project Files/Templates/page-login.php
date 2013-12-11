<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'head.php'; ?>
<title>Login/Registration</title>
</head>
<body>

<section class="wrapper">
    <?php include 'header.php'; ?>
    <?php include 'navUser.php'; ?>
    <article class="main-content">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#login" class="active">Login</a>
                </li>
                <li>
                    <a href="#register">Register</a>
                </li>
                <li>
                    <a href="#reset">Reset Password</a>
                </li>
            </ul>
            <div id="login" class="form-action show">
                <h1>Login</h1>
              
                <form class="signForm">
                    <ul>
                        <li>
                            <input name="username" type="text" placeholder="Username" />
                        </li>
                        <li>
                            <input name="password" type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" value="Login" class="standardButton" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <h1>Register</h1>
                <p>
                    You should totally sign up for our super awesome service.
                    It's what all the cool kids are doing nowadays.
                </p>
                <form class="signForm">
                    <ul>
                        <li>
                            <input type="text" placeholder="Social Security Number" />
                        </li>
                        <li>
                            <input type="text" placeholder="Mail" />
                        </li>
                        <li>
                            <input type="text" placeholder="First Name" />
                        </li>
                        <li>
                            <input type="text" placeholder="Last Name" />
                        </li>
                        <li>
                            <input type="text" placeholder="Street Address" />
                        </li>
                        <li>
                            <input type="text" placeholder="City" />
                        </li>
                        <li>
                            <input type="text" placeholder="Phone" />
                        </li>
                        <li>
                            <input type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" value="Sign Up" class="standardButton" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->    
        </div>
        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="reg.js"></script>
    </article>
    <?php include 'footer.php'; ?>
</section>
</body>
</html>

