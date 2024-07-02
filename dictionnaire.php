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
                        <li><a href="">Livres</a></li>
                        <li><a href="dictionnaire.php">Dictionnaire</a></li>
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
                <!-- Sélection par matière -->
                <!-- Sélection par type de dictionnaire -->
<h3>Types de dictionnaires</h3>
<label>
    <input type="checkbox" name="dictionary" value="francais"> Français
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="anglais"> Anglais
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="bilingue"> Bilingue
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="synonymes"> Synonymes
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="antonymes"> Antonymes
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="encyclopedique"> Encyclopédique
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="technique"> Technique
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="medical"> Médical
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="juridique"> Juridique
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="finance"> Finances
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="sciences"> Sciences
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="arts"> Arts
</label><br>
<label>
    <input type="checkbox" name="dictionary" value="histoire"> Histoire
</label><br>
<br>

                <br></br>
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
                    <img src="images/re.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Le robert des écoles  </h3>
                        <p> mon premier dictionnaire-Nouvelle édition</p>
                        <p>Prix: 40 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon"  onclick="addToCart('20', 'Le robert des écoles', '40', 'images/re.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('20', 'Le robert des écoles', '40', 'images/re.jpg')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/rj.webp" alt="Produit">
                    <div class="product-details">
                        <h3>Dictionnaire Le Robert junior</h3>
                        <p>1ère année</p>
                        <p>Prix: 63 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('21', 'Dictionnaire Le Robert junior', '63', 'images/rj.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('21', 'Dictionnaire Le Robert junior', '63', 'images/rj.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/fe.webp" alt="Produit">
                    <div class="product-details">
                        <h3>dictionnaire Larousse français-anglais français -anglais</h3>
                        <p>Prix: 12.700 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('22', 'dictionnaire Larousse français-anglais français -anglais', '12.700', 'images/fe.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('22', 'dictionnaire Larousse français-anglais français -anglais', '12.700', 'images/fe.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/lm.webp"  alt="Produit">
                    <div class="product-details">
                        <h3> Larousse Maxipoche 2024</h3>
                        <p>Prix: 45 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('23', 'Larousse Maxipoche 2024', '45', 'images/lm.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('23', 'Larousse Maxipoche 2024', '45', 'images/lm.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/kefi.webp" alt="Produit">
                    <div class="product-details">
                        <h3>Dictionnaire Al kafi français-arabe </h3>
                        <p>Prix: 21.250 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon"  onclick="addToCart('24', 'Dictionnaire Al kafi français-arabe ', '21.250', 'images/kefi.webp')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('24', 'Dictionnaire Al kafi français-arabe ', '21.250', 'images/kefi.webp')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/la.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Dictionnaire Français-Allemand Allemand-Français</h3>
                        <p></p>
                        <p>Prix: 12.66 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('25', 'Dictionnaire Français-Allemand Allemand-Français', '12.66', 'images/la.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('25', 'Dictionnaire Français-Allemand Allemand-Français', '12.66', 'images/la.jpg')" alt="Favori">
                    </div>
                </div>
                <div class="product">
                    <img src="images/ln.jpg" alt="Produit">
                    <div class="product-details">
                        <h3>Nouveau Dictionnaire Des Débutants</h3>
                        <p></p>
                        <p>Prix: 23.800 DT</p>
                    </div>
                    <div class="actions">
                        <img src="images/cart.png" class="icon" onclick="addToCart('26', 'Nouveau Dictionnaire Des Débutants', '23.800', 'images/ln.jpg')" alt="Ajouter au panier">
                        <img src="images/wishlist.png" class="icon" onclick="wishlist.addToWishlist('26', 'Nouveau Dictionnaire Des Débutants', '23.800', 'images/ln.jpg')" alt="Favori">
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
  <script>
// Simulation de l'objet wishlist avec des méthodes pour gérer les articles
const wishlist = {
    items: [], // tableau pour stocker les produits de la wishlist

    getAllItems: function() {
        return this.items;
    },

    addToWishlist: function(id, name, price, imageSrc) {
        // Vérifie si le produit existe déjà dans la wishlist
        if (!this.items.some(item => item.id === id)) {
            const product = { id, name, price, imageSrc };
            this.items.push(product);
            this.updateWishlistDisplay(); // Mise à jour de l'affichage de la wishlist
        } else {
            console.log("Produit déjà dans la wishlist"); // Ou affichez un message d'alerte
            // alert("Produit déjà dans la wishlist");
        }
    },

    removeFromWishlist: function(id) {
        this.items = this.items.filter(item => item.id !== id);
        this.updateWishlistDisplay(); // Mise à jour de l'affichage après la suppression
    },

    updateWishlistDisplay: function() {
        const wishlistCountElement = document.getElementById("myWishlistItem");
        wishlistCountElement.textContent = ` ${this.items.length}`; // Mise à jour du compteur dans la barre de navigation
    }
};

function addToWishlist(id, name, price, imageSrc) {
    wishlist.addToWishlist(id, name, price, imageSrc);
}

function removeFromWishlist(id) {
    wishlist.removeFromWishlist(id);
}

document.addEventListener('DOMContentLoaded', function() {
    // Ajouter des éléments à la wishlist pour des tests initiaux, si nécessaire
    addToWishlist('1', 'Manuel d allemand', '5', 'scolaire/all3.webp');
});
  </script>
  <script>
    const cart = {
    items: [], // Stocke les produits ajoutés au panier

    addToCart: function(id, name, price, imageSrc) {
        const product = { id, name, price, imageSrc };
        this.items.push(product);
        this.updateCartDisplay(); // Mise à jour de l'affichage du panier
    },

    updateCartDisplay: function() {
        const cartCountElement = document.getElementById("myCartItem");
        cartCountElement.textContent = ` ${this.items.length}`; // Mise à jour du compteur de panier
    }
};

function addToCart(id, name, price, imageSrc) {
    cart.addToCart(id, name, price, imageSrc);
}

// Ajouter une initialisation de l'écouteur d'événements si nécessaire
document.addEventListener('DOMContentLoaded', function() {
    // Ajouter des éléments au panier pour des tests initiaux, si nécessaire
});

  </script>
  <script>
    function toggleVisibility(id) {
        var element = document.getElementById(id);
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
    </script>
    
</body>
</html>