<?php
include "head.php";
include "functions.php";
include "arrays.php";
if (!isset($_SESSION)) {
    session_start();
}

// $_SESSION["name"] = upperCase($_POST["name"]);
// $inputName = $_SESSION["name"];

if (isset($_POST["name"])) {
    $_SESSION["name"] = htmlspecialchars($_POST["name"]);
    $cleanName = ($_SESSION["name"]);
    $inputName = cleanUpper($cleanName);
}
?>
<!-- Html Section -->
<main>
    <div class="form-container">
        <p class="form-section">HEY,</p>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="name"></label>
            <input class="form-section" type="text" name="name" placeholder="WHO ARE YOU?">
            <input class="form-section input-btn" type="submit" name="submit" value="SHOW ME!">
        </form>
        <?php if (isset($_POST["name"])) : ?>
            <?php if (empty($_POST["name"])) : ?>
                <p class="form-section">
                    <!-- Print if input field is empty -->
                    <?= "MI SCUSI, WHO?"; ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($_POST["name"])) : ?>
                <p class="form-section">
                    <!-- Print if input field is not empty -->
                    <?= welcomeMessage($inputName); ?>
                    <!-- Execute if input field got data -->
                    <?php
                    $_SESSION["quoteOne"] = echoGreetingOne($inputName);
                    // $_SESSION["quoteTwo"] = echoGreetingTwo($inputName); // Inactivated
                    ?>
                </p>
                <form action="page2.php" method="post">
                    <button class="form-section input-btn" type="submit" name="next">LIGHT THAT FIRE!</button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</main>

<?php include "footer.php"; ?>