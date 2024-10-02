<?php 
     include 'components/connect.php';

     if(isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
     }else{
        $user_id = '';
     }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - home page</title>
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
         
      <div class="slider-container">
         <div class="slider">
            <div class="slideBox active">
               <div class="textBox">
               </div>
               <div class="imgBox">
                  <img src="images/aa3.png" alt="">
               </div>
            </div>
            <div class="slideBox">
               <div class="textBox">
                  <h1 style="color: #964B00;">"Awaken your senses <br>with every sip,delivered right <br>to your doorstep!"</h1>
                  <a href="menu.php" class="btn">shop now</a>
               </div>
               <div class="imgBox">
                  <img src="images/aaaa.png" alt="">
               </div>
            </div>
            <div class="slideBox">
            <div class="textBox">
                  <h1 style="color: #964B00;">"We pride ourselves <br>on  delivering fresh flavors, <br>straight to your doorstep!"</h1>
                  <a href="menu.php" class="btn">shop now</a>
               </div>
               <div class="imgBox">
                  <img src="images/asliders.png" alt="" height="500">
               </div>
            </div>
         </div>
         <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
         </ul>
      </div>
      <!-----slider section end -->
      <div class="service">
         <div class="box-container">
            <!-----service item box -->
            <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/services.png" alt="" class="img1">
                     <img src="images/services (1).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4>delivery</h4>
                  <span>100% secure</span>
               </div>
            </div>
            <!-----service item box -->
            <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/services (2).png" alt="" class="img1">
                     <img src="images/services (3).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4>payment</h4>
                  <span>100% secure</span>
               </div>
            </div>
            <!-----service item box -->
            <!-- <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/services (5).png" alt="" class="img1">
                     <img src="images/services (6).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4>support</h4>
                  <span>24*7 hours</span>
               </div>
            </div> -->
            <!-----service item box -->
            <!-- <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/services (7).png" alt="" class="img1">
                     <img src="images/services (8).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4>gift service</h4>
                  <span>support gift service</span>
               </div>
            </div> -->
            <!-----service item box -->
            <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/service.png" alt="" class="img1">
                     <img src="images/services (8).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4>returns</h4>
                  <span>24*7 free return</span>
               </div>
            </div>
            <!-----service item box -->
            <!-- <div class="box">
               <div class="icon">
                  <div class="icon-box">
                     <img src="images/services.png" alt="" class="img1">
                     <img src="images/services (1).png" alt="" class="img2">
                  </div>
               </div>
               <div class="detail">
                  <h4></h4>
                  <span>100% secure</span>
               </div>
            </div> -->
            <!-----service item box -->
         </div>
      </div>
      <!-----service section end -->
      <div class="categories">
         <div class="heading">
            <h1>categories feature</h1>
            <img src="images/separator-img.png" >
         </div>
         <div class="box-container">
            <div class="box">
               <img src="images/veg food.jpg" alt="">
               <a href="menu.php" class="btn">food</a>
            </div>
            <div class="box">
               <img src="images/drinks.png" >
               <a href="menu.php" class="btn">drinks</a>
            </div>
            <div class="box">
               <img src="images/ice creams23.jpg">
               <a href="menu.php" class="btn">ice cream</a>
            </div>
            <div class="box">
               <img src="images/snacks.jpg">
               <a href="menu.php" class="btn">snacks</a>
            </div>
         </div>
      </div>
       <!-----categories section end -------->
       <img src="images/menu-banner.jpg" class="menu-banner">
       <div class="taste">
       <div class="heading">
         <span>Taste</span>
       <h1>Tasty treats, Great Discounts! Only For You</h1>
       <img src="images/separator-img.png" >
       </div>
       <div class="box-container">
         <div class="box">
            <img src="images/cali dosa.jpg" alt="">
            <div class="detail">
               <h2>Nutrient-rich food</h2>
               <h1>Dosa</h1>
            </div>
         </div>
         <div class="box">
            <img src="images/idly.webp" alt="">
            <div class="detail">
               <h2>Nutrient-rich food</h2>
               <h1>Idli Vada</h1>
            </div>
         </div>
         <div class="box">
            <img src="images/poori.webp" alt="">
            <div class="detail">
               <h2>Nutrient-rich food</h2>
               <h1>poori</h1>
            </div>
         </div>
       </div>
      </div>
       <!-----taste section end --------->
       <div class="ice-container">
         <div class="overlay"></div>
         <div class="detail">
            <h1>From Our Kitchen to Your Heart <br>Taste the Love in Every Bite!</h1>
            <p>FoodieHub is your go-to app for discovering and sharing amazing dining experiences. <br>
             It connects food lovers with the best eateries, offering a user-friendly interface and  <br>
              curated content to enhance your culinary journey. Explore, share, and enjoy with FoodieHub!</p>
             <a href="menu.php" class="btn">shope now</a>
         </div>
       </div>
       <!-----container section end --------->
       <div class="taste2">
         <div class="t-banner">
            <div class="overlay"></div>
            <div class="detail">
            <h1>find your taste of desserts</h1>
            <p>Fall in Love With Every Bite! A Sweet Love Affair!</p>
            <a href="menu.php" class="btn">shope now</a>
            </div> 
         </div>
         <div class="box-container">
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/rfood1.avif" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>nodels</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/efood2.jpg" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>jeera rice</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/ef3.jpg" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>palav</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/rf4.jpg" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>rolls</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/ef5.jpg" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>butter rolls</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
            <div class="box">
               <div class="box-overlay"></div>
               <img src="images/rf6.jpg" alt="">
               <div class="box-details fadeIn-bottom">
                  <h1>momos</h1>
                  <p>find your taste of desserts</p>
                  <a href="menu.php" class="btn">explore more</a>
               </div>
            </div>
         </div>
       </div>
       <!-----taste2 section end --------->
       <div class="flavor">
         <div class="box-container">
            <img src="images/drink.png" alt="">
            <div class="detail">
               <h1>Hot Deal ! Sale Up To <span>30% off </span></h1>
               <p>expire soon!</p>
               <a href="menu.php" class="btn">shop now</a>
            </div>
         </div>
       </div>
       <!-----flavour section end --------->
       <div class="usage">
         <div class="heading">
            <h1>how it works</h1>
            <img src="images/separator-img.png" >
         </div>
         <div class="row">
            <div class="box-container">
               <div class="box">
                  <img src="images/icon.avif" alt="">
                  <div class="detail">
                     <h3>ice cream</h3>
                     <p>FoodieHub spotlights the best ice cream spots, featuring unique flavors and artisan creations. <br>
                      Discover hidden gems and classic favorites in your city. Enjoy the ultimate ice cream experience with FoodieHub.</p>
                  </div>
               </div>
               <div class="box">
                  <img src="images/ricon1.jpg" alt="" width="100">
                  <div class="detail">
                     <h3>drinks</h3>
                     <p>FoodieHub serves up the best spots for drinks, featuring unique flavors and artisan creations. <br>
                         Explore hidden gems and classic favorites in your city. Enjoy a sweet treat with FoodieHub's curated recommendations.</p>
                  </div>
               </div>
               <div class="box">
                  <img src="images/ricon2.jpg" alt="" width="90">
                  <div class="detail">
                     <h3>meals</h3>
                     <p>FoodieHub serves up the best spots for meals, featuring unique flavors and artisan creations. <br>
                         Explore hidden gems and classic favorites in your city. Enjoy a sweet treat with FoodieHub's curated recommendations.</p>
                  </div>
               </div>
            </div>
            <img src="" alt="" class="divider">
            <div class="box-container">
               <div class="box">
                  <img src="images/ricon3.png" alt="">
                  <div class="detail">
                     <h3>snacks</h3>
                     <p>FoodieHub serves up the best spots for snacks, featuring unique flavors and artisan creations. <br>
                         Explore hidden gems and classic favorites in your city. Enjoy a sweet treat with FoodieHub's curated recommendations.</p>
                  </div>
               </div>
               <div class="box">
                  <img src="images/ricon4.png" alt="" width="100">
                  <div class="detail">
                     <h3>offers</h3>
                     <p>FoodieHub serves up the best spots for offers, featuring unique flavors and artisan creations. <br>
                         Explore hidden gems and classic favorites in your city. Enjoy a sweet treat with FoodieHub's curated recommendations.</p>
                  </div>
               </div>
               <div class="box">
                  <img src="images/ricon5.webp" alt="" width="90">
                  <div class="detail">
                     <h3>super fresh</h3>
                     <p>FoodieHub serves up the best spots every thing super fresh, featuring unique flavors and artisan creations. <br>
                         Explore hidden gems and classic favorites in your city. Enjoy a sweet treat with FoodieHub's curated recommendations.</p>
                  </div>
               </div>
            </div>
         </div>
       </div>
       <!-----usage section end --------->
       <div class="pride">
         <div class="detail">
            <h1>We Pride Overselves On <br>Expectional Flavores</h1>
            <p>"At FoodieHub, we take immense pride in delivering exceptional culinary experiences,<br>
             crafted with passion and dedication. Enjoy a seamless ordering process, <br>
             diverse menu options, and timely delivery, ensuring quality in every bite."</p>
             <a href="menu.php" class="btn">shope now</a>
         </div>
       </div>
       <!-----pride section end --------->
       <?php  include 'components/footer.php';  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script src="js/user_script.js"></script>

         <?php include 'components/alert.php';?>
</body>
</html>