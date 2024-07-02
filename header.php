<?php
session_start();

// Function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['name']);
}

// Function to get the username if logged in
function getUsername() {
    return isset($_SESSION['name']) ? $_SESSION['name'] : "";
}
?>

<div id="header">
    <?php if (isLoggedIn()): ?>
        <p>Bienvenu, <?php echo getname(); ?>! Vous etes connecté.</p>
    <?php else: ?>
        <p>Vous visitez notre site en tant qu'invité.</p>
    <?php endif; ?>
</div>