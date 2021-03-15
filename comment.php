<?php
include_once __DIR__ . "./includes/dbfunctions.php";
include_once __DIR__ . "./includes/dbconnection.php";
if (isset($_POST['fullname'])) {
    $name = sanitizeString($_POST['fullname']);
    $comment = sanitizeString($_POST['comment']);

    add($pdo, 'comments', [
        "name" => $name,
        "comment" => $comment,
        "date" => new DateTime(),
    ]);
    // ob_start();
    // echo <<<_END
    // <p>$name has done the following comment</p>
    // "<blockquote>$comment</blockquote>
    // _END;

    // $displayComment = ob_get_clean();
    header("location:index.php");
}
