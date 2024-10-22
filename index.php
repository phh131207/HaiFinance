<?php
    require 'config.php';

    if (empty($_SESSION["id"])) {
        header ("Location: index1.php");
        exit();
    }

    else {
        header ("Location: index2.php");
        exit();
    }