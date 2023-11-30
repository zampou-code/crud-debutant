<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] !== "") {
    header("location: principale.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <form action="verification.php" method="POST">
        <label>Nom d'utilisateur</label>
        <input name="username" type="text" /><br /> <br />

        <label>Mot de passe</label>
        <input name="password" type="text" /><br /> <br />

        <button type="submit">se connecter</button>

        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</body>

</html>