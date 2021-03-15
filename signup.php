di<?php
if ($_GET['sign'] === "up") {
    if (filter_has_var(INPUT_POST, "firstName") && !empty($_POST['firstName'])) {
        try {
            include_once __DIR__ . "./includes/dbfunctions.php";
            include_once __DIR__ . "./includes/dbconnection.php";
            include_once __DIR__ . "./classes/DatabaseTables.php";

            $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
            $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
            $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'passw', FILTER_SANITIZE_STRING);
            $password = password_hash($password, PASSWORD_DEFAULT);

            $dataConnection = new DatabaseTables($pdo, $_POST['member']);

            $parameters = [
                'fullname' => $firstName . " " . $lastName,
                'user' => $user,
                'password' => $password,
            ];
            $dataConnection->add($parameters);
            // add($pdo, 'students', []);

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
        } catch (PDOexception $e) {

        }

    } else {
        ob_start();

        include_once __DIR__ . "./templates/signup.html.php";

        $content = ob_get_clean();
    }

} else {
    $content = "you are trying to sign in";
}
include_once __DIR__ . "./templates/layout.html.php";
