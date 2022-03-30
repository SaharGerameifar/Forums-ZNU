<?php
require_once 'model/Mabout.php';
$about = new about();
switch ($action) {
    case 'list':
        $about = $about->about_list();
        break;
       
    case 'delete':
        $id = $_GET['id'];
        $result = $about->about_show($id);
        $img_add = $result['image'];
        $about->about_delete($id);
        unlink($img_add);
        header("location:index.php?c=about&a=list");
        break;
  
    case 'add':
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $uploadepath = '../public/about_images/';
            $prename = "about-" . rand();
            $image = $about->uploader("image", $uploadepath, $prename);
            $data['image'] = $image;
            $about->about_add($data);
            header("location:index.php?c=about&a=list");
        }

        break;
    
    case 'edit':
        $id = $_GET['id'];
        $result = $about->about_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($_FILES['image']['name'])) {
                $uploadepath = '../public/about_images/';
                $prename = "about-" . rand();
                $image = $about->uploader("image", $uploadepath, $prename);
                $data['image'] = $image;
                unlink($result['image']);
            } else {
                $data['image'] = $result['image'];
            }
            $about->about_edit($data, $id);
            header("location:index.php?c=about&a=list");
        }
        break;
         
}


require_once "view/$controller/$action.php";
