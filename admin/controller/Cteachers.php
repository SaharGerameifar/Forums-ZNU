<?php
require_once 'model/Mteachers.php';
$teachers = new teachers();
switch ($action) {
    case 'list':
        $results = $teachers->teachers_list();
        $section_list = $teachers->section_list();
        break;
    case 'show':
        $id = $_GET['id'];
        $results = $teachers->teachers_show($id);
        $section_list = $teachers->section_list();
        break;
    
    case 'delete':
        $id = $_GET['id'];
        $result = $teachers->teachers_show($id);
        $img_add = $result['image'];
        $teachers->teachers_delete($id);
        unlink($img_add);
        header("location:index.php?c=teachers&a=list");
        break;
  
    case 'add':
        $section_list = $teachers->section_list();
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $uploadepath = '../public/admin/image/';
            $prename = "teacher-" . rand();
            $image = $teachers->uploader("image", $uploadepath, $prename);
            $data['image'] = $image;
            $teachers->teachers_add($data);
            header("location:index.php?c=teachers&a=list");
        }
        break;
    
    case 'edit':
        $id = $_GET['id'];
        $result = $teachers->teachers_show($id);
        $section_list = $teachers->section_list();
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($_FILES['image']['name'])) {
                $uploadepath = '../public/admin/image/';
                $prename = "teacher-" . rand();
                $image = $teachers->uploader("image", $uploadepath, $prename);
                $data['image'] = $image;
                unlink($result['image']);
            } else {
                $data['image'] = $result['image'];
            }
            $teachers->teachers_edit($data, $id);
            header("location:index.php?c=teachers&a=list");
        }
        break;
}


require_once "view/$controller/$action.php";
