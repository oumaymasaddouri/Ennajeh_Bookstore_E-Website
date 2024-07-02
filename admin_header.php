<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Accueil</a>
         <a href="admin_products.php">Produits</a>
         <a href="">Commandes</a>
         <a href="">Stock</a>
         <a href="admin_users.php">Utilisateurs</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>nom d'utilisateur : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Déconnexion</a>
         <div> <a href="login_form.php"></a> Connexion| <a href="register_form.php">Inscription</a></div>
      </div>

   </div>

</header>