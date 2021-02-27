<?php
$pdo = new PDO("mysql:host=localhost;dbname=cambridge;charset=utf8",
    "lexx", "hitsugaya54");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
