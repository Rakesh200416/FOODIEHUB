<header class="header">
      <div class="logo">
        <img src="../images/Logo.png" width="100"> 
        
      </div>
      <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
      </div>
      <div class="profile-detail">
        <?php 
          $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE id = ?");
          $select_profile->execute([$seller_id]);

          if($select_profile->rowCount() >0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
          }
        ?> 
        <div class="profile">
          
            <img src="../uploded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
            <p><?= $fetch_profile['name']; ?></p>
            <div class="flex-btn">
            <img src="../images/profile.png" alt="" width="30">
                <a href="profile.php" class="btn" >profile</a>
                <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="btn">logout</a>
            </div>
        </div>
      </div>
</header>
<div class="sidebar-container">
  <div class="sidebar">
  <?php 
          $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE id = ?");
          $select_profile->execute([$seller_id]);

          if($select_profile->rowCount() >0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
          }
        ?> 
        <div class="profile">
            <img src="../uploded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
            <p><?= $fetch_profile['name']; ?></p>
        </div>
        <h5>menu</h5>
        <div class="navbar">
          <ul>
            <li><a href="dashboard.php"><i class="bx bxs-home-smile"></i>dashboard</a></li>
            <li><a href="add_product.php"><i class="bx bxs-shopping-bags"></i>add product</a></li>
            <li><a href="view_product.php"><i class="bx bxs-food-menu"></i>viewproduct</a></li>
            <li><a href="user_accounts.php"><i class="bx bxs-user-details"></i>accounts</a></li>
            <li><a href="../components/admin_logout.php" onclick="return confirm('logout from this website');"><i class="bx bx-log-out"></i>logout</a></li>
          </ul>
        </div>
        <h5>find us</h5>
        <div class="social-links">
        <a href="https://www.twitter.com" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="bx bxl-linkedin-in"></i></a>
        <a href="https://www.github.com" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
        <?php ?>
  </div>
</div>