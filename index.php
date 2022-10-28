<?php
include "head.php";
include "functions.php";
include "arrays.php";
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST["name"])) {
    // check if input field got data
    $_SESSION["name"] = htmlspecialchars($_POST["name"]); // set value to session variable
    $_SESSION["name"] = strtoupper($_SESSION["name"]); // S
    // $inputName = $_SESSION["name"];
    // if (empty($_SESSION["name"])) {
    //     // print if field is empty
    //     echo "HEY, WHO?";
    // } else {
    //     // else print variable
    //     // echo $_SESSION["name"];
    // }
}


// session_destroy();
?>
<header>
    <p>THIS IS THE FIRST PAGE!</p>
</header>
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
                <?= "HEY, WHO?"; ?>
            </p>
        <?php endif; ?>
        <?php if (!empty($_POST["name"])) : ?>
            <p>
                <?= welcomeMessage($_SESSION["name"]); ?>
            </p>
        <?php endif; ?>
    </div>
</main>

<?php include "footer.php"; ?>