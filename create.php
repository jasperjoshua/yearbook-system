<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

error_reporting(E_ERROR);

$_POST['ybook_lists'] = array();
require_once 'config.php';
require_once 'helper.php';

if (!isset($_GET['m'])) {
    $_GET['m'] = 'home';
}

include_once 'models/sql_upload.php';
$sql = new SQL_Upload; 
include_once 'models/sql_ybook_themes.php';
$theme = new SQL_Ybook_Themes; 

if ($_GET['m'] == 'upload') {
    $yearbook_key = 1; // TODO: Save yearbook
    if (isset($_POST['save']) && $_POST['save'] == 'upload') {
        //print "<pre>";
        //print_r($_FILES);
        //print_r($_POST);
        //print_r($_GET);
        //exit;
        # Save Data
        if (isset($_FILES['uploaded_file']) && !empty($_FILES['uploaded_file']['tmp_name'])) {
            $file = $_FILES['uploaded_file']['tmp_name'];
            if (is_file($file)) {
                $list = getCSVFileData($file, "\t");
                //print_r($list);
                foreach ($list as $row) {
                    $row['Yearbook_Key'] = $yearbook_key;
                    if ($_GET['type'] == 'graduates') {
                        $row['Course_Key'] = $sql->getCourseKey($row['Course_Code']);
                    }
                    $created = $sql->addTableData($_GET['type'], array($row));
                }
            }
        }
    }
    $_POST['title'] = $sql->getDataTitle($_GET['type']);
    $_POST['headers'] = $sql->getDataHeaders($_GET['type']);
    $_POST['data'] = $sql->getUploadedData($_GET['type'], $yearbook_key);
    //print "<pre>";
    //print_r($_POST['data']);
    require_once 'views/ui_upload.php';
} else {
    $_POST['themes'] = $theme->getThemeList();
    if (isset($_POST['create']) && $_POST['create'] == 'ybook') {
        //print "<pre>";
        //print_r($_POST); exit;
        $ybook_list = $sql->getYearbookData();
        if (empty($_POST['Batch'])) {
            $_POST['danger'] = "Batch cannot be blank.";
        } elseif (!preg_match('/^\d\d\d\d$/', $_POST['Batch'])) {
            $_POST['danger'] = "Batch should be a 4-digit year.";
        } elseif (isset($ybook_list[$_POST['Batch']])) {
            $_POST['danger'] = "A yearbook for Batch {$_POST['Batch']} already exists.";
        } else {
            $sel_theme = $_POST['themes'][$_POST['Theme']];
            $theme->createYearbookDir($_POST['Batch'], $sel_theme);
            $yearbook = array(
                'Batch' => $_POST['Batch'],
                'Theme' => $_POST['Theme'],
                'Is_Published' => 0,
            );
            $created = $sql->addTableData('yearbooks', array($yearbook));
            $sql->
            $_SESSION['theme'] = $sel_theme;
            $_SESSION['batch'] = $_POST['Batch'];
            header('Location: ./draft.php');
            die();
        }
    } 

    require_once 'views/ui_create.php';
}


?>