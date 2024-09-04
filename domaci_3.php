<?php
$naslov = "Postani programer";
$mojNiz = ["Glavna", "O nama", "Kontakt"];
$trenutnaGodina = date("Y");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Postani programer</title>
</head>

<body>
    <h1> <?= $naslov ?> </h1>
    <br>
    <a href=""> <?= $mojNiz[0] ?></a>
    <a href=""> <?= $mojNiz[1] ?></a>
    <a href=""> <?= $mojNiz[2] ?></a>
    <br>
    <br>
    <footer> Copyright @ mojsajt <?= $trenutnaGodina ?></footer>
</body>


</html>