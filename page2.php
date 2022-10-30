<?php
include "head.php";
include "arrays.php";
include "functions.php";
if (!isset($_SESSION)) {
    session_start();
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
            </h1>
        </div>
        <div class="spinner">
            <h1>
                <?= echoGreeting() ?>
            </h1>
        </div>
    </div>
</main>

<?php require_once "footer.php"; ?>