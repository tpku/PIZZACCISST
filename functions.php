<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

function welcomeMessage(string $name)
{
    require "arrays.php";
    echo "CIAO BELLA, $name. TIME TO MOVE ON!";
}


function echoGreetingOne(): string
{
    $name = $_SESSION["name"];
    $name = strtoupper($name);
    $greetings = [
        "OUI $name, YOU PIZZACCISST!",
        "HEY THERE! $name SEXY BAKER!",
        "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $name!",
        "FRUTI DI MARE, MAMA MIA, FORNAIO $name!",
        "WHEN THE MOON HITS $name'S EYE LIKE A BIG PIZZA PIE!",
    ];
    shuffle($greetings);
    return $greetings[0];
}
function echoGreetingTwo(): string
{
    $name = $_SESSION["name"];
    $name = strtoupper($name);
    $greetings = [
        "OUI $name, YOU PIZZACCISST!",
        "HEY THERE! $name SEXY BAKER!",
        "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $name!",
        "FRUTI DI MARE, MAMA MIA, FORNAIO $name!",
        "WHEN THE MOON HITS $name'S EYE LIKE A BIG PIZZA PIE!",
    ];
    shuffle($greetings);
    return $greetings[1];
}
