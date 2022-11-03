<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

function upperCase(string $name): string
{
    $upperCaseName = strtoupper($name);
    return $upperCaseName;
}

function welcomeMessage(string $name)
{
    require "arrays.php";
    echo "CIAO BELLA, $name.";
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
        "VAFFANCULO HIT THOSE CARBS! LET'S BAKE MAESTRO $name",
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
        "VAFFANCULO HIT THOSE CARBS! LET'S BAKE MAESTRO $name",
    ];
    shuffle($greetings);
    return $greetings[1];
}
