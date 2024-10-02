<?php
     include '../components/connect.php';
    
     if(isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
     }else{
        $seller_id = '';
        header('location:login.php');
     }

     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - seller dashboard page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    <div class="main-container">
         <?php include '../components/admin_header.php'; ?>
         <section class="dashboard">
              <div class="heading">
                <h1>dashboard</h1>
                <img src="../images/separator-img.png" alt="">
              </div>
              <div class="box-container">
                <div class="box">
                    <h3>welcome !</h3>
                    <p><?= $fetch_profile['name'];?></p>
                    <a href="update.php" class="btn">Update Profile</a>
                </div>
                <div class="box">
                    <?php 
                         $select_message = $conn->prepare("SELECT * FROM `message`");
                         $select_message->execute();
                         $number_0f_msg = $select_message->rowCount();
                    ?>
                    <h3><?= $number_0f_msg; ?></h3>
                    <p>unread message</p>
                    <a href="admin_message.php" class="btn">See Message</a>
                </div>
                <div class="box">
                    <?php 
                         $select_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?");
                         $select_products->execute([$seller_id]);
                         $number_0f_products = $select_products->rowCount();
                    ?>
                    <h3><?= $number_0f_products; ?></h3>
                    <p>products added</p>
                    <a href="add_product.php" class="btn">Add Products</a>
                </div>
                <div class="box">
                    <?php 
                         $select_active_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ? AND status = ?");
                         $select_active_products->execute([$seller_id, 'active']);
                         $number_0f_active_products = $select_active_products->rowCount();
                    ?>
                    <h3><?= $number_0f_active_products; ?></h3>
                    <p> total active products</p>
                    <a href="view_product.php" class="btn">Active Products</a>
                </div>
                <div class="box">
                    <?php 
                         $select_deactive_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ? AND status = ?");
                         $select_deactive_products->execute([$seller_id, 'deactive']);
                         $number_0f_deactive_products = $select_deactive_products->rowCount();
                    ?>
                    <h3><?= $number_0f_deactive_products; ?></h3>
                    <p> total deactive products</p>
                    <a href="view_product.php" class="btn">Deactive Products</a>
                </div>
                <div class="box">
                    <?php 
                         $select_users = $conn->prepare("SELECT * FROM `users`");
                         $select_users->execute();
                         $number_0f_users = $select_users->rowCount();
                    ?>
                    <h3><?= $number_0f_users; ?></h3>
                    <p>users account</p>
                    <a href="user_accounts.php" class="btn">See Users</a>
                </div>
                <div class="box">
                    <?php 
                         $select_sellers = $conn->prepare("SELECT * FROM `sellers`");
                         $select_sellers->execute();
                         $number_0f_sellers = $select_sellers->rowCount();
                    ?>
                    <h3><?= $number_0f_sellers; ?></h3>
                    <p>sellers account</p>
                    <a href="user_accounts.php" class="btn">See Sellers</a>
                </div>
                <div class="box">
                    <?php 
                         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ?");
                         $select_orders->execute([$seller_id]);
                         $number_0f_orders = $select_orders->rowCount();
                    ?>
                    <h3><?= $number_0f_orders; ?></h3>
                    <p>total orders placed</p>
                    <a href="admin_order.php" class="btn">Total Orders</a>
                </div>
                <div class="box">
                    <?php 
                         $select_confirm_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ? AND status = ?");
                         $select_confirm_orders->execute([$seller_id, 'in progress']);
                         $number_0f_confirm_orders = $select_confirm_orders->rowCount();
                    ?>
                    <h3><?= $number_0f_confirm_orders; ?></h3>
                    <p>total confirm orders</p>
                    <a href="admin_order.php" class="btn">Confirm Orders</a>
                </div>
                <div class="box">
                    <?php 
                         $select_cancled_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ? AND status = ?");
                         $select_cancled_orders->execute([$seller_id, 'cancled']);
                         $number_0f_cancled_orders = $select_cancled_orders->rowCount();
                    ?>
                    <h3><?= $number_0f_cancled_orders; ?></h3>
                    <p>total cancled orders</p>
                    <a href="admin_order.php" class="btn">Cancled Orders</a>
                </div>
              </div>
         </section>
    </div>
   





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<script src="../js/admin_script.js"></script>

<?php include '../components/alert.php';?>
</body>
</html>