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
    <H1>Page home </H1>
    <H3>Bienvenue
        <?= $_SESSION['login'] ?>
    </H3>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae accusamus incidunt error delectus atque a nisi omnis nulla officiis eaque perferendis voluptatibus quia, architecto provident officia laboriosam aperiam dolores corrupti.
    Voluptatem molestias voluptates inventore deserunt odio delectus dolore cum sunt asperiores facere impedit autem quis consequuntur saepe nulla, distinctio quam voluptas similique incidunt quos assumenda soluta earum. Beatae, provident voluptatibus.
    Iure alias rem voluptas voluptatem odit numquam ex iste qui repellat natus ratione cumque, dolorum molestiae laudantium! Cumque excepturi id temporibus quas unde vero eos deserunt voluptate omnis. Officia, natus!
    Quas eaque animi vel molestias pariatur nihil nulla asperiores eos. Aut dolorem cupiditate quod officia voluptas debitis nobis deleniti rerum quasi. Culpa iusto blanditiis laboriosam vitae quisquam sequi, modi error?
    Magni quae fugiat alias nihil odit officia eius placeat hic delectus minima similique voluptate dolor iusto quisquam eos, vitae amet dolorem voluptatibus distinctio laudantium libero voluptatum esse maxime. Ad, saepe!
    Tempore ad, natus facere nisi aspernatur consequuntur iure odio? Accusamus ipsa aperiam iste quibusdam distinctio iure quo in quia maxime esse! Eveniet autem, blanditiis voluptatum dolorem omnis voluptatibus adipisci ipsam.
    Laborum officia nihil facere id iusto illum error voluptates recusandae omnis, nam veritatis quae! Exercitationem magnam consectetur laudantium debitis alias aliquid, doloribus ratione deleniti id, aspernatur consequatur, adipisci maxime autem.
    Quos, excepturi inventore dolorem quisquam ipsa, omnis porro rerum aliquid fugit odio voluptatum facilis eveniet fugiat ab tempore. Distinctio fugiat fuga ipsam provident delectus explicabo inventore maiores neque voluptatum unde.
    Dolor libero neque non culpa quia, molestiae architecto error fugit aspernatur? Laudantium incidunt, beatae numquam possimus omnis maxime, cumque nobis facere esse culpa officia ipsam, asperiores sequi exercitationem quam corrupti!
    Itaque velit quis earum esse alias totam eaque omnis dolore delectus iusto facere illum nam aliquam id sapiente, ipsam architecto placeat non adipisci! Cupiditate vitae quas dicta eveniet dignissimos veritatis.
    Totam repellendus eius dolorum accusamus quasi omnis dolorem sit exercitationem. A amet repellat libero sapiente voluptatem totam. Dolorum nesciunt facilis unde voluptatibus, voluptates, illum minima ratione eveniet repellat cumque odit.
    Reprehenderit laboriosam odio quasi harum nemo aut cupiditate labore deleniti, dolorum minus, beatae doloribus fuga voluptatum neque atque porro debitis ut libero! Iusto consectetur aperiam soluta nam harum, rerum voluptas?
    Vero pariatur in repudiandae sint eaque, quod obcaecati iure, deserunt est hic nostrum. Suscipit eaque explicabo, saepe sunt voluptate illum optio, blanditiis neque rerum dolorum ipsum incidunt fugiat reprehenderit illo.
    Minus explicabo omnis ratione eligendi officiis hic aliquid assumenda quidem temporibus suscipit voluptatum veritatis consectetur vel molestiae, tempora harum dignissimos maxime? Labore doloribus temporibus qui. Consectetur eligendi quisquam placeat? Blanditiis.
    Maiores odio quibusdam eos reiciendis fuga cumque beatae nulla et cum similique. Reprehenderit, cum blanditiis. Veritatis voluptatem ipsa dolorum optio deleniti omnis soluta. Tenetur incidunt placeat officia odio modi debitis.
</body>

</html>