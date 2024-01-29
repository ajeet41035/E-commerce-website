<!-- <?php
function getproducts(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $select_query = "select * from `products` order by rand() LIMIT 0,9";
            $result_query=mysqli_query($con, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image=$row['product_image1'];
            } 
        }
    }
}
?> -->






