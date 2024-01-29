<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
    <?php include '../link/link.php' ?>
   <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navabr-light bg-dark">
          <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
         
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome guest</a>
                    </li>
                </ul>
            </nav>
            </div>
</nav>
<!-- second child -->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
<!-- third child -->
<div class="row">
    <div class="col-md-12 bg-secondary p-1">
        <div class="p-3">
        <p class="text-light text-center">Admin Name</p>
    </div>
    <div class="button text-center">
        <button class="my-3"><a href="" class="nav-link text-light bg-dark my-1">Insert Products</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">View Products</a></button>
        <button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert categories</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">View categories</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">All Orders</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">All Payments</a></button>
        <button><a href="" class="nav-link text-light bg-dark my-1">List Users</a></button>
        <button><a href="" class="nav-link text-light bg-dark  my-1">Logout</a></button>
    </div>
    </div>
</div>
<div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    ?>
</div>
</div>
</body>
</html>
<!-- Just an image -->
