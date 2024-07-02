<?php

@include 'config.php';

session_start();

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'utilisateur est authentifié
    if (isset($_SESSION['admin_id']) || isset($_SESSION['user_id'])) {
        // Obtenir l'ID de l'utilisateur depuis la session
        $user_id = $_SESSION['admin_id'] ?? $_SESSION['user_id'];

        // Récupérer les données du panier depuis la requête POST
        $cartData = json_decode(file_get_contents("php://input"), true);

        // Vérifier si les données du panier ne sont pas vides et que l'ID de l'utilisateur est valide
        if (!empty($cartData['cart']) && is_numeric($user_id)) {
            // Extraire les éléments du panier
            $cartItems = $cartData['cart'];

            // Préparer l'instruction SQL pour enregistrer les données du panier
            $stmt = $conn->prepare("INSERT INTO cart (user_id, item_name, item_price) VALUES (?, ?, ?)");

            // Lier les paramètres et exécuter l'instruction pour chaque élément
            foreach ($cartItems as $item) {
                $stmt->bind_param("iss", $user_id, $item['name'], $item['price']);
                $stmt->execute();
            }

            // Fermer la déclaration et la connexion
            $stmt->close();
            $conn->close();

            // Envoyer une réponse de réussite
            echo "Panier enregistré avec succès!";
        } else {
            // Envoyer une réponse d'erreur si les données du panier sont vides ou que l'ID de l'utilisateur n'est pas valide
            echo "Erreur: Données du panier invalides ou ID utilisateur non valide.";
        }
    } else {
        // Envoyer une réponse d'erreur si l'utilisateur n'est pas authentifié
        echo "Erreur: Utilisateur non authentifié.";
    }
} else {
    // Envoyer une réponse d'erreur si la méthode de la requête n'est pas POST
    echo "Erreur: Méthode de requête invalide.";
}
?>
