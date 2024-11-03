<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 4 | Exercice 1</title>
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
                            <a class="nav-link active" href="Exercice 1.php">Exercice 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Exercice 2/login.php">Exercice 2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-3">
            <form  method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                Français <input type="radio" class="form-check-input" value="Français" name="langue">
                Anglais <input type="radio" class="form-check-input" value="Anglais" name="langue"><br>
                <input type="submit" class="btn btn-dark mt-3 text-warning" value="Choisir" name="ok">
            </form>
            <?php
            if (isset($_POST["ok"]) && isset($_POST["langue"]))
                echo "<p class='alert alert-warning mt-3'>Vous avez choisi : ".htmlspecialchars($_POST["langue"])."</p>";
            ?>
        </div>
    </body>
</html>