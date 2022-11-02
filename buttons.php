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
if (isset($_POST["btn-kebab"])) {
    $_SESSION["pizza"]["topping"][] = "kebab";
}
if (isset($_POST["btn-ham"])) {
    $_SESSION["pizza"]["topping"][] = "ham";
}
if (isset($_POST["btn-pineapple"])) {
    $_SESSION["pizza"]["topping"][] = "pineapple";
}
if (isset($_POST["btn-banana"])) {
    $_SESSION["pizza"]["topping"][] = "banana";
}
if (isset($_POST["btn-shrimp"])) {
    $_SESSION["pizza"]["topping"][] = "shrimp";
}
if (isset($_POST["btn-sauce"])) {
    $_SESSION["pizza"]["topping"][] = "sauce";
}
