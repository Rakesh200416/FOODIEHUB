<?php
     include '../components/connect.php';
    
     if(isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
     }else{
        $seller_id = '';
        header('location:login.php');
     }

    $get_id = $_GET['post_id'];

    if(isset($_POST['delete'])) {
        $p_id = $_POST['product_id'];
        $p_id = filter_var($p_id, FILTER_SANITIZE_STRING);

        $delete_image = $conn->prepare("SELECT * FROM `products` WHERE id = ? AND seller_id = ?");
        $delete_image->execute([$p_id, $seller_id]);

        $fetch_delete_image = $delete_image->fetch(PDO::FETCH_ASSOC);
        if($fetch_delete_image[''] != '') {
            unlink('../uploaded_files/'.$fetch_delete_image['image']);
        }
        $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ? AND seller_id = ? ");
        $delete_product->execute([$p_id, $seller_id]);
        header("location:view_product.php");
    }

     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieHub - Read product page</title>
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
         <section class="read-post">
              <div class="heading">
                <h1 >product details</h1>
                <img src="../images/separator-img.png" alt="">
              </div>
              <div class="box-container">
                <?php  
                    $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ? AND seller_id = ?");
                    $select_products->execute([$get_id, $seller_id]);
                    if($select_products->rowCount() > 0) {
                        while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
                    
                ?>
                <form action="" method="post" class="box">
                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($fetch_products['id']); ?>">
                    <div class="status" style="color: <?php if($fetch_products['status'] == 'active'){ echo "green";} else{echo "red";} ?>"><?= htmlspecialchars($fetch_products['status']); ?></div>
                    <?php if($fetch_products['image'] != '') { ?>
                        <img src="../uploded_files/<?= htmlspecialchars($fetch_products['image']); ?>" alt="" class="image">
                    <?php } ?>
                    <div class="price">$<?= htmlspecialchars($fetch_products['price']); ?></div>
                    <div class="title"><?= htmlspecialchars($fetch_products['name']); ?></div>
                    <div class="content"><?= htmlspecialchars($fetch_products['product_detail']); ?></div>
                    <div class="flex-btn">
                        <a href="edit_product.php?id=<?= htmlspecialchars($fetch_products['id']); ?>" class="btn">edit</a>
                        <button type="submit" name="delete" class="btn" onclick="return confirm('delete thid product');">delete</button>
                        <a href="view_product.php?post_id=<?= htmlspecialchars($fetch_products['id']); ?>" class="btn">go back</a>
                    </div>
                </form>
                <?php 
                        }
                    }else{
                        echo '
                         <div class="empty">
                            <p>no products added yet! <br> <a href="add_product.php" class="btn" style="margin-top: 1.5rem;">add products</a></p>
                        </div>
                    ';
                    }
                ?>
              </div>
         </section>
    </div>
   
   





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<script src="../js/admin_script.js"></script>

<?php include '../components/alert.php';?>
</body>
</html>