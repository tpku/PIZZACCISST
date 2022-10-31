<?php
include "head.php";
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
?>
<main>
    <p>BYE BYE, ALL PIZZAS HAVE TO GO!</p>
    <form action="index.php" method="post">
        <input type="submit" name="submit" value="COME AGAIN!">
    </form>
</main>

<?php include "footer.php"; ?>