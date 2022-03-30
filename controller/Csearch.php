<?php
require_once 'admin/model/Mcourse.php';
require_once 'admin/model/Mpaper.php';
$paper=new paper();
$course=new course();
if($_POST){
    $search_content = $_POST['search_content'];
    $course_list=$course->enable_course_list_search($search_content);
    $paper_list=$paper->enable_paper_list_search($search_content);
   
}



require_once 'view/search/search.php';
