<?php
    session_start();
    if (isset($_GET["etat"]))
    {
        $etat=$_GET["etat"];
        switch ($etat)
        {
            case 1:
                echo "<script>alert('login et/ou mot de passe sont incorrects !!')</script>";
                break;
            case 2:
                echo "<script>alert('vous devez vous authentifier avant!!')</script>";
                break;
            case 3:
                echo "<script>alert('Merci pour votre visite !')</script>";
                break;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 4 | Exercice 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body class="bg-warning">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <span class="navbar-brand">Amine Kilani</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../Exercice 1.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Exercice 2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3">
            <fieldset>
                <legend>Page d'authentification</legend>
                <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="login" placeholder="Login">
                        </div>
                        <div class="col-md-4">
                            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-dark mt-3 text-warning" value="Envoyer" name="ok">
                    </div>
                </form>
            </fieldset>
            <?php
                if (isset($_POST["ok"]))
                {
                    $login=htmlspecialchars($_POST["login"]);
                    $mdp=htmlspecialchars($_POST["mdp"]);
                    if ($login==="User" && md5($mdp)==="5a30c9609b52fe348fb6925896e061de")
                    {
                        $_SESSION["login"]=$login;
                        $_SESSION["mdp"]=$mdp;
                        header("location: pageUser.php");
                        exit;
                    }
                    if ($login==="Admin" && md5($mdp)==="e64b78fc3bc91bcbc7dc232ba8ec59e0")
                    {
                        $_SESSION["login"]=$login;
                        $_SESSION["mdp"]=$mdp;
                        header("location: pageAdmin.php");
                        exit;
                    }
                    header("location: login.php?etat=1");
                    exit;
                }
            ?>
        </div>
    </body>
</html>