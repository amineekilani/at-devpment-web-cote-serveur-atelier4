<?php
session_start();
if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case 1:
            echo "<script> alert('merci pour votre visite à la prochaine fois!')</script>";
            break;
        case 2:
            echo "<script> alert('vous n\'êtes pas authoriées')</script>";
            break;
        case 3:
            echo "<script> alert('login et/ou mot de passe sont incorrect!!')</script>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="login" placeholder="votre login"><br>
        <input type="text" name="pw" placeholder="votre password" id=""><br>
        <input type="submit" value="Se connecter" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        $login = htmlspecialchars($_POST['login']);
        $pw = htmlspecialchars($_POST['pw']);
        if ($login === "admin" && md5($pw) === "0192023a7bbd73250516f069df18b500") {
            $_SESSION['login'] = $login;
            $_SESSION['pw'] = $pw;
            header("location:admin_home.php");
            exit;
        }
        if ($login === "user" && md5($pw) === "6ad14ba9986e3615423dfca256d04e3f") {
            $_SESSION['login'] = $login;
            $_SESSION['pw'] = $pw;
            header("location:user_home.php");
            exit;
        }
        header("location:login.php?etat=3");
        exit;
    }
    ?>
</body>

</html>