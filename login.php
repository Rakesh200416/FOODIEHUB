<?php 
     include 'components/connect.php';

     if(isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
     }else{
        $user_id = '';
     }

     if(isset($_POST['submit'])) {
        
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $select_user = $conn->prepare("SELECT * FROM  `users` WHERE email = ? AND password = ?");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if($select_user->rowCount() > 0) {
            setcookie('user_id',$row['id'],time() + 60*60*24*30, '/');
            header('location:home.php');
        }else{
            $warning_msg[] = 'incorrect email or password';
            }
        
     }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - user login page</title>
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
               <h1>login</h1>
                <p style="color: #000;">At FoodieHub, we are committed to maintaining the highest standards in everything we do. <br>
                 From the recipes we share to the restaurants we review, our goal is to provide our community with reliable, high-quality content that inspires and educates.</p>
                 <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>login</span> 
            </div>
         </div>
         <div class="form-container">
     <form action="" method="post" enctype="multipart/form-data" class="login" >
         <h3>login now</h3>
         <div class="input-field">
            <p>your email <span>*</span></p>
             <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
        </div>
        <div class="input-field">
            <p>your password <span>*</span></p>
            <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box">
        </div>
         
        <p class="link">Do Not have An Account? <a href="register.php">Register Now</a></p>
        <input type="submit" name="submit" value="login now" class="btn" >

     </form>
</div>

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