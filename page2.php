<?php
include "head.php";
include "arrays.php";
if (!isset($_SESSION)) {
    session_start();
}

// $outputName = $_SESSION["name"];
// $outputName = strtoupper($outputName);

// $greetings = [
//     "OUI $outputName, YOU PIZZACCISST!",
//     "HEY THERE! $outputName SEXY BAKER!",
//     "PARMIGIANO-REGGIANO, BURRATA! CIAO BELLA $outputName!",
//     "FRUTI DI MARE, MAMA MIA, FORNAIO $outputName!",
//     "WHEN THE MOON HITS $outputName'S EYE LIKE A BIG PIZZA PIE!",
// ];
// shuffle($greetings);

function echoGreeting(): string
{
    require "arrays.php";
    shuffle($greetings);
    return $greetings[0];
}
?>


<?php
// function getBtnData(array $pizzaToppings, array );){

// }

// if (isset($_POST[""])) {
// } // försöker göra en foreach isset knapp funktion

if (isset($_POST["btn-tomato-sauce"])) {
    $_SESSION["pizza"]["base"] = "tomato-sauce";
}
if (isset($_POST["btn-blanco"])) {
    $_SESSION["pizza"]["base"] = "blanco";
}
if (isset($_POST["btn-onion"])) {
    $_SESSION["pizza"]["topping"][] = "onion";
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
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
    <div class="button-container">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <ul>
                <?php foreach ($pizzaToppings as $topping) : ?>
                    <li>
                        <input type="submit" name="btn-<?= $topping["btnName"]; ?>" value="<?= $topping["name"]; ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>

    <div class="spin-container">
        <div class="spinner">
            <h1>
                <?= echoGreeting() ?>
                <!-- Greeting index 0 printed -->
            </h1>
        </div>
        <div class="spinner">
            <h1>
                <?= echoGreeting() ?>
                <!-- Greeting index 1 printed -->
            </h1>
        </div>
    </div>
</main>

<?php require_once "footer.php"; ?>