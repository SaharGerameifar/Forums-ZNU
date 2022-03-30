<?php
require_once 'model/Msection.php';
$section = new section();
switch ($action) {
    case 'list':
        $section = $section->section_list();
        break;
    case 'show':
        $id = $_GET['id'];
        $section = $section->section_show($id);
        break;
    
    case 'delete':
        $id = $_GET['id'];
        $section->section_delete($id);
        header("location:index.php?c=section&a=list");
        break;
  
    case 'add':
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $section->section_add($data);
            header("location:index.php?c=section&a=list");
        }
        break;
    
    case 'edit':
        $id = $_GET['id'];
        $result = $section->section_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $section->section_edit($data, $id);
            header("location:index.php?c=section&a=list");
        }
        break;
}


require_once "view/$controller/$action.php";
