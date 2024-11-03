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
    <H1>Liste des commandes des Clients</H1>
    <H3>Bienvenue <?= $_SESSION['login'] ?> </H3>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias omnis reiciendis et, laudantium laborum aperiam porro temporibus. Labore magnam beatae, odio culpa consequatur, nisi, sed magni ad obcaecati accusantium quasi.
    Commodi neque voluptatibus, culpa beatae at quos quia fuga nihil blanditiis aut praesentium nostrum amet, sunt inventore ex sint facere vel cum odio molestias omnis ipsa. Quas velit officiis omnis!
    Iusto odit consequuntur cum aliquam eveniet, rem nesciunt ex atque quos, veniam quam est. Nam totam repudiandae incidunt odio mollitia quibusdam ipsa nihil iusto, cupiditate ab? Provident at aliquam velit.
    Neque id saepe pariatur non quia, ex ipsum voluptatum at ad et minima consectetur laborum aperiam optio molestiae distinctio? Similique temporibus animi est distinctio enim officiis consectetur ratione expedita dignissimos.
    Eos non et nesciunt incidunt pariatur dolorum atque porro illo iure sit doloremque, ducimus cupiditate voluptas ab dignissimos quasi delectus a fuga repudiandae minima libero rerum dicta ipsa fugit. Cumque!
    Eligendi inventore optio placeat officiis fugiat ipsum dolores officia, velit illo? Esse cum dolorem sunt harum eum! Quae ad optio, maiores quis ea sed non dicta tempore maxime magnam quod!
    Cum optio voluptas esse consectetur voluptatum expedita error eaque vitae delectus quibusdam temporibus omnis molestiae minus illo, blanditiis nobis sed minima iusto laborum, rem nam illum sapiente obcaecati qui. Eius!
    Consectetur accusamus nihil quam iusto sequi, nulla reprehenderit ex explicabo ipsum ad voluptatibus modi officia voluptatum in. Perspiciatis explicabo quas illo iusto totam neque. Necessitatibus corporis laborum provident nemo eos!
    Quisquam perferendis magnam illo at ratione officiis sunt expedita aliquid facilis ipsa. Natus repudiandae soluta, recusandae at et similique, nulla magni autem libero cumque ad aperiam, cum architecto eos aspernatur.
    Error veritatis officiis, blanditiis dolorem, dolorum voluptatem illo iste iure facilis eos delectus earum doloremque sequi vitae voluptas mollitia eveniet ipsam culpa? Quis repellendus, sequi voluptate ut enim veritatis officiis.
    Itaque eligendi recusandae perspiciatis dignissimos esse quis repellendus quod aperiam, excepturi est non illo possimus incidunt repudiandae asperiores mollitia consectetur voluptates, eius voluptate, maxime corporis omnis doloribus fugit? In, deserunt.
    Molestiae cumque, pariatur provident inventore facilis facere maiores laborum doloremque fugit corrupti eum molestias. Quo rem itaque quia, obcaecati autem excepturi iste ducimus est non quos incidunt molestiae voluptatibus tempora.
    Natus, dolorem modi enim iste maiores totam atque fuga ipsa autem dolore laudantium at alias eaque molestiae pariatur adipisci repellendus nesciunt iure, eos aspernatur impedit nulla voluptatibus nihil necessitatibus? Quas.
    Dolores quia assumenda libero, tempora rerum consequuntur blanditiis ullam reprehenderit repellat, aperiam corrupti praesentium ex laboriosam expedita ducimus ipsam laudantium illum. Ullam odio repellendus omnis! Perspiciatis earum accusamus incidunt ipsam?
    Rem modi commodi qui repellat cumque voluptatem, assumenda expedita obcaecati autem earum. Ab ratione eveniet neque totam cum molestiae quos officia laudantium blanditiis repudiandae. Sint necessitatibus numquam dolores commodi harum?
</body>

</html>