<?php
include "head.php";
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
?>
<main>
    <div class="form-container">
        <p class="form-section">BYE BYE, ALL PIZZAS HAVE TO GO!</p>
        <form action="index.php" method="post">
            <input class="form-section input-btn" type="submit" name="submit" value="COME AGAIN!">
        </form>
    </div>
</main>

<footer>
    <p class="footer-p">PIZZACCISST by TPKU &trade; 2022</p>
</footer>
</body>

</html>