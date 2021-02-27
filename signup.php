di<?php
if ($_GET['sign'] === "up") {
    if (filter_has_var(INPUT_POST, "fullName")) {
        try {
            include_once __DIR__ . "./includes/dbfunctions.php";
            include_once __DIR__ . "./includes/dbconnection.php";

        } catch (PDOexception $e) {

        }
        $content = <<<_END
        <div class="row row-cols-1">
            <p class="">
                You have succesfylly Sign Up
            </div>
            <p class="">
                Welcome to Our academy
            </p>
            <p class="">
                Now you may go and sign in or go back
            </p>
        </div>
        <div class="row>
            <a href="signup.php?sign=in" class="col-3 btn btn-primary">
            Sign In
            </a>
            <a href="index.php" class="col-3 offset-3 btn btn-info">
            Home
            </a>
        </div>

        _END;
    } else {
        ob_start();

        include_once __DIR__ . "./templates/signup.html.php";

        $content = ob_get_clean();
    }

} else {
    $content = "you are trying to sign in";
}
include_once __DIR__ . "./templates/layout.html.php";
