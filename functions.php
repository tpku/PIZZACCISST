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


// // ---- useless shit ---
// function getBtnData(string $input): array
// {
//     require "arrays.php";

//     $toppingBtns = [];

//     foreach ($pizzaToppings as $topping["btnName"] => $input) {
//         if ($topping["btnName"] = $input) {
//             $toppingBtns[] = $topping["btnName"];
//         }
//     }
//     // foreach ($pizzaToppings as $btnName["name"] => $input) {
//     //     if ($input === $btnName["name"]) {
//     //         $toppingBtns[] = $btnName;
//     //     }
//     // }

//     return $toppingBtns;
// }

// echo "<pre>";
// var_dump(getBtnData("onion"));
// echo "</pre>";

// function echoArray($name)
// {
//     require "arrays.php";
//     foreach ($pizzaToppings as $topping) {
//         if ($name == $topping["btnName"]) {
//             echo "hej";
//         }
//     }
// }

// echo getBtnData();
