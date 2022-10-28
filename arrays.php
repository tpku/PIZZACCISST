<?php
if (!isset($_SESSION)) {
    session_start();
}


$outputName = $_SESSION["name"];

$greetings = [
    "OUI $outputName, YOU PIZZACCISST!",
    "HEY THERE! $outputName SEXY BAKER!",
    "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $outputName!",
    "FRUTI DI MARE, MAMA MIA, FORNAIO $outputName!",
    "WHEN THE MOON HITS $outputName'S EYE LIKE A BIG PIZZA PIE!",
];
shuffle($greetings);

// echo "<pre>";
// print_r($greetings);
// echo "<pre>";
