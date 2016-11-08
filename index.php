<html>
    <head>
        <link href="css/index.css" rel="stylesheet"/>
        <title>SignUp</title>
    </head>
    <body>
<!--        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '1604430406533042',
                    xfbml: true,
                    version: 'v2.8'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>-->
        <div id="login-box">
            <div class="left">

                <h1>Sign up</h1>
                <form method="post">
                    <input type="text" name="username" placeholder="User's Name" />
                    <input type="text" name="email" placeholder="Mobile Number" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="password" name="password2" placeholder="Retype password" />

                    <input type="submit" name="signup_submit" value="Sign me up" />
                </form>

            </div>

            <div class="right">
                <span class="loginwith">Sign in with<br />social network</span>

                <button class="social-signin facebook">Log in with facebook</button>

                <button class="social-signin google">Log in with Google</button>
            </div>
            <div class="or">OR</div>
        </div>
        <a href="signin.php"><div style="margin: 0 auto; display: inline-block ">
                Already A member? Sign In then!
            </div>
        </a>
        <?php
        include 'include/connect.php';
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (mysqli_query($link, "insert into registration value('$name','$email','$password')")) {
                header('location:signin.php');
            }
        }
        ?>
        <div
            class="fb-like"
            data-share="true"
            data-width="450"
            data-show-faces="true">
        </div>
    </body>
</html>