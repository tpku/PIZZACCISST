<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZACCISST</title>
    <link rel="stylesheet" href="/styles/color.css">
    <link rel="stylesheet" href="/styles/text.css">
    <link rel="stylesheet" href="/styles/style.css">
</head>
<header>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">START</a></li>
            <li><a href="page2.php">PAGE 2</a></li>
            <li><a href="index.php">START</a></li>
        </ul>
    </nav>
</header>

<body>