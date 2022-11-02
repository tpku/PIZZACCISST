<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

$pizzaToppings = [
    ["btnName" => "tomato-sauce", "name" => "Tomato Sauce"],
    ["btnName" => "blanco", "name" => "Blanco"],
    ["btnName" => "onion", "name" => "Onion"],
    ["btnName" => "fungi", "name" => "Fungi"],
    ["btnName" => "kebab", "name" => "Kebab"],
    ["btnName" => "ham", "name" => "Ham"],
    ["btnName" => "pineapple", "name" => "Pineapple"],
    ["btnName" => "banana", "name" => "Banana"],
    ["btnName" => "shrimp", "name" => "Shrimp"],
    ["btnName" => "sauce", "name" => "Sauce"],
];

$pizzaFill = [
    "base" => "tomato-sauce",
    "base" => "blanco",
    "topping" => "onion",
    "topping" => "fungi",
    "topping" => "kebab",
    "topping" => "ham",
    "topping" => "pineapple",
    "topping" => "banana",
    "topping" => "shrimp",
    "topping" => "sauce",
];
