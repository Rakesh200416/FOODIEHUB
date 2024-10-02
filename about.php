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
    <title>FoodieHub - about us page</title>
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
               <h1>about us</h1>
              <p style="color: #000;">We are passionate food enthusiasts dedicated to bringing you the best recipes, <br>
               restaurant reviews, and food experiences from around the world. Our goal is to create a <br>
                vibrant community where food lovers can connect, share, and explore the rich world of gastronomy together.</p>
                <br>
                <p style="color: #000;">At FoodieHub, we are committed to maintaining the highest standards in everything we do. <br>
                 From the recipes we share to the restaurants we review, our goal is to provide our community with reliable, high-quality content that inspires and educates.</p>
                 <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span> 
            </div>
         </div>
         <div class="chef">
         <div class="box-container">
            <div class="box">
               <div class="heading">
                  <span>Abishek Aradya</span>
                  <h1>Masterchef</h1>
                  <img src="images/separator-img.png" alt="">
               </div>
               <p>Meet Adishekaradya, the culinary genius behind FoodieHub.
                   With over 20 years of experience in the culinary world, 
                   Adishekaradya has honed his skills in some of the finest kitchens around the globe.
                    His passion for food and innovative approach to cooking have earned him numerous accolades and a dedicated following of food enthusiasts.</p>
                    <div class="flex-btn">
                     <a href="" class="btn">explore our menu</a>
                     <a href="menu.php" class="btn">visit our website</a>
                    </div>
            </div>
            <div class="box">
               <img src="images/ceaf.png" alt="" class="img">
            </div>
         </div>
      </div>
      <div class="story">
         <div class="heading">
            <h1>our story</h1>
            <img src="images/separator-img.png" alt="">
         </div>
         <p>FoodieHub was born out of a shared passion for food and a desire to create a space where culinary enthusiasts could <br>
          come together to celebrate and explore the world of gastronomy. Founded in 2023 by a group of friends who bonded over their <br>
           love for cooking and eating out, FoodieHub quickly evolved from a small blog into a vibrant community of food lovers.</p>
           <br>
            <p>The idea for FoodieHub started in a cozy kitchen, where our <h4>  <b> founders—Rakesh R, Ranjitha A M, Rajeswari Kumar badiger & Anupama V </b></h4> <br>
             would gather to experiment with new recipes and share their culinary creations. <br> 
             Recognizing the joy and connection that food brought to their lives, they decided to launch a platform where others could share in this experience.</p>
             <a href="menu.php" class="btn">our services</a>
      </div>
      <div class="container">
         <div class="box-container">
            <div class="img-box">
               <img src="images/about.png" alt="">
            </div>
            <div class="box">
               <div class="heading">
                  <h1>our next help bone</h1>
                  <img src="images/separator-img.png" alt="">
               </div>
               <p>The FoodieHub team is a passionate group of culinary enthusiasts dedicated to curating 
                  the best food experiences. With a keen eye for detail and a love for gastronomy,
                   they strive to bring you the most exciting and diverse dining options. 
                   Their commitment ensures that every recommendation is a culinary delight.</p>
                   <a href="" class="btn">learn more</a>
            </div>
         </div>
      </div>
      <div class="team">
         <div class="heading">
            <span>FOODIE HUB</span>
            <h1>our office</h1>
            <img src="images/separator-img.png" alt="">
         </div>
         <div class="box-container">
            <div class="box">
               <img src="images/company.jpg" alt="" class="img" >
               <div class="content">
                  <img src="images/shape-19.png" alt="" class="shap">
                  <h2>In Bengalur</h2>
               </div>
             </div>
             <div class="box">
               <img src="images/company1.jpeg" alt="" class="img" >
               <div class="content">
                  <img src="images/shape-19.png" alt="" class="shap">
                  <h2>In Tumkur</h2>
                </div>
            </div>
            <div class="box">
               <img src="images/company2.webp" alt="" class="img" >
               <div class="content">
                  <img src="images/shape-19.png" alt="" class="shap">
                  <h2>In Chikkamagalur</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="standers">
         <div class="detail">
            <div class="heading">
               <h1>our standrds</h1>
               <img src="images/separator-img.png" alt="">
            </div>
             <p>Quality and Authenticity</p>
             <i class="bx bxs-heart"></i>
             <p>Integrity and Transparency</p>
             <i class="bx bxs-heart"></i>
             <p>Innovation and Creativity</p>
             <i class="bx bxs-heart"></i>
             <p>Sustainability and Responsibility</p>
             <i class="bx bxs-heart"></i>
         </div>
      </div>

      <div class="testimonial">
         <div class="heading">
            <h1>testimonial</h1>
            <img src="images/separator-img.png" alt="">
         </div>
         <div class=">testimonial-container">
            <div class="slide-row" id="slide">
               <div class="slide-col">
                  <div class="user-text">
                     <p>foodie hub is a best online food selling platform which gives an oppertunites for sellers and good products which good for health</p>
                     <h2>Kallesh</h2>
                     <p>Author</p>
                  </div>
                  <div class="user-img">
                     <img src="images/testimonial (1).jpg" alt="">
                  </div>
               </div>
               <div class="slide-col">
                  <div class="user-text">
                     <p>foodie hub is a best online food selling platform which gives an oppertunites for sellers and good products which good for health</p>
                     <h2>Janardhan</h2>
                     <p>Author</p>
                  </div>
                  <div class="user-img">
                     <img src="images/testimonial (2).jpg" alt="">
                  </div>
               </div>
               <div class="slide-col">
                  <div class="user-text">
                     <p>foodie hub is a best online food selling platform which gives an oppertunites for sellers and good products which good for health</p>
                     <h2>Ganga</h2>
                     <p>Author</p>
                  </div>
                  <div class="user-img">
                     <img src="images/testimonial (3).jpg" alt="">
                  </div>
               </div>
               <div class="slide-col">
                  <div class="user-text">
                     <p>foodie hub is a best online food selling platform which gives an oppertunites for sellers and good products which good for health</p>
                     <h2>Sharada</h2>
                     <p>Author</p>
                  </div>
                  <div class="user-img">
                     <img src="images/testimonial (4).jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="indicator">
              <span class="btn1 active"></span>
              <span class="btn1"></span>
              <span class="btn1"></span>
              <span class="btn1"></span>
         </div>
      </div>




       <?php  include 'components/footer.php';  ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script src="js/user_script.js"></script>

         <?php include 'components/alert.php';?>
</body>
</html>