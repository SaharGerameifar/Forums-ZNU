<?php
require_once 'admin/model/Mpaper.php';
require_once 'admin/model/Mcourse.php';
$course=new course();
$paper=new paper();
$paper_list=$paper->enable_limit_paper_list();
$course_list=$course->enable_limit_course_list();

require_once 'view/index/index.php';?>