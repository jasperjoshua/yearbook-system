<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    

    error_reporting(E_ERROR);

    require_once 'config.php';
    require_once 'helper.php';

    if (!isset($_GET['m'])) {
        $_GET['m'] = 'home';
    }

    include_once 'models/sql_upload.php';
    $sql = new SQL_Upload; 
    include_once 'models/sql_ybook_themes.php';
    $theme = new SQL_Ybook_Themes; 

    $_POST['themes'] = $theme->getThemeList();
    //print "<pre>"; print_r($_SESSION); exit;
    $ybook_dir = YBOOK_IMG_DIR.'/'.$_SESSION['batch'];
    $_POST['ybook'] = array(
        'batch' => $_SESSION['batch'],
        'theme' => $_SESSION['theme']['name'],
        'dir' => $ybook_dir,
        'images' => getImagesFromDir($ybook_dir),
    );
    //print "<pre>"; print_r($_POST); exit;
    require_once 'views/ui_draft_theme.php';
    
?>