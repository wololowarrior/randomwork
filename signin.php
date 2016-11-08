<link href="css/signincss.css" rel="stylesheet"/>
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<div id="main">
    <div>
        <form method="post">
            <h1>Login</h1>
            <input placeholder="Mobile" type="text" name="email" required="" autocomplete="off">
            <input placeholder="Password" type="password" name="password" required="">
            <button type="submit">Login</button>
        </form>
    </div>
    <a href="index.php"> <div style="display: inline-block; margin-left: 43.5%;text-align: center;  background-color: #23b2a6; color: #fff; width: 200px; height: 25px; line-height: 24px" id="signup">Not Signed Up Yet?</div></a>


</div>
<?php
include './include/connect.php';
session_start();
//if(isset($_SESSION['email'])){
//    header('location:home.php');
//}
if(isset($_POST['email'])&& $_POST['password']){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($result=mysqli_query($link, "select * from registration where email='$email'")){
        $r=  mysqli_fetch_array($result);
        if ($password==$r['password']){
            $_SESSION['name']=$r['name'];
            $_SESSION['email']=$r['email'];
            header('location:home.php');
        }
        else{
            echo '<p>Wrong Password</p>';
        }
    }
}
?>
