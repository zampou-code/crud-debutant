<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div>
        <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
        <?php
        session_start();
        if (isset($_GET['deconnexion'])) {
            if ($_GET['deconnexion'] == true) {
                session_unset();
                header("location: index.php");
            }
        } else if (isset($_SESSION['username']) && $_SESSION['username'] !== "") {
            $user = $_SESSION['username'];
            echo "<br>Bonjour $user, vous êtes connectés";
        }
        ?>

    </div>
</body>

</html>