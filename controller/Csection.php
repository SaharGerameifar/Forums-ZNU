<?php
require_once 'admin/model/Msection.php';
require_once 'admin/model/Mteachers.php';
$section = new section();
$teachers = new teachers();
$section_list=$section->section_list();
$teachers_list=$teachers->teachers_list();
require_once "view/$controller/$action.php";
?>