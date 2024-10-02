<?php 
     include 'components/connect.php';

     if(isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
     }else{
        $user_id = '';
     }

     
     if(isset($_POST['send_message'])) {
        if($user_id != '') {

            $id = unique_id();
            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);

            $email = $_POST['email'];
            $email = filter_var($email,FILTER_SANITIZE_STRING);

            $subject = $_POST['subject'];
            $subject = filter_var($subject, FILTER_SANITIZE_STRING);

            $message = $_POST['message'];
            $message = filter_var($email, FILTER_SANITIZE_STRING);

            $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
            $verify_message->execute([$user_id, $name, $email, $subject, $message]);

            if($verify_message->rowCount() > 0) {
                $warning_msg[] = 'message already exists';
            }else{
                $insert_message = $conn->prepare("INSERT INTO `message`(id, user_id, name, email, subject, message) VALUES(?, ?, ?, ?, ?, ?)");
                $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);

                $success_msg[] = 'comment inserted successfully';
            }
        }else{
                 $warning_msg[] = 'please login first';
        }
     }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - contact us page</title>
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
               <h1>contact us</h1>
                <p style="color: #000;">At FoodieHub, we are committed to maintaining the highest standards in everything we do. <br>
                 From the recipes we share to the restaurants we review, our goal is to provide our community with reliable, high-quality content that inspires and educates.</p>
                 <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>contact us</span> 
            </div>
         </div>
         <div class="services">
            <div class="heading">
                <h1>our services</h1>
                <p>Just A Few Click To Make The Reservation Online For saving Your Time And Money</p>
                <img src="images/separator-img.png" alt="">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="images/0.png" alt="">
                    <div>
                       <h1>free shiping fast</h1>
                       <p>Get all available free services with foodiehub</p>
                   </div>
                </div>
                <div class="box">
                    <img src="images/1.png" alt="">
                    <div>
                       <h1>money back</h1>
                       <p>Get all available free services with foodiehub</p>
                   </div>
                </div>
                <div class="box">
                    <img src="images/2.png" alt="">
                    <div>
                       <h1>online support 24/7</h1>
                       <p>Get all available free services with foodiehub</p>
                   </div>
                </div>
            </div>
        </div>
        <div class="form-container">
            <div class="heading">
                <h1>drop your notes</h1>
                <p>For making a services best give us a suggestions</p>
                <img src="images/separator-img.png" alt="">
            </div>
            <form action="" method="post" class="register">
                <div class="input-field">
                <label for="name">Name <sup>*</sup></label>
                <input type="text" name="name" required placeholder="Enter your name" class="box" pattern="[A-Za-z]+" title="Please enter only alphabets">
                </div>
                <div class="input-field">
                    <label for="">email<sup>*</sup></label>
                    <input type="email" name="email" required placeholder="enter your name" class="box">
                </div>
                <div class="input-field">
                    <label for="">subject<sup>*</sup></label>
                    <input type="text" name="subject" required placeholder="reason...." class="box">
                </div><div class="input-field">
                    <label for="">comment <sup>*</sup></label>
                    <textarea name="message" cols="30" rows="10" required placeholder="any suggestions" class="box"></textarea>
                </div>
                <button type="submit" name="send_message" class="btn">send message</button>
            </form>
        </div>
        <div class="address">
            <div class="heading">
                <h1>our contact details</h1>
                <p>Just A Few Click To Make The Reservation Online For saving Your Time And Money</p>
                <img src="images/separator-img.png" alt="">
            </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-alt"></i>
                    <div>
                        <h4>address</h4>
                        <p>FoodieHub headquarters,2nd stage,<br>HSR Layout, Bengaluru,502-105</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-phone-incoming"></i>
                    <div>
                        <h4>phone number</h4>
                        <p>5642-654-321</p>
                        <p>5642-654-321</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-envelope"></i>
                    <div>
                        <h4>email</h4>
                        <p>adminfoodiehub@gmail.com</p>
                        <p>techninjasfoodiehub@gmail.com</p>
                    </div>
                </div>
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