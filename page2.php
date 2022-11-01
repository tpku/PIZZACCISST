<?php
include "head.php";
include "arrays.php";
include "functions.php";
include "buttons.php";
if (!isset($_SESSION)) {
    session_start();
}
?>


<?php
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
?>

<main>
    <div class="pizza-container">
        <div class="pizza">
            <?php foreach ($_SESSION["pizza"] as $base) : ?>
                <?php if ($_SESSION["pizza"]["base"] === "tomato-sauce") : ?>
                    <div class="tomato-sauce">
                        <?php foreach ($_SESSION["pizza"]["topping"] as $topping) : ?>
                            <?php if ($topping === "onion") : ?>
                                <div class='onion'></div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if ($_SESSION["pizza"]["base"] === "blanco") : ?>
                    <div class="blanco"></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="button-container">
        <p>WHAT'S YOUR TASTE?</p>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <ul>
                <?php foreach ($pizzaToppings as $topping) : ?>
                    <li>
                        <input class="topping-btn" type="submit" name="btn-<?= $topping["btnName"]; ?>" value="<?= $topping["name"]; ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>

    <div class="spin-container">
        <div class="spinner">
            <h1>
                <?= $_SESSION["quoteOne"] ?>
            </h1>
        </div>
        <div class="spinner">
            <h1>
                <?= $_SESSION["quoteTwo"] ?>
            </h1>
        </div>
    </div>
</main>

<?php require_once "footer.php"; ?>