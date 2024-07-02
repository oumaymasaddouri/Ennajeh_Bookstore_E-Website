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
  <style> .navbar {
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

        .sorted-by select {
            padding: 8px;
            width: 100%;
            margin-bottom: 20px;
        }
 
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:lightblue;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
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
  <nav class="headertop">
    <div class="logo">
      <img src="images/logo1.png" alt="Ennajeh Bookstore Logo">
    </div>
    
    <div class="search-bar">
      <input type="text" placeholder="Rechercher un livre, un auteur, une collection...">
      <button class="top-cherche-btn" type="submit"><i class="fa fa-search"></i></button>
      
    </div>
    <div class="user-options">
      <a href="#" onclick="toggleAccountDropdown(event)" class="container" >
        <img src="images/user.png" alt="Mon compte">
        <span class="text" style="padding-top: 4px;">Mon compte</span> 
      </a>
      <ul class="account-dropdown" style="display: none;">
      <li><a href="login_form.php">Connexion</a></li>
            <li><a href="register_form.php">Inscription</a></li>
      </ul>
      <a href="cart.html" class="container">
        <img src="images/cart.png" alt="Mon panier">
        <span class="text" style="padding-top: 4px;">Panier</span>
      </a>
      <div style="margin-top: 5px;">
      <a href="wishlist.html" class="container">
        <img src="images/wishlist.png" alt="wishlist">
        <span class="text"  style="padding-top: 4px;">Favoris</span>
      </a>
     
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
<section class="hero" style="background-image: url(images/R.jpg);">
  <h1>Qui sommes-nous?</h1>
  <p>Découvrez notre histoire et notre équipe qui passionnément rendent nos produits accessibles à tous.</p>
  
</section>


  <section style="margin: 20px;">
    <h2>Notre Histoire</h2>
    <p>Fondée en 1989, Ennajeh Bookstore a débuté modestement en tant que petit magasin local dans le quartier, mais au fil des années, elle a prospéré pour devenir une véritable référence dans le monde du livre. Notre parcours a été marqué par un dévouement constant envers nos valeurs fondamentales : qualité, service et engagement envers nos clients.</p>

    <p>Notre mission est ancrée dans la passion pour la lecture et le désir de partager cette passion avec notre communauté. Nous croyons fermement que chaque livre a le pouvoir de transporter son lecteur dans un monde d'imagination et de connaissance, et c'est cette conviction qui guide chacune de nos actions.</p>  
      
      <p>Depuis nos débuts, nous nous sommes engagés à offrir une expérience exceptionnelle à chaque client qui franchit nos portes ou visite notre site web. Nous sélectionnons soigneusement chaque titre pour garantir une qualité optimale, et notre équipe dévouée est là pour fournir des recommandations personnalisées et un service attentionné à chaque étape de votre parcours avec nous.</p>
      
     <p> Que vous soyez à la recherche d'un best-seller récent, d'un classique intemporel ou d'un ouvrage spécialisé, nous nous efforçons de répondre à tous vos besoins en matière de lecture. Avec un assortiment diversifié de livres dans tous les genres, des événements culturels stimulants et un engagement envers l'excellence, Ennajeh Bookstore est bien plus qu'une simple librairie - c'est un lieu où les amoureux des livres se retrouvent pour partager leur passion et découvrir de nouveaux horizons littéraires.</p>
    
  </section>
  
  <h2 style="text-align:center">Notre équipe</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/jane.jpg".jpg alt="Jane" style="width:100%">
      <div class="container">
        <h2>Fethia Bouali</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>fethia@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/mike.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>abdelkarim Saddouri</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>abdelkarim@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/john.jpg"alt="John" style="width:100%">
      <div class="container">
        <h2>Mehdi Essaied</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mehdi@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<br
<div class="sectionn3" style="margin: 20px;">
  <h2><center>Notre Addresse</center></h2>
  <p></p>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.793732028433!2d10.091188881775452!3d36.823462394829605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33a1ecd12bb5%3A0x7d3298a68f606bb6!2sRue%20martyrs!5e0!3m2!1sfr!2stn!4v1714897649244!5m2!1sfr!2stn" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
</div>
<br>
<footer>
  <div class="ft">
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
        
        <!--<form>
          <input type="email" placeholder="Inscrivez-vous à la newsletter">
          <button type="submit">S'abonner</button>
        </form> -->
        <!--<div class="back-to-top">
          <a href="#top">↑</a>
        </div>-->
        
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
</body>
</html>