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
$baker = strtoupper($_SESSION["name"]);
$quoteOne = $_SESSION["quoteOne"];
// $quoteTwo = $_SESSION["quoteTwo"]; // Inactivated
?>

<main>
    <!-- Pizza Section -->
    <div class="pizza-container">
        <div class="pizza">
            <?php if (isset($_SESSION["pizza"])) : ?>
                <?php foreach ($_SESSION["pizza"] as $base) : ?>
                    <?php if ($base === "tomato-sauce") : ?>
                        <!-- Base tomato-sauce -->
                        <div class="pizza-base tomato-sauce">
                            <!-- Toppings -->
                            <div class="toppings-container">
                                <?php if (isset($_SESSION["pizza"]["topping"])) : ?>
                                    <?php foreach ($_SESSION["pizza"]["topping"] as $topping) : ?>
                                        <!-- Inline Styling to randomize Position and Rotation -->
                                        <div class="<?= $topping ?>" style="position: absolute; 
                                    top: <?= rand(1, 300); ?>px; 
                                    bottom: <?= rand(1, 300); ?>px; 
                                    left: <?= rand(1, 300); ?>px; 
                                    right: <?= rand(1, 300); ?>px;
                                    transform: rotate(<?= rand(0, 360); ?>deg);">
                                        </div>

                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endif; ?>
                    <?php if ($base === "blanco") : ?>
                        <!-- Base blanco -->
                        <div class="pizza-base blanco">
                            <!-- Toppings -->
                            <div class="toppings-container">
                                <?php if (isset($_SESSION["pizza"]["topping"])) : ?>
                                    <?php foreach ($_SESSION["pizza"]["topping"] as $topping) : ?>
                                        <!-- Inline Styling to randomize Position and Rotation -->
                                        <div class="<?= $topping ?>" style="position: absolute; 
                                    top: <?= rand(1, 300); ?>px; 
                                    bottom: <?= rand(1, 300); ?>px; 
                                    left: <?= rand(1, 300); ?>px; 
                                    right: <?= rand(1, 300); ?>px;
                                    transform: rotate(<?= rand(0, 360); ?>deg);">
                                        </div>

                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>
    <!-- Button Section -->
    <div class="button-container">
        <p> <?= "$baker $instructions" ?> </p>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <ul class="topping-list">
                <?php foreach ($pizzaToppings as $topping) : ?>
                    <?php $upper = strtoupper($topping["name"]); ?>
                    <li>
                        <input class="topping-btn btn-<?= $topping["btnName"]; ?>" type="submit" name="btn-<?= $topping["btnName"]; ?>" value="<?= $upper; ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>
    <!-- Circular Text Section -->
    <div>
        <section>
            <p class="text"><?= $quoteOne; ?></p>
        </section>
    </div>
</main>
<script src="script.js"></script>
<?php require_once "footer.php"; ?>