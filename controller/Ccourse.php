<?php
require_once 'admin/model/Mcourse.php';
$course = new course();
switch ($action) {
  case 'detail':
    $id = $_GET['id'];
    $row = $course->course_show($id);
    $view_course = $row['view_course'] + 1;
    $course->course_view($id, $view_course);
    $result = $course->course_show($id);
    $comments = $course->comment_show_insite($id);
    
    break;
  case 'list':
    $course_list = $course->enable_course_list();
    break;
  case 'add':
    if (isset($_POST['btn'])) {
      $id = $_GET['id'];
      $data = $_POST['frm'];
      $data['course_id'] = $id;
      $data['comment_date'] = time();
      $data['image']=rand(1,9);
      $data['reply']=0;
      $course->comment_add($data);
      header('location:index.php?c=course&a=detail&id='.$id.'&error=no');
    }
    break;
   
}



require_once "view/$controller/$action.php";
