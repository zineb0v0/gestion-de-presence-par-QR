<!-- index.php -->
<?php 
include 'includes/header.php'; 
?>

<main>
    <h2>Connexion</h2>
    <form method="POST" action="login.php">
        <label>Nom complet :</label>
        <input type="email" name="email" required><br>

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required><br>


        <button type="submit">Se connecter</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>

