<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../link/link.php' ?>
    <?php include '../css/contact.css' ?>
   
</head>
<body>
<div class="container-fluid">
        <h2>Contact Us</h2>
        <form method="POST" action="contact.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="mobile" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
 
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
  <p>All rights reserved @- Designed by AAPDAS-2023</p>
  </div>
</footer>
</body>
</html>


<?php
include '../data/database.php' ;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $mobile = mysqli_real_escape_string($con, $_POST["mobile"]);
  $address = mysqli_real_escape_string($con, $_POST["address"]);
  $message = mysqli_real_escape_string($con, $_POST["message"]);

  $insertquery = "INSERT INTO contact (`name`, `email`, `mobile`, `address`, `message`) VALUES ('$name', '$email', '$mobile', '$address', '$message')";
  
  $iquery = mysqli_query($con, $insertquery);

  if (!$iquery) {
      echo "Error: " . mysqli_error($con);
  }

  if ($iquery) {
      echo '<script>alert("Registration successful."); window.location = "../user/index.php";</script>';
  } else {
      echo '<script>alert("Registration failed: ' . mysqli_error($con) . '"); window.location = "../user/index.php";</script>';
  }


    // You can send this information to your email address or store it in a database.
    // For sending email, you can use PHP's mail() function or a third-party library.

    // Here, we'll just display the received information:
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your email: $email</p>";
    echo "<p>Your email: $mobile</p>";
    echo "<p>Your email: $address</p>";
    echo "<p>Your message:</p>";
    echo "<p>$message</p>";
}
?>
