<?php
include "head.php";
include "functions.php";
include "arrays.php";
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST["name"])) {
    $_SESSION["name"] = htmlspecialchars($_POST["name"]);
    $inputName = strtoupper($_SESSION["name"]);
}
?>
<!-- Html Section -->
<main>
    <p>HEY,</p>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="name"></label>
        <input type="text" name="name" placeholder="WHO ARE YOU?">
        <br>
        <input type="submit" name="submit" value="SHOW ME!">
    </form>
    <div>
        <?php if (empty($_POST["name"])) : ?>
            <p>
                <!-- Print if input field is empty -->
                <?= "HEY, WHO?"; ?>
            </p>
        <?php endif; ?>
        <?php if (!empty($_POST["name"])) : ?>
            <p>
                <!-- Print if input field got data -->
                <?= welcomeMessage($inputName); ?>
                <!-- Execute if input field got data -->
                <?php
                $_SESSION["quoteOne"] = echoGreetingOne($inputName);
                $_SESSION["quoteTwo"] = echoGreetingTwo($inputName);
                ?>

            </p>
            <form action="page2.php" method="post">
                <button type="submit" name="next">SPIN THAT SH*T!</button>
            </form>
        <?php endif; ?>
    </div>
</main>

<?php include "footer.php"; ?>