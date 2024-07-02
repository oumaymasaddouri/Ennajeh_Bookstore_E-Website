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
            <li><a href="logout.php">Déconnexion</a></li>
          </ul>
          <a href="images/cart.html" class="container">
            <img src="images/cart.png" alt="Mon panier">
            <span class="text" style="padding-top: 4px;">Panier</span>
          </a>
          <div style="margin-top: 5px;">
          <a href="" class="container">
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

<!-- The <main> tag specifies the main content of a document. -->
    <main>
        <!-- this is breadcrumb indicate the current page -->
        <div class="profile-breadcrumb">
            <div class="container-xl">
                <nav>
                    <ol>
                        <li><a href="">Bagagerie</a></li>
                        <li><a href="trousse.html">Trousse</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <br></br>
        <div class="container1">
            <div class="filters">
                <h2>Filtres</h2>
                <br></br>
                <!-- Sélection par niveau -->
                <h3>Niveau</h3>
                <label><input type="checkbox" name="level" value="maternelle"> Maternelle</label><br>
                <label><input type="checkbox" name="level" value="ecole"> Ecole</label><br>
                <label><input type="checkbox" name="level" value="college">Collège</label><br>
                <label><input type="checkbox" name="level" value="college">privée</label><br>


                <br></br>
                                <!-- Sélection par type de trousse -->
                <h3>Matière</h3>
                <label>
                    <input type="checkbox" name="pencil-case" value="trousse-plastique"> Trousse en plastique
                </label><br>
                <label>
                    <input type="checkbox" name="pencil-case" value="trousse-tissu"> Trousse en tissu
                </label><br>
                <label>
                    <input type="checkbox" name="pencil-case" value="trousse-cuir"> Trousse en cuir
                </label><br>
                <label>
                    <input type="checkbox" name="pencil-case" value="trousse-rouleau"> Trousse rouleau
                </label><br>
                <br>
                   <!-- Filtre additionnel : Trousse -->
                  <h3>Type</h3>
                  <label>
                    <input type="checkbox" name="trousse" value="simple"> Trousse simple
                  </label><br>
                  <label>
                    <input type="checkbox" name="trousse" value="double"> Trousse double
                  </label><br>
                  <label>
                    <input type="checkbox" name="trousse" value="triple"> Trousse triple
                  </label><br>
                  <label>
                    <input type="checkbox" name="trousse" value="multifonction"> Trousse multifonction</label><br>
                <br></br>
                <h3>Marques </h3>
                      <label>
                        <input type="checkbox" name="trousse-brand" value="kipling"> Kipling
                      </label><br>
                      <label>
                        <input type="checkbox" name="trousse-brand" value="eastpak"> Eastpak
                      </label><br>
                      <label>
                        <input type="checkbox" name="trousse-brand" value="jansport"> JanSport
                      </label><br>
                      <label>
                        <input type="checkbox" name="trousse-brand" value="maped"> Maped
                      </label><br>
                      <label>
                        <input type="checkbox" name="trousse-brand" value="stabilo"> Stabilo
                      </label><br>
                <!-- Filtre additionnel : Prix -->
                <h3>Prix</h3>
                <label>
                    <input type="radio" name="price" value="low"> Moins de 10 DT
                </label><br>
                <label>
                    <input type="radio" name="price" value="medium"> 10 DT à 50 DT
                </label><br>
                <label>
                    <input type="radio" name="price" value="high"> Plus de 50 DT
                </label><br>
            </div>


            <div class="products">
              <div class="product">
                    <img src="images/gabol.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse Gabol wendy</h3>
                        <p>Prix: 48 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon"  onclick="addToCart('70', 'Trousse Gabol wendy', '48', 'images/gabol.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('70', 'Trousse Gabol wendy', '48', 'images/gabol.jpg')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/g2.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse Gabol pranah</h3>
                        <p></p>
                        <p>Prix: 42.400 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('71', 'Trousse Gabol pranah', '42.400', 'images/g2.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('71', 'Trousse Gabol pranah', '42.400', 'images/g2.jpg')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/uni.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse LYC Unicorne</h3>
                        <p>Prix: 23.300 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('72', 'Trousse LYC Unicorne', '23.300', 'images/uni.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('72', 'Trousse LYC Unicorne', '23.300', 'images/uni.jpg')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/car.webp"  alt="Produit">
                    <div class="product-details">
                        <h3>Trousse Rond Cars Cool School</h3>
                        <p>Prix: 33.600 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('73', 'Trousse Rond Cars Cool School', ' 33.600', 'images/car.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('73', 'Trousse Rond Cars Cool School', ' 33.600', 'images/car.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/e3.webp" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse EASTPAK Meta Black</h3>
                        <p>Prix: 43.600 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon"  onclick="addToCart('74', 'Trousse EASTPAK Meta Black', '43.600', 'images/e3.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('74', 'Trousse EASTPAK Meta Black', '43.600', 'images/e3.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/e4.webp" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse EASTPAK Army Olive</h3>
                        <p>Prix: 43.600 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('75', 'Trousse EASTPAK Army Olive', ' 43.600', 'images/e4.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('75', 'Trousse EASTPAK Army Olive', ' 43.600', 'images/e4.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/b2.webp" alt="Produit">
                    <div class="product-details">
                        <h3>Trousse BOMI TS01 LITTLEGIRL </h3>
                        <p>Prix: 23.500 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('76', 'Trousse BOMI TS01 LITTLEGIRL', '23.500', 'images/b2.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('76', 'Trousse BOMI TS01 LITTLEGIRL', '23.500', 'images/b2.webp')" alt="Favori">
                    </div>
                </div>
             
                <!-- Répétez la structure du produit pour chaque produit dans votre liste -->
            </div>
        </div>
        </main>

    
    
    
    





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
        <p>Achetez en toute sérénité </p>
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
        <p>35 Rue de Martyrs, Douar hicher</p>
        <p>La Manouba</p>
        
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
        // Fonction d'ajout d'article au panier
        function addToCart(id, name, price, image) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      let found = false;

      // Vérifier si l'article existe déjà
      for (let i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
          cart[i].quantity += 1;
          found = true;
          break;
        }
      }

      // Ajouter un nouvel article
      if (!found) {
        cart.push({ id, name, price, image, quantity: 1 });
      }

      localStorage.setItem('cart', JSON.stringify(cart));
      showNotification('Article ajouté au panier!');
    }

    // Afficher une notification
    function showNotification(message) {
      const notification = document.getElementById('notification');
      notification.textContent = message;
      notification.style.display = 'block';
      setTimeout(() => notification.style.display = 'none', 2000);
    }

  </script>
 
</body>
</html>