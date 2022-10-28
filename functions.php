<?php

declare(strict_types=1);
if (!isset($_SESSION)) {
    session_start();
}

include "arrays.php";

function welcomeMessage(
    string $name,
    string $greeting = "CIAO BELLA, ",
    string $ending = " TIME TO MOVE ON!, "
) {
    echo "$greeting $name. $ending";
}
