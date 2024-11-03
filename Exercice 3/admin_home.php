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
    <h1>Page home de l'admin </h1>
    <H3>Bienvenue <?= $_SESSION['login'] ?> </H3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aspernatur molestias explicabo nobis at facere, fugiat nam tempora? Vitae corporis et est aperiam harum facere error deserunt delectus animi libero.
    Quasi incidunt laboriosam id neque quos necessitatibus dolorum consectetur, earum eos aliquid placeat accusamus reprehenderit dolores exercitationem nesciunt aspernatur possimus magnam! Aspernatur nisi cumque id accusamus temporibus ab facere? Molestias!
    Repudiandae corporis impedit natus beatae perferendis dolorum ipsa fugiat aliquid illum iste libero, dolore voluptatem excepturi eveniet repellendus nemo rerum, laudantium modi? Ad ut ducimus, esse expedita fugiat optio quaerat!
    Consequuntur, omnis id quibusdam a, reprehenderit cumque provident ducimus nostrum itaque laboriosam molestias vero at debitis consequatur minima aperiam distinctio, ad ipsum. Tenetur consequuntur doloribus incidunt sapiente repellendus sequi veniam!
    Quia debitis dolor est omnis corrupti vero quo eaque repellendus. Hic vel distinctio esse? Saepe illum illo autem ab cum fugiat recusandae debitis impedit ea explicabo voluptate accusantium, delectus mollitia!
    Assumenda, molestiae quasi incidunt eveniet dolorum quam autem rem nostrum impedit cum suscipit odit! Nulla tempore soluta voluptate dolores sequi nam quasi non, error minima ab molestiae. Fugiat, iste eligendi.
    Quidem ad magni quasi recusandae dolorem impedit ut laborum, maxime cupiditate commodi tempore autem aspernatur fugit accusamus quibusdam, distinctio aliquid? Minus illo iste consequuntur inventore aliquid culpa libero, ut suscipit?
    Aliquid nulla distinctio quae vitae amet explicabo molestias sunt suscipit asperiores inventore, beatae necessitatibus, adipisci laboriosam quos sint neque saepe a officia. Magni sit dicta perferendis corporis incidunt sequi repellendus.
    Repellat, molestias maiores! Eligendi quisquam voluptas delectus saepe dolore adipisci ad fugit cupiditate rem, corporis reiciendis veniam nam nesciunt neque voluptate numquam eveniet. Autem vero dolore labore adipisci voluptatem suscipit!
    Quidem, ut facere. Nostrum exercitationem minima voluptates maiores dolorem repellat molestias aperiam obcaecati! Totam quod iusto quibusdam magnam vitae sequi dignissimos! Et vel maxime vero quos corporis accusantium at possimus.
    Explicabo molestiae eius et culpa rem incidunt ea, dolores, cumque sint perspiciatis possimus, qui minus consectetur nesciunt iste? Odio consectetur dolor accusantium obcaecati quibusdam iure, commodi fugiat optio earum debitis.
    Dignissimos, asperiores, quia praesentium quam repellendus modi, ab aliquid sunt facilis non vel porro quod? Dolores voluptatem rem ad inventore! Quo, perspiciatis distinctio. Assumenda doloribus, ducimus deserunt quisquam debitis et.
    Incidunt rerum velit nulla, dolor ipsa perferendis delectus iusto. Libero est dolore ex, ipsum rem nemo enim ab beatae vitae at, minus quae ut reiciendis illum amet doloribus hic eligendi!
    Error iure dolorem, esse fugiat tempora, assumenda consequatur sapiente doloremque debitis dicta facilis accusamus vitae ipsam omnis dignissimos tempore sit corporis adipisci temporibus perferendis vel unde! Expedita dignissimos facilis consequuntur.
    Officiis earum, numquam qui autem, dignissimos ipsam nostrum assumenda, corrupti saepe velit atque ad porro. Repudiandae aperiam facilis numquam nisi, ut ea cupiditate molestiae corporis omnis praesentium tenetur quis nulla.
</body>

</html>