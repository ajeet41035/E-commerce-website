<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include '../link/link.php' ?>
    <?php include '../css/style.css' ?>
</head>
<style>
    /* .logo{
        width:40%;
        height: 5.5%;
        border-radius: 5px solid;
        margin-left: 400px;

    } */
    .container {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
     /* Optional: Set a specific height for centering vertically */
}

.logo {
   /* Make the image responsive */
    height: 5.5%;
    width: 40%; /* Maintain aspect ratio */
    border-radius: 25px;
}

    .mark{
        font-size:80px;
        margin-top: 20px;

    }
    .para{
        text-align: center;
        justify-content: center;
        font-size: 15px;

    }
    .myteamsection{
        background-color: #495057;
    }
.aapdas{
    color: #fff;
}
.card-img-top{
    width: 100%;
    height: 200px;
    /* object-fit: contain; */
    border-radius: 300px;
    background-size: cover;
}
/* Apply this CSS to your images */
img {
    max-width: 100%; /* Ensure the image scales with the container */
    height: auto; /* Maintain the aspect ratio */
    display: block; /* Remove any extra spacing below inline images */
    margin: 0 auto; /* Center the images horizontally within their containers */
}
.para2{
    max-width: 100%; /* Ensure the image scales with the container */
    height: auto; /* Maintain the aspect ratio */
    display: block; /* Remove any extra spacing below inline images */
    margin: 0 auto; /* Center the images horizontally within their containers */
    width: 700px; height: 450px;
}


.subheading{
    color: #fff;
}
</style>
<body>
    <div class="container">
    <img src="../images/logobeer.jpg" alt="" class="logo">
    </div>
    <div class="mark">
    <marquee width="100%" direction="COLUMN" height="100px">
    WASTE TO BEST
</marquee>
    </div>
    <div class="container-fluid">
        <h3 class="about text-center">About Us</h3>
        <p class="para">Welcome to Beeerscraft, your one-stop solution for piling beer bottles! We are a startup that collects beer bottles from users and ships them to a glass production unit for recycling.
</p>
<p class="para"><strong>What kind of waste is glass bottles?</strong></br>
Glass is found in municipal solid waste (MSW), primarily in the form of containers such as beer and soft drink bottles; wine and liquor bottles; and bottles and jars for food, cosmetics and other products.</p>
<p class="para"><strong>The Problem</strong></br>
    Glass bottles are a major environmental problem. They take millions of years to decompose, and they often end up in landfills or incinerators, where they release harmful toxins into the environment. Additionally, glass production is a very energy-intensive process, which contributes to climate change.
</br>
<strong>Approximately 65% glass waste unable to  recycled each year in India.</strong>
</p>
<img  src="../images/data1.jpg" alt="">
<img src="../images/data2.jpg" alt="">
<p><strong>Here are some reference article</strong> </p>
<a href="https://india.mongabay.com/2021/02/alcohol-bottle-waste-a-transparent-problem-in-goas-beaches/" class="para1">Alcohol bottle waste: The transparant problem in Goas beaches </a>
</br>
<p class="para"><strong>Our Solution</strong></br>
    Beeerscraft is working to solve the problem of glass bottle pollution by providing a convenient and affordable way for people to recycle their beer bottles. We offer a variety of services to make recycling easy, including:
</p>    
<div class="orderd">
<ul style="list-style-type:disc; margin-left: 15px;">
  
    
  <li> This is a user-friendly website dedicated to fostering innovation and collaboration in waste recycling.</li>
  <li>The platform allows individuals to share their inventive projects made from recycled materials, inspiring others to explore sustainable solutions</li>
  <li>  Users can upload photos and descriptions of their creations, creating a vibrant community that encourages the reuse of waste materials. </li>
  <li>  This serves as a hub for eco-conscious individuals to exchange ideas, learn, and contribute to a greener planet.</li>
  
   </ul>
</div>
<p><strong>Free pickup: </strong>We offer free pickup of beer bottles from your doorstep.
</p>
<p><strong>Rewards and certificates:</strong>We offer rewards and certificates to users who participate in our recycling program.

</p>

<img src="../images/certificate.jpg" alt="" class="para2">
    </br>
<p><strong>Educational resources:</strong>We provide educational resources to help people learn about the importance of recycling and how to recycle their beer bottles properly.

</p>
<div>
    <ul style="margin-left: 15px;">
        <li><a href="https://www.conserve-energy-future.com/are-beer-bottles-recyclable.php" class="para1">The ways to dispose</a></li>
  <li><a href="https://quinterecycling.org/5-recycle-glass-beer-wine-spirit-bottles/" class="para1">Five ways to recycle Glass beer bottle</a></li>
    </ul>
</div>
<p class="para"><strong>Swachh Bharat Abhiyaan</strong></br>
Beeerscraft is committed to promoting Swachh Bharat Abhiyaan, the Indian government's initiative to clean up India. We believe that beer bottles often end up piling at some road-side area. So recycling beer bottles is an important part of this initiative, as it helps to reduce pollution and conserve resources.</p>
<p class="para"><strong>How to Join Us</strong></br>
To join us in our mission to promote sustainability and Swachh Bharat Abhiyaan, simply sign up for our recycling program on our website. We will then schedule a free pickup of your beer bottles.</p>
<p><strong>Thank you for your support!
    </br>
Together, we can make a difference.
</strong></p>
  </div>


  <section class="myteamsection" id="myteam">
  
    <h1 class="aapdas  text-center">
        AAPDAS TEAM MEMBER
    </h1>
    <p class="subheading text-center ">
        "We are a curated team of international experts by a single goal;
        Our team members are expert in waste management"
    </p>
   
           
            <div class="col">
        <!-- products -->
        <div class="row">
            <div class="col mb-2">
            <div class="card" >
  <img src="../images/ajeet.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Ajeet Kumar</h5>
    <p class="card-text ">Senior Developer</p>
   
  </div>
</div>
            </div>
            <div class="col">
            <div class="card" >
  <img src="../images/sristy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Sristy Kumari</h5>
    <p class="card-text ">Junior Developer</p>
    
  </div>
</div>
            </div>
            <div class="col">
            <div class="card" >
  <img src="../images/ayush.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Ayush</h5>
    <p class="card-text text-center">Co-Founder</p>
  
  </div>
</div>
            </div>
            <div class="col">
            <div class="card" >
  <img src="../images/pank.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Pankaj Kumar</h5>
    <p class="card-text text-center">Co-Founder</p>
    
  </div>
</div>
            </div>
            <div class="col">
            <div class="card" >
  <img src="../images/divyanshu.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Divyanshu Raj</h5>
    <p class="card-text text-center">Project Manager</p>
   
  </div>
</div>
            </div>

            <div class="col">
            <div class="card" >
  <img src="../images/arya.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Arya kr. Sharma </h5>
    <p class="card-text text-center">Business Analyst</p>
    
  </div>
</div>
            </div>

            <div class="col">
            <div class="card" >
  <img src="../images/soumo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Soumya Singh</h5>
    <p class="card-text text-center">Product Manager</p>
    
  </div>
</div>
            </div>
     



        </div>
        
    </div>
    





         
  </section>

  
    <!-- footer -->

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

