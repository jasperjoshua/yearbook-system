<?php



error_reporting(E_ERROR);

require_once 'config.php';
$_POST['batch'] = $_GET['batch'];

$_POST['logged'] = array(
    'User_Key' => 0,
    'User_Type' => 'admin',
    'First_Name' => 'Admin',
);

require_once 'init.php';  

//print "<pre>"; print_r($_POST['students']);
//exit; 

# Yearbook View
$yearbook = array();
$yearbook['cover_pic'] = YBOOK_IMG_DIR.'/'.$_POST['batch'].'/ybook_cover.png';
$yearbook['graduates'] = getStudentsByPage($_POST['students']);
$_POST['cover_pics'] = array();
foreach ($yearbook['graduates'] as $course => $graduates) {
    $_POST['cover_pics'][$course] = YBOOK_IMG_DIR.'/'.$_POST['batch'].'/'.$course.'_cover.jpg';
}
//print "<pre>";print_r($yearbook['graduates']);
//exit;

$yearbook['before_graduates'] = array(
    'Vision, Mission, Goals',
    'Board of Regents',
    'BISU System Officials',
    'Balilihan Administrative & Supervisory Staff',
);
$yearbook['after_graduates'] = array(
    'School Events',
    'BISU Hymn',
    'Graduation Song',
    'Tribute Song',
    'Batch Officers',
);

$_POST['yb'] = $yearbook;
require_once 'views/ui_ybook.php';

?>