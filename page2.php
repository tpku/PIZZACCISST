<?php
include "head.php";
include "arrays.php";
if (!isset($_SESSION)) {
    session_start();
}

$inputName = $_SESSION["name"];
$inputName = strtoupper($inputName);

$greetings = [
    "OUI $inputName, YOU PIZZACCISST!",
    "HEY THERE! $inputName SEXY BAKER!",
    "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $inputName",
    "MAMA MIA, FORNAIO $inputName FUNGI PIZZA",
];
shuffle($greetings);
?>

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
// Comments below are the rest of the buttons.

// if (isset($_POST["btn-fungi"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "fungi");
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-kebab"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "kebab");
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-ham"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "ham");
//     $_SESSION["pizza"] = $pizzaDone;
// }
// if (isset($_POST["btn-pineapple"])) {
//     $pizzaDone = pizzaAdder($pizzaFill, "pineapple");
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

?>

<main>

    <div class="spin-container">
        <div class="spinner">
            <h1>
                <?= $greetings[0] ?>
                <!-- Greeting index 0 printed -->
            </h1>
        </div>
        <div class="spinner">
            <h1>
                <?= $greetings[1] ?>
                <!-- Greeting index 1 printed -->
            </h1>
        </div>
    </div>
</main>

<?php require_once "footer.php"; ?>