<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


error_reporting(E_ERROR);

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = 'guest';
}


$_POST['ybook_lists'] = array();
require_once 'config.php';
require_once 'helper.php';


function logout()
{
    unset($_SESSION['logged']);
    $_SESSION['logged'] = 'guest';
    require_once 'views/ui_home.php';
    exit;

}

# Logout
if (isset($_GET['menu']) && $_GET['menu'] == 'logout') {
    logout();
}

$_POST['ybook_lists'] = array();
# Login
if (isset($_GET['menu']) && $_GET['menu'] == 'login') {
    if (isset($_POST['login']) && $_POST['login'] == 'submit') {
        $valid = false;
        if (isset($_POST['username']) && $_POST['username'] !== '' && isset($_POST['password']) && $_POST['password'] !== '') {
            if ($_POST['username'] != ADMIN_USERNAME && $_POST['password'] != ADMIN_PASSWORD) {
                # Incorrect username
                $_POST['danger'] = "Incorrect Username and Password.";
            } elseif ($_POST['username'] != ADMIN_USERNAME) {
                # Incorrect username
                $_POST['danger'] = "Incorrect Username.";
            } elseif ($_POST['password'] != ADMIN_PASSWORD) {
                # Incorrect password
                $_POST['danger'] = "Incorrect Password.";
            } else {
                # Valid admin login
                $_SESSION['logged'] = 'admin';
            }
        } else {
            $_POST['danger'] = "Invalid Login.";
            require_once 'views/login.php';
            exit;
        }
    } else {
        require_once 'views/login.php';
        exit;
    }
}

# About - Vision, Mission, Goals
if (isset($_GET['menu']) && $_GET['menu'] == 'about') {
    require_once 'views/ui_home.php';

# BISU Hymn
} elseif (isset($_GET['menu']) && $_GET['menu'] == 'bisu-hymn') {
    require_once 'views/ui_home.php';

# Yearbook online view
} elseif (isset($_GET['menu']) && $_GET['menu'] == 'ybook') {
    $_POST['batch'] = $_GET['batch'];
    require_once 'init.php';
    require_once 'views/ui_ybook_online.php';

# Home
} else {
    require_once 'views/ui_home.php';
}

?>