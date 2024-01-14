<?php

error_reporting(0);
if (!isset($_COOKIE['any_user']) || empty($_COOKIE['any_user'])) {
    header('location login.php');
    exit;
}
