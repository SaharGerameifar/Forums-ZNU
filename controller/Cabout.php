<?php
require_once 'admin/model/Mabout.php';
$about = new about();
$about_list=$about->about_list();
require_once "view/$controller/$action.php";
?>