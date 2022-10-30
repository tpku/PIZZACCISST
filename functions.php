<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}


function welcomeMessage(
    string $name,
    string $greeting = "CIAO BELLA, ",
    string $ending = " TIME TO MOVE ON!, "
) {
    require "arrays.php";
    echo "$greeting $name. $ending";
}


function echoGreeting(): string
{
    require "arrays.php";
    shuffle($greetings);
    return $greetings[0];
}
