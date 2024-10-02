<?php 
     include 'components/connect.php';

     if(isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
     }else{
        $user_id = '';
     }

     $pid = $_GET['pid'];

     include 'components/add_wishlist.php';
     include 'components/add_cart.php';
     

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - product detail page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!-- <link rel="stylesheet" href="header.css"> -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
       <?php include 'components/user_header.php';?>
         <div class="banner">
            <div class="detail">
               <h1>product detail</h1>
                <p style="color: #000;">At FoodieHub, we are committed to maintaining the highest standards in everything we do. <br>
                 From the recipes we share to the restaurants we review, our goal is to provide our community with reliable, high-quality content that inspires and educates.</p>
                 <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>product detail</span> 
            </div>
         </div>
        <section class="view-page">
            <div class="heading">
                <h1>product details</h1>
                <img src="images/separator-img.png" alt="">
            </div>
           <?php 
               if(isset($_GET['pid'])) {
                   $pid = $_GET['pid'];
                   $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
                   $select_products->execute([$pid]);

                if($select_products->rowCount() > 0) {
                    while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){


            ?>
            <form action="" method="post" class="box">
                <div class="img-box">
                    <img src="uploded_files/<?= $fetch_products['image']; ?>" >
                </div>
                <div class="detail">
                    <?php if($fetch_products['stock'] > 9) { ?>
                        <span class="stock" style="color: green;">In stock</span>
                    <?php }elseif($fetch_products['stock'] == 0) { ?>
                        <span class="stock" style="color: red;">out of stock</span>
                    <?php }else{ ?>
                        <span class="stock" style="color: red;">hurry up only <?php  $fetch_products['stock']; ?> left</span>
                    <?php } ?>
                    <p class="price">₹<?= $fetch_products['price']; ?>/-</p>
                    <div class="name"><?= $fetch_products['name']; ?></div>
                    <p class="product-detail"><?= $fetch_products['product_detail']; ?> </p>
                    <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">
                    <div class="button">
                        <button type="submit" name="add_to_wishlist" class="btn">add to wishlist <i class="bx bx-heart"></i></button>
                        <input type="hidden" name="qty" value="1" min="0" class="quantity">
                        <button type="submit" name="add_to_cart" class="btn">add to cart <i class="bx bx-cart"></i></button>
                    </div>
                </div>
            </form>
            <?php
                    }
                }
               }
           
           ?>
        </section>
        <div class="products">
            <div class="heading">
                <h1>similar products</h1>
                 <img src="images/separator-img.png" alt="">
            </div>
            <?php include 'components/shop.php'; ?>

        </div>






         <?php  include 'components/footer.php';  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


         <script src="js/user_script.js"></script>

         <?php include 'components/alert.php';?>

        <script src="js/user_script.js"></script>

         <?php include 'components/alert.php';?>
</body>
</html>