
<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    header('location:login_form.php');
    exit;
}

$query = "SELECT name FROM `user_form` WHERE id = '$user_id'";
$result = mysqli_query($conn, $query) or die('query failed');
$user = mysqli_fetch_assoc($result);
$user_name = $user['name'];

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login_form.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/productlist.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Ennajeh Bookstore</title>
  <link href="images/logo1.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
    .welcome-message {
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
            color: green;
            padding: 10px;
        }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .navbar {
      overflow: hidden;
      background-color:lightblue;
      display: flex;           /* Use flexbox to align items */
      justify-content: center; /* Center navbar contents horizontally */
    }
    
    .navbar a {
      float: left;
      font-size: 16px;
      color:black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      justify-content: center;
    }
    
    .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: black;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: #eae8e6;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    * {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container1{
          width: 100%;
          background: lightblue;
          border-radius: 6px;
          padding: 20px 60px 30px 40px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          
        }
        .container1 .content{
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .container1 .content .left-side{
          width: 25%;
          height: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          margin-top: 15px;
          position: relative;
        }
        .content1 .left-side::before{
          content: '';
          position: absolute;
          height: 70%;
          width: 2px;
          right: -15px;
          top: 50%;
          transform: translateY(-50%);
          background: #afafb6;
        }
        .content .left-side .details{
          margin: 14px;
          text-align: center;
        }
        .content .left-side .details i{
          font-size: 30px;
          color: #3e2093;
          margin-bottom: 10px;
        }
        .content .left-side .details .topic{
          font-size: 18px;
          font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
          font-size: 14px;
          color:white;
        }
        .container1 .content .right-side{
          width: 75%;
          margin-left: 75px;
        }
        .content .right-side .topic-text{
          font-size: 23px;
          font-weight: 600;
          color: #3e2093;
        }
        .right-side .input-box{
          height: 50px;
          width: 100%;
          margin: 12px 0;
        }
        .right-side .input-box input,
        .right-side .input-box textarea{
          height: 100%;
          width: 100%;
          border: none;
          outline: none;
          font-size: 16px;
          background: #F0F1F8;
          border-radius: 6px;
          padding: 0 15px;
          resize: none;
        }
        .right-side .message-box{
          min-height: 110px;
        }
        .right-side .input-box textarea{
          padding-top: 6px;
        }
        .right-side .button{
          display: inline-block;
          margin-top: 12px;
        }
        .right-side .button input[type="button"]{
          color: #fff;
          font-size: 18px;
          outline: none;
          border: none;
          padding: 8px 16px;
          border-radius: 6px;
          background: #3e2093;
          cursor: pointer;
          transition: all 0.3s ease;
        }
        .button input[type="button"]:hover{
          background: #5029bc;
        }
        
        @media (max-width: 950px) {
          .container{
            width: 90%;
            padding: 30px 40px 40px 35px ;
          }
          .container1 .content .right-side{
           width: 75%;
           margin-left: 55px;
        }
        }
        @media (max-width: 820px) {
          .container1{
            margin: 40px 0;
            height: 100%;
          }
          .container1 .content{
            flex-direction: column-reverse;
          }
         .container1 .content .left-side{
           width: 100%;
           flex-direction: row;
           margin-top: 40px;
           justify-content: center;
           flex-wrap: wrap;
         }
         .container1 .content .left-side::before{
           display: none;
         }
         .container1 .content .right-side{
           width: 100%;
           margin-left: 0;
         }
        
        /* Styles for .header-intro-clearance .wishlist>a */
.header-intro-clearance .wishlist > a {
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* General styles for links */
a {
    color: #e95c73;
    -webkit-text-decoration: none;
    text-decoration: none;
    transition: color .3s ease;
    font-family: "Poppins";
    background-color: transparent;
}

/* Hover and focus styles for links */
a:focus,
a:hover {
    -webkit-text-decoration: none;
    text-decoration: none;
}

/* Reset box-sizing */
*,
*:after,
*:before {
    box-sizing: border-box;
}

/* User agent styles */
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
 }
 
    </style>
    </head>
    <body style="background-color:white;">
    <header> <div class="promoslider">
        <marquee>
          <p style="color: white;">Horaires d'ouverture des librairies : de 9h00 à 19h30 et 7 jours sur 7</p>
        </marquee>
      </div>
      <!---->
      
    <div class="welcome-message">
        Bienvenue chèr(e) <?php echo $user_name; ?>!
    </div>
      <nav class="headertop">
        <div class="logo">
          <img src="images/logo1.png" alt="Ennajeh Bookstore Logo">
        </div>
        
        <div class="search-bar">
          <input type="text" placeholder="Rechercher un livre, un auteur, une collection...">
          <button class="top-cherche-btn" type="submit"><i class="fa fa-search"></i></button>
          
        </div>
       
        <div class="user-options">
    <a href="#" onclick="toggleAccountDropdown(event)" class="container">
        <img src="images/user.png" alt="Mon compte">
        <span class="text" style="padding-top: 4px;">Mon compte</span> 
    </a>
    <ul class="account-dropdown" style="display: none;">
        <?php
        if ($user_id) { // Vérifie si l'utilisateur est connecté
            echo '<li><a href="logout.php">Déconnexion</a></li>'; // Ajoute le bouton de déconnexion
        } else {
            echo '<li><a href="login_form.php">Connexion</a></li>';
            echo '<li><a href="register_form.php">Inscription</a></li>';
        }
        ?>
    </ul>
    <a href="cart.html" class="container">
        <img src="images/cart.png" alt="Mon panier">
        <span class="text" style="padding-top: 4px;">Panier</span>
    </a>
    <div style="margin-top: 5px;">
        <a href="" class="container">
            <img src="images/wishlist.png" alt="wishlist">
            <span class="text"  style="padding-top: 4px;">Favoris</span>
        </a>
    </div>
</div>
      </nav>
    </header>
    
  
    <div class="navbar">
      <a href="proj.php">Accueil</a>
      <div class="dropdown">
        <button class="dropbtn">Livres</i>
        </button>
        <div class="dropdown-content">
          <a href="scolaire.php">Scolaire</a>
          <a href="parascolaire.php">Parascolaire </a>
          <a href="dictionnaire.php">Dictionnaire</a>
        </div>
      </div> 
      
      <div class="dropdown">
        <button class="dropbtn">Papeterie</i>
        </button>
        <div class="dropdown-content">
          <a href="cahier.php">Cahier</a>
          <a href="feuilles.php">Feuilles </a>
          
        </div>
      </div> 
      <a href="fourniture.php">Fourniture Scolaire</a>
      <div class="dropdown">
        <button class="dropbtn">Bagagerie</i>
        </button>
        <div class="dropdown-content">
          <a href="sacados.php">Sac à dos</a>
          <a href="trousse.php">Trousse </a>
          <a href="panier.php">Panier </a>
          
        </div>
      </div> 
    </div>
    
<!-- Content Section -->
 <!--container-->
 <div style="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large;">
  <pstyle="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large;><strong>Au Service du Livre et de la Culture depuis plus de 35 ans en Tunisie, et maintenant dans le Monde sur le Web.
   </strong></p>
</div>

<div id="bannerImage"style="background-image: url(images/n.jpg);">
  <div class="container">
      <center>
      <div id="bannerContent"style=" font-family: 'Times New Roman', Times, serif; " >
          <h1 style=" font-family: 'Times New Roman', Times, serif; "> Soyez les bienvenus à Ennajeh Bookstore</h1>
          <br></br>
          <h2 style=" font-family: 'Times New Roman', Times, serif; color: #fff;">Explorez notre large gamme de livres et de fournitures </h2>
          <br></br>
          <a href="about.php" class="btn btn-primary">Qui Sommes Nous?</a>
      </div>
      </center>
  </div>
</div>
<div style="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large;">
  <p style="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large; color: black;"><strong>Nous veillons sur la Qualité de nos produits et la Satisfaction de nos clients
   </strong></p>
</div>
<h2 style="text-align:center"></h2>

<div class="row">
  <div class="column">
    <img src="images/1.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/5.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/3.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/4.webp" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/1.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/5.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/3.webp" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/4.webp" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="images/1.webp" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/5.webp" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/3.webp" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/4.webp" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large;">
  <p><strong>
    </strong></p>
</div>

<div class="container1">

    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Addresse</div>
          <div class="text-one">14 Rue de Martyrs</div>
          <div class="text-two">Douar-Hicher , Manouba</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Télépnone</div>
           <div class="text-one"><a href="tel:54268768"   style="color: white;">54 268 768</a></div>
          <div class="text-two"><a href="tel:21128704"  style="color: white;">21 128 704</a></div>
        </div>
        <div class="email details">
          <div class="topic">Email</div>
          <div class="text-one">Ennajehbookstore@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contactez-nous</div>
        <p>Utilisez le formulaire ci-dessous pour entrer en contact avec l'équipe commerciale</p>
        <form action="" method="post">
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

    </div>
    </div>
  </div>




<div style="display: flex; justify-content: center; align-items: center; height: 100px; font-family: 'Times New Roman', Times, serif; font-size: x-large;">
  <p><strong>
    
  </strong></p>
</div>

     


  <footer>
    <div class="footer-container">
      <!-- Block 1: Logo and name -->
      <div class="footer-block footer-logo">
        <h2><u>Ennajeh Bookstore</u></h2>
        <br></br>
        <img src="images/logo1.png" alt="AL KITAB logo" class="logof">
      </div>
      
      <!-- Block 2: Contact links -->
      <div class="footer-block footer-links">
        <h3><u>www.ennajehbookstore.tn</u></h3>
        <br></br>
        <ul>
          <li><a href="#">Infos pratiques</a></li>
          <li><a href="#">Conditions générales</a></li>
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Données personnelles</a></li>
          <li><a href="#">Gérer mes cookies</a></li>
        </ul>
      </div>
      
      <!-- Block 3: Help and payment -->
      <div class="footer-block footer-help">
        <h3>Besoin d'aide ?</h3>
        <ul>
          <li><a href="#">Questions fréquentes</a></li>
          <li><a href="#">Nous écrire</a></li>
          <li><a href="#">Hotline eBooks</a></li>
          <li><a href="#">Tarifs de livraison</a></li>
        </ul>
        <br></br>
        <h3>Paiement sécurisé</h3>
        <p style="color: black;">Achetez en toute sérénité </p>
        <div class="payment-methods">
          <img src="images/visa.PNG" alt="Visa">
          <img src="images/mastercard.PNG" alt="MasterCard">
          <img src="images/paypal.PNG" alt="PayPal">
          <!-- More payment method images -->
        </div>
      </div>
      
      <!-- Block 4: Social and newsletter -->
      <div class="footer-block footer-social">
        <h3>Réseaux sociaux</h3>
        <div class="social-icons">
          <a href="#"><img src="images/FB.png" alt="Facebook"></a>
          <a href="#"><img src="images/INSTA (2).png" alt="Instagram"></a>
          <a href="#"><img src="images/YB.png" alt="YouTube"></a>
          <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
          <a href="#"><img src="images/twitter.png" alt="twitter"></a>
        </div>
        <br></br>
        <h3>Addresse</h3>
        <p style="color: black;">35 Rue de Martyrs, Douar hicher</p>
        <p style="color: black;">La Manouba</p>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
          <div class="row">
              <div class="col-md-12  col-sm-12">
                  © 2024 Ennajeh Bookstore Tous droits réservés | Réalisation &amp; Référencement <a href="https://www.shyrineprod.com/" target="_blank">ShyrineProd</a>
              </div>
          </div>
      </div>
  </div>
  </footer>
 
  <script>
    const accountDropdown = document.querySelector('.account-dropdown');

    function toggleAccountDropdown(event) {
      event.stopPropagation(); // Prevents click event from affecting other elements
      accountDropdown.style.display = accountDropdown.style.display === 'block' ? 'none' : 'block';
    }

    window.addEventListener('click', () => {
      if (accountDropdown.style.display === 'block') {
        accountDropdown.style.display = 'none';
      }
    });
  </script>
  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
    <script>
    const accountDropdown = document.querySelector('.account-dropdown');

    function toggleAccountDropdown(event) {
        event.stopPropagation(); // Empêche l'événement de propagation pour éviter la fermeture du menu déroulant
        accountDropdown.style.display = accountDropdown.style.display === 'block' ? 'none' : 'block';
    }

    window.addEventListener('click', () => {
        if (accountDropdown.style.display === 'block') {
            accountDropdown.style.display = 'none';
        }
    });
</script>

</body>
</html>




    

      