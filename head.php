<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}
$siteName = "PIZZACCISST";
$creatorName = "TPKU";
$year = 2022;
$instructions = "CHOOSE YOUR TOPPINGS AND DON'T FORGET THE BASE!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZACCISST</title>
    <link rel="stylesheet" href="styles/color.css">
    <link rel="stylesheet" href="styles/text.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <p> <?= $siteName; ?></p>
        <nav class="navbar">
            <ul>
                <!-- <li><a href="index.php">START</a></li>
                <li><a href="page2.php">PAGE 2</a></li> -->
                <!-- Only visible when developing -->
                <li><a href="destroy_session.php">DESTROY</a></li>
            </ul>
        </nav>
    </header>