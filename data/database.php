<?php
$server="localhost";
$user="root";
$password = "basopatti1234@";
$db= "waste";
$con=mysqli_connect($server, $user, $password, $db );
if($con){
    ?>
    <script>
    // alert( "connection successfull");
    </script>
    <?php
    // echo "connected";
   
}
else{
    ?>
    <script>
    alert( "Not successfull");
    </script>
    <?php
}
?>