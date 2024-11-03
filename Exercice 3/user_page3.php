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
    <h1>Liste des Catégories</h1>
    <H3>Bienvenue <?= $_SESSION['login'] ?> </H3>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quam laborum quos deleniti aut, recusandae voluptas ratione neque perspiciatis, sed veritatis nihil quisquam veniam vitae quae beatae corrupti, consequatur esse.
    Nihil, libero quo dolorum laudantium similique beatae facere itaque consectetur? Nam laborum error provident magni, expedita quis. Recusandae soluta ea qui assumenda repudiandae. Alias possimus nihil harum ratione voluptas pariatur.
    Aut, rem repellendus. Dicta fugit perspiciatis a reprehenderit, suscipit tenetur exercitationem officia, laboriosam quas nisi voluptates ab cumque voluptatem! Veniam, libero consequuntur ea maiores sapiente facere perspiciatis illum laudantium neque!
    Mollitia ex, deserunt officiis voluptatibus aliquid numquam. In consequuntur soluta dolores dignissimos reiciendis! Consectetur libero alias natus magnam, eligendi asperiores vitae, accusantium neque repellendus nostrum aut, qui temporibus voluptate pariatur.
    Itaque sint optio dolorem eligendi, incidunt accusantium, hic nulla exercitationem perferendis iste dignissimos omnis officiis ipsam dolorum beatae est. Eos qui natus, ratione quidem labore velit repudiandae! Repudiandae, esse itaque!
    Repellat dolorum deleniti maxime recusandae labore ea deserunt omnis ipsa cumque consectetur similique, quas laborum dignissimos atque perspiciatis eaque nisi possimus officia enim. Voluptate quam tempora aut ipsa odio. Assumenda!
    Ea unde minus dicta ab qui aut, ut fugiat quos, necessitatibus ducimus odio exercitationem incidunt expedita repudiandae voluptas quo? Excepturi, soluta temporibus odio accusantium provident at recusandae aspernatur iste pariatur.
    Laboriosam possimus ex fugit fugiat corrupti, animi quasi iste repellat hic, dolor, doloribus odio rerum nisi eius? Molestiae praesentium maiores impedit, illum similique iure expedita hic qui amet odit officia!
    Maxime, asperiores laboriosam. Suscipit, odio tenetur rem aspernatur ipsam dicta perspiciatis nostrum magnam veniam, placeat adipisci eum ducimus reprehenderit voluptate pariatur, atque voluptates quia eveniet omnis consequatur iusto neque! Ratione?
    Repudiandae, amet nesciunt enim consequuntur molestiae vel eius sequi, magnam doloribus mollitia commodi, voluptates a quia totam distinctio eaque facilis modi atque qui pariatur reiciendis nisi natus! Rerum, exercitationem ducimus.
    Itaque laborum dolorum molestias pariatur eum corporis, unde nesciunt. Voluptates nobis ipsum placeat, quasi illum magni perferendis cumque nemo soluta numquam voluptas delectus debitis quod exercitationem incidunt error. Recusandae, magni?
    Facilis ratione quas recusandae at natus qui autem perspiciatis tenetur necessitatibus impedit, molestias ullam dolore maiores laborum sed animi facere voluptates sunt veritatis illum. Ab totam eligendi impedit eos modi!
    Sequi eum ad, commodi consequatur repellendus quae fuga omnis earum minus voluptates libero, aliquid quasi facere cum. Vel id, quae accusamus cupiditate, eos magni sunt reiciendis aut accusantium, mollitia eaque.
    Iste aut iure, a quasi nostrum incidunt rem eius architecto deleniti vero veniam illo esse tenetur quis ullam quibusdam non dignissimos. Expedita aliquid voluptas hic maiores minus dicta nisi delectus?
    Pariatur eius officia odit, ipsam possimus fuga rerum harum! Saepe aliquid magni quos iure itaque unde ipsam facere nobis perferendis? Deleniti et excepturi ullam repudiandae explicabo debitis laudantium ab iure?

</body>

</html>