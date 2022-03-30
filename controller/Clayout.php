<?php
require_once 'admin/model/Mmenu.php';
require_once 'admin/model/Msetting.php';
require_once 'admin/model/Mpaper.php';
require_once 'admin/model/Mcourse.php';
require_once 'admin/model/Muser.php';
$course=new course();
$paper=new paper();
$menu = new menu();
$setting = new setting();
$user = new user();
$menu_list=$menu->enable_menu_list();
$settings = $setting->setting_show();
$paper_results=$paper->enable_count_paper_list();
foreach($paper_results as $paper_counts){}
$course_results=$course->enable_count_course_list();
foreach($course_results as $course_counts){}
$user_results=$user->enable_count_writer_list();
foreach($user_results as $user_counts){}
?>