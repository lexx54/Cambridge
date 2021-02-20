<?php
if ($_GET['sign'] === "up") {
    echo "you are trying to sign up";

} else {
    echo "you are trying to sign in";
}
include_once __DIR__ . "./templates/layout.html.php";
