<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "admin") {
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
    <h1>Ajout d'un nouveau produit</h1>
    <H3>Bienvenue <?= $_SESSION['login'] ?> </H3>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quidem eveniet nobis harum omnis fuga eius eum. Iure sint eos corporis, debitis autem assumenda ipsam dolor. Perspiciatis cumque quos aliquid.
    Excepturi cupiditate illum saepe, dicta minima eius enim, odit nam minus a error aliquam quidem maiores, eveniet necessitatibus deleniti mollitia officiis asperiores recusandae earum? Facere tenetur voluptate error veniam totam.
    Vero incidunt est obcaecati quo. Voluptates id fugiat beatae quod. Obcaecati ullam possimus officia facere numquam, minus excepturi eveniet omnis laborum dicta nam incidunt dignissimos illum recusandae aliquid deleniti tempore.
    Perspiciatis quaerat rem ad vitae quae reiciendis consequatur totam ullam ipsam deleniti adipisci doloribus, et possimus. Tempore, autem. Soluta est accusamus earum obcaecati eius ullam consectetur dolor magni eveniet suscipit.
    Voluptatem, consectetur vel saepe maxime tenetur eius ratione. Consequatur cumque veniam suscipit ducimus harum sint laudantium aliquam eaque, quasi asperiores voluptatem libero explicabo assumenda et corrupti vitae natus doloribus voluptatum!
    Iusto ad consequatur alias aut! Porro voluptas expedita similique facere? Culpa obcaecati sequi veniam facilis hic? Alias sit ea dolorum sint, aperiam itaque, impedit voluptas ex porro modi, dolore ut.
    Quo mollitia cupiditate modi natus voluptatem est ullam molestias harum, ipsam magnam soluta eaque doloribus itaque? Recusandae consequatur iure natus minus. Error repudiandae eveniet incidunt placeat reiciendis explicabo voluptatum aliquid.
    Voluptate pariatur quisquam provident aspernatur nam vitae commodi quia praesentium, tenetur dignissimos, laboriosam consequuntur, repudiandae nulla rerum excepturi vero. Error assumenda quod nobis soluta neque ab, consequuntur quo excepturi? Placeat.
    Inventore eveniet iste voluptatum optio quisquam. At alias ab tempora fuga reiciendis. Enim aut totam eius animi dolor a cupiditate necessitatibus sint vero consequuntur impedit aliquam harum laudantium, provident dolore.
    Rerum facere aut consequatur iusto iste nesciunt necessitatibus tenetur totam consequuntur, odio dolores neque impedit harum corrupti debitis nihil rem cupiditate vel minus quas natus sit non corporis dicta. Ipsam.
    Ducimus est consectetur blanditiis autem, magnam earum fugiat velit facilis quas accusantium omnis quidem rerum laudantium veniam deserunt perferendis, dolor necessitatibus unde corrupti? Libero, reprehenderit reiciendis cum minima sunt itaque.
    Explicabo ab ipsa voluptatem nulla unde accusantium quas aut omnis, nam numquam provident quae commodi iure maxime dolores animi quaerat asperiores. Porro facilis ullam exercitationem aut, quae soluta autem aspernatur.
    Minus reprehenderit vel exercitationem! Neque expedita suscipit obcaecati eaque doloribus dolore porro rem esse reprehenderit voluptatum rerum accusantium blanditiis atque, voluptate delectus voluptas excepturi aperiam magnam? Facilis maiores laborum at.
    Dolorem, laborum dicta nam ea aut necessitatibus nihil, obcaecati, expedita similique exercitationem officiis accusamus optio rem officia id consequatur neque voluptas fugit natus ullam odio ex enim laudantium? Praesentium, ipsam.
    Autem impedit ullam molestiae modi maiores totam possimus commodi voluptas temporibus ipsa. Rem necessitatibus aperiam ratione quisquam modi autem repudiandae maxime exercitationem, voluptatem repellat repellendus voluptates quia dolorem ex nobis?
</body>

</html>