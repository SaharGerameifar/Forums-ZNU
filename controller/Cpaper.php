<?php
require_once 'admin/model/Mpaper.php';
$paper=new paper();
switch($action){
    case 'detail':
        $id=$_GET['id'];
        $row=$paper->paper_show($id);
        $view_paper = $row['view_paper'] + 1;
        $paper->paper_view($id, $view_paper); 
        $result=$paper->paper_show($id);
        $comments = $paper->comment_show_insite($id);
    break;    
    case 'list':
        $paper_list=$paper->enable_paper_list();
    break; 
    case 'add':
        if (isset($_POST['btn'])) {
          $id = $_GET['id'];
          $data = $_POST['frm'];
          $data['paper_id'] = $id;
          $data['comment_date'] = time();
          $data['image']=rand(1,9);
          $data['reply']=0;
          $paper->comment_add($data);
          header('location:index.php?c=paper&a=detail&id='.$id.'&error=no');
        }
        break;  
}



require_once "view/$controller/$action.php";
