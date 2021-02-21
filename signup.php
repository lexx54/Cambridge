<?php
if ($_GET['sign'] === "up") {
    ob_start();

    include_once __DIR__ . "./templates/signup.html.php";

    $content = ob_get_clean();

} else {
    $content = "you are trying to sign in";
}
include_once __DIR__ . "./templates/layout.html.php";
