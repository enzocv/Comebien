<?php

session_start();

if ($_SESSION["autentificado"] != "SI") {
    header("Location: principal.php");
    exit();
}

