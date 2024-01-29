
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include '../data/database.php' ?>
    <?php include '../link/link.php' ?>

</head>
<style>
    body {
      padding: 0;
      margin: 0;
    font-family: Arial, sans-serif;
    background-color: #495057;
  }
 
  .login-form{
    background: lightgrey;
    justify-content: center;
    text-align: center;
    width: 300px;
    padding: 20px;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
    margin: 12% auto;
    border-radius: 15px;

}
  
  .container{
    margin: 0px 20px;
  }
 
 

img{
  width: 30%;
  border-radius: 20px;
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
    /* margin-top: 20px; */
  }
  .login-btn{
    background-color: #1c8adb;
  }
.form{
  margin: 10px 0;
}
    
</style>
<body>
<div class="container-fluid">
<article class="card_body mx-auto" >

<div class="login-form">
<img src="../images/logobeer.jpg" alt="">
        <form action="" method="POST" class="form">
          

          
          <div class="form-group input-group">
            <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user fa-xs"></i></span>

                </div>
                <!-- <label for="username">Username:</label> -->
        <input type="text" name="username" class="form-control input-box" placeholder="Username" required>
</div>
        
          <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock fa-xs"></i></span>

                </div>
                <!-- <label for="password">Password:</label> -->
                <input type="password" name="password" class=" form-control input-box" placeholder="Enter password" required>
            </div>
          <p>forget password ?</p>
          <button type="submit" name="login" class="login-btn">Login</button>
          <p>Don't have an account ? <a href="register.php">Register </a></p>
        </form>
        
      </div>
</article>
      </div>
</body>
</html>
<?php
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $select_query="select * from wastepro where username='$username'";
  $result=mysqli_query($con, $select_query);
  $row_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);
  // $user_ip=getIPAddress();

  // cart item
  $_SESSION['username'] = $row_data['username'];

  if($row_count > 0){
    if(password_verify($password,$row_data['password'])){
      if($row_count==1){   
        // echo "<script>alert('login successful')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
      }
    }else{
      echo "<script>alert('Invalid Credentials')</script>";
    }
  }
  else{
    echo "<script>alert('Invalid Credentials')</script>";
  }
  
}

?>