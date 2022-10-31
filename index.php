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


// session_destroy();
?>
<main>
    <p>HEY,</p>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="name"></label>
        <input type="text" name="name" placeholder="WHO ARE YOU?">
        <br>
        <input type="submit" name="submit">
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
                <?php $_SESSION["quote"] = echoGreeting($inputName); ?>

            </p>
        <?php endif; ?>
    </div>
</main>

<?php include "footer.php"; ?>