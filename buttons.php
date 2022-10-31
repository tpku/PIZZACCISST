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
