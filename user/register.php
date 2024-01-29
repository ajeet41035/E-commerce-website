





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>sign up form</title>
    <?php include '../css/style.css' ?>
    <?php include '../link/link.php' ?>
    <?php include '../data/database.php' ?>
  
     
  </head>
  <style>
    
<style>

body{
    margin: 0;
    padding: 0;
    font-family: 'muli',sans-serif;
    box-sizing: border-box;    
 
}
.sign-form{
    background: lightgrey;
    justify-content: center;
    text-align: center;
    width: 300px;
    padding: 20px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
    margin: 8% auto;
    border-radius: 15px;

}
.sign-form h1{
    color: black;
    margin-bottom: 25px;
}

button{
    color: #fff;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-size: 15px;
    margin: 10px 0;
    border: none;
    outline: none;
    cursor: pointer;
}
.btn-primary{
    background-color: #1c8adb;
}

img{
    width: 30%;
}
</style>

  </style>
  <body>

    <div class="container">
        <article class="card_body mx-auto" style ="max-width:400px">
    <div class="sign-form">
    <img src="../images/logobeer.jpg" alt="">
        <!-- <img src="image.avif"> -->
        <h1>Sign Up Now</h1>
        <form method="POST" action="register.php ">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-xs"></i></span>

                </div>
        <input type="text" name="username" class="form-control input-box" placeholder="Full Name" required>
</div>

<div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-envelope fa-xs"></i></span>
    </div>
    <input type="text" name="email" class="form-control input-box" placeholder="Enter Email" required>
</div>



            <div class="form-group input-group">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone fa-xs"></i></span>

                </div>
            <input type="number" name="mobile" class=" form-control input-box" placeholder="Phone number" required>
        </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock fa-xs"></i></span>

                </div>
                <input type="password" name="password" class=" form-control input-box" placeholder="Enter password" required>
            </div>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock fa-xs"></i></span>

                </div>
                <input type="password" name="cpassword" class=" form-control input-box" placeholder="Confirm password" required>
            </div>
            
            <!-- <p><input type="checkbox"></span>I agree to the term of services -->
           <div class="form-group">
           <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>

           </div>
               
                <p>Do you have an account ? <a href="../user/login.php">login </a></p>
                
    </form>
</div>
</article>
</div>



</body>
</html>

<?php
include ('../data/database.php');
include('../function/function.php');
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $mobile=mysqli_real_escape_string($con, $_POST['mobile']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
    // $user_ip=getIPAddress();

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword, PASSWORD_BCRYPT);
    $eamilquery = "select * from wastepro  where username ='$username' or email='$email'";
    $query = mysqli_query($con, $eamilquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo "email already exists";
    }else{
        if($password === $cpassword){
            $insertquery= "insert into wastepro (`username`, `email`, `mobile`, `password`, `cpassword`) values ('$username', '$email', '$mobile',  '$pass', '$cpass')";
            $iquery = mysqli_query($con, $insertquery);
            if (!$iquery) {
                echo "Error: " . mysqli_error($con);
            }
            if($iquery){
                echo '<script>alert("Registration successful. Please login."); window.location = "../user/login.php";</script>';
            }else{
                echo '<script>alert("Registration failed: ' . mysqli_error($con) . '"); window.location = "../user/register.php";</script>';
            }

        }else{
            echo '<script>alert("Passwords do not match"); window.location = "../user/register.php";</script>';
            
        }
    }

}

?>