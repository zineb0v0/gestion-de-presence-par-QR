<!-- register.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h2>Inscription Étudiant</h2>
    <form method="POST" enctype="multipart/form-data" action="register_process.php">
        <label>Nom :</label><input type="text" name="nom" required><br>
        <label>Prénom :</label><input type="text" name="prenom" required><br>
        <label>Email :</label><input type="email" name="email" required><br>
        <label>Mot de passe :</label><input type="password" name="password" required><br>
        <label>Numéro Apogée :</label><input type="text" name="apogee" required><br>
        <label>Photo :</label><input type="file" name="photo" accept="image/*" required><br>
        <button type="submit">S'inscrire</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
