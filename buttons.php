<?php

if (isset($_POST["btn-tomato-sauce"])) {
    $_SESSION["pizza"]["base"] = "tomato-sauce";
}
if (isset($_POST["btn-blanco"])) {
    $_SESSION["pizza"]["base"] = "blanco";
}
if (isset($_POST["btn-onion"])) {
    $_SESSION["pizza"]["topping"][] = "onion";
}
if (isset($_POST["btn-fungi"])) {
    $_SESSION["pizza"]["topping"][] = "fungi";
}
// Comments below are the rest of the buttons.

// if (isset($_POST["btn-kebab"])) {
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-ham"])) {
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-pineapple"])) {
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-banana"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "banana");
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-shrimp"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "shrimp");
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-sauce"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "sauce");
//     $_SESSION["pizza"] = $pizzaDone;
// }