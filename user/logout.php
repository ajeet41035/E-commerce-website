
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <?php include '../link/link.php' ?>
    <?php include '../css/style.css' ?>
    
   
    
    
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../images/logobeer.jpg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addcart.php"><i class="fa-solid fa-cart-shopping fa-xl "></i><sup>1</sup></a>
      </li>
     
      
    </ul>
    <form class="d-flex my-2 my-lg-0">
    <input class="form-control me-2" type="search" name="search_data" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_product">
    </form>
  </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 <ul class="navbar-nav"><li class="nav-item">
        <a class="nav-link" href="#">Waste To Best</a>
      </li></ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item">
        <a class="nav-link" href="#"> <?php  if (isset($_SESSION['username'])) {
  // The "username" key exists in the $_SESSION array
  $username = $_SESSION['username'];
  echo "Welcome, $username"; // Display the username
} else {
  // The "username" key does not exist in the $_SESSION array
  echo "Welcome Guest"; // Display a default message
}
 ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">logout</a>
      </li>
        
        </ul>
        
        
</nav>
<!-- third child -->

<div class="bg light">
   <h3 class="text-center">
    Hidden Store
   </h3> 
   <p class="text-center">Communication is at the heart of e-commerce and community.</p>

</div>
<!-- fifth child -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../images/1.png" class=" w-100" alt="Image 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../images/2.png" class=" w-100" alt="Image 2">
            </div>
            <div class="carousel-item" >
                <img src="../images/3.png" class=" w-100" alt="Image 3">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





<!-- fourth child -->
<div class="row md-5">
     <!-- sidenavbar -->
 <div class="col-md-2 bg-secondary p-0">
       <!-- brands to be displayed -->
        <!-- <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-dark">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Brand1</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Brand2</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Brand3</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Brand4</a>
            </li>
           
        </ul> -->
        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-dark">
                <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Glass Bottle</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Crafts</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Raw Material</a>
            </li>
            
           
        </ul>
            
        </div>

    
        <div class="col-md-10">
        <!-- products -->
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="../images/Bottle Hacks.jpg" class="card-img-top" alt="bottle-hacks">
  <div class="card-body">
    <h5 class="card-title">Bottle Hacks</h5>
    <p class="card-text"> It typically refer to creative and unconventional uses or tricks involving bottles.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
            <div class="card" >
  <img src="../images/img2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bottle Flower</h5>
    <p class="card-text">
      It Look like ceramic flower vase, Beautiful Plastic bottle Flower vase making at home, Plastic bottle flower vase,Pottery making .</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
            <div class="card" >
  <img src="../images/img6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Glass Lamp</h5>
    <p class="card-text">Lamp made by recyled whisky bottle .</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
            <div class="card" >
  <img src="../images/imgs5.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wine Bottle</h5>
    <p class="card-text">It tells a unique family story through artistry, making them perfect for adding a personalized touch to your living space or gifting to loved ones.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="https://i.etsystatic.com/14178744/r/il/3dea7e/1190708785/il_fullxfull.1190708785_4mb9.jpg" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>

            <div class="col-md-4">
            <div class="card" >
  <img src="../images/img1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Soda Bottle</h5>
    <p class="card-text"> It is  dazzling patterns, transforming everyday items into an enchanting piece of kinetic art."</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>

            <div class="col-md-4">
            <div class="card" >
  <img src="../images/imgs2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gemstone Elegance Duo</h5>
    <p class="card-text">It bring a sparkling allure to your interior design. Perfect for enhancing your home's ambiance or as a thoughtful gift for someone special.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
     



        </div>
        
    </div>
    



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
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
  <p>All rights reserved @- Designed by AAPDAS-2023</p>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>



