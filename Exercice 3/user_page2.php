<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "user") {
    header("location:login.php?etat=2");
    exit;
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
    <h1>liste des produits</h1>
    <H3>Bienvenue <?= $_SESSION['login'] ?> </H3>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt optio, sint aperiam consequatur nesciunt impedit incidunt dolorem sit. Numquam at maiores cupiditate iste odit voluptatum delectus culpa quo nam similique.
    Iste architecto vitae totam eos quaerat quam veritatis eligendi. Repellat, unde? Tenetur ipsum quidem vitae dolorem totam fuga deserunt, quas nulla quisquam enim aut, deleniti, neque nam et ducimus aspernatur.
    Voluptates doloremque dignissimos cupiditate, atque expedita voluptatem placeat aliquam est quidem vel, repellendus ea earum error possimus sint nulla temporibus officiis? Libero culpa voluptatem sit illo quidem blanditiis quasi quisquam.
    Error rem voluptate molestiae alias vero maxime, accusantium aspernatur magni. Enim quaerat neque distinctio minima suscipit ut? Deleniti perspiciatis, dolore cumque molestiae facere eligendi exercitationem magnam excepturi optio fugit maxime.
    Fugiat eligendi nesciunt accusamus consequuntur doloribus, distinctio natus corporis? Suscipit exercitationem illum, recusandae quaerat et harum. Nemo quod laudantium, odio odit, culpa doloribus nobis dolorem ipsam doloremque, numquam ex laboriosam.
    Consequuntur numquam quo esse modi magnam illum delectus? Inventore cumque quasi cum distinctio blanditiis vitae corporis numquam eligendi maiores minus ipsum at rem voluptate eos dolorem, adipisci enim mollitia voluptates!
    Ratione ab ipsa deserunt minus numquam rem inventore, qui alias harum nemo! Corrupti quia possimus fugiat adipisci consequuntur recusandae nam ipsam numquam reiciendis. Quas sit natus praesentium eius? Voluptatum, natus?
    Distinctio molestias ipsum aliquam dolores iste reprehenderit modi laboriosam reiciendis rem! Doloribus beatae provident voluptates asperiores sunt? Aperiam ex voluptatem, nisi veritatis veniam aliquid repellendus iure totam neque, dolor itaque.
    Molestiae laboriosam voluptatibus adipisci inventore? Ut magnam quis neque vero aspernatur unde voluptatem dolores sunt. Deleniti eveniet laudantium magnam nobis sapiente alias laboriosam, impedit, suscipit voluptates, voluptatum ex totam est.
    Amet mollitia tempora quam accusantium itaque? Numquam expedita fuga veniam nostrum? Natus aliquid quasi recusandae fugit doloremque quisquam, quae doloribus provident. Eaque, earum? Quasi nobis, hic ipsum quisquam nihil veritatis?
    Porro saepe magnam accusamus, culpa unde voluptatum expedita corporis modi consequuntur, quae reiciendis quos repellendus debitis, numquam dolor laboriosam iure! Dolores enim nemo quasi, doloribus quaerat placeat eum non earum?
    Dicta perferendis quia sed, omnis natus laudantium ipsam laborum explicabo! Fuga recusandae ducimus repellendus sint, consectetur deleniti iure corrupti molestiae neque assumenda possimus necessitatibus esse? Eveniet iure autem ut sapiente.
    A est fugit blanditiis earum repellendus labore sapiente error et consequatur doloribus temporibus, exercitationem unde maxime ipsa nesciunt iste porro accusamus alias enim fuga? Id amet porro rerum! Facere, eveniet.
    Deleniti officia nihil quae eius delectus voluptates molestiae, modi, amet autem illum error reprehenderit alias debitis? Fuga ab officia omnis qui, excepturi magnam perspiciatis corrupti modi doloribus fugiat assumenda illo.
    Qui in reiciendis quia ipsam voluptate, labore dolore, ex officiis dolorem neque corrupti ipsa laudantium minima vitae soluta animi, earum quisquam esse aperiam quidem obcaecati velit. Nostrum ab magni amet!

</body>

</html>