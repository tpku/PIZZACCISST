<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

function upperCase($inputData): string
{
    $trimmedData = trim($inputData);
    $entitiesData = htmlentities($trimmedData);
    $specCharsData = htmlspecialchars($entitiesData);
    $upperCaseName = strtoupper($specCharsData);
    return $upperCaseName;
}

function welcomeMessage(string $name)
{
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
// function echoGreetingTwo(): string // -- Inactivated. This function is supposed to have different quotes.
// {
//     $name = $_SESSION["name"];
//     $name = strtoupper($name);
//     $greetings = [
//         "OUI $name, YOU PIZZACCISST!",
//         "HEY THERE! $name SEXY BAKER!",
//         "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $name!",
//         "FRUTI DI MARE, MAMA MIA, FORNAIO $name!",
//         "WHEN THE MOON HITS $name'S EYE LIKE A BIG PIZZA PIE!",
//         "VAFFANCULO HIT THOSE CARBS! LET'S BAKE MAESTRO $name",
//     ];
//     shuffle($greetings);
//     return $greetings[1];
// }
