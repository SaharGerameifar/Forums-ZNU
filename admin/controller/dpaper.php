<?php
require_once 'model/Mpaper.php';
$paper = new paper();
switch ($action) {
    case 'mylist':
        $user_id = $_SESSION['user_id'];
        $paper = $paper->my_paper_list($user_id);
        break;
    case 'add':
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $uploadepath = '../public/paper_images/';
            $prename = "paper-" . rand();
            $image = $paper->uploader("image", $uploadepath, $prename);
            $data['image'] = $image;
            $data['name'] = $_SESSION['name'];
            $data['user_id'] = $_SESSION['user_id'];
            $paper->paper_add($data);
            header("location:dashbord.php?c=paper&a=mylist");
        }

        break;
    case 'mydelete':
        $id = $_GET['id'];
        $result = $paper->my_paper_show($id);
        $img_add = $result['image'];
        $paper->my_paper_delete($id);
        unlink($img_add);
        header("location:dashbord.php?c=paper&a=mylist");
        break;
    case 'myshow':
        $id = $_GET['id'];
        $paper = $paper->my_paper_show($id);
        break;
    case 'myedit':
        $id = $_GET['id'];
        $result = $paper->my_paper_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($_FILES['image']['name'])) {
                $uploadepath = '../public/paper_images/';
                $prename = "paper-" . rand();
                $image = $paper->uploader("image", $uploadepath, $prename);
                $data['image'] = $image;
                unlink($result['image']);
            } else {
                $data['image'] = $result['image'];
            }
            $paper->my_paper_edit($data, $id);
            header("location:dashbord.php?c=paper&a=mylist");
        }
        break;
    case 'mycomment':
        $id = $_GET['id'];
        $comments = $paper->comment_show_insite($id);
        break;
    case 'replycomment':
        if (isset($_POST['btn'])) {
            $replyid = $_GET['id'];
            $data = $_POST['frm'];
            $data['reply'] = $replyid;
            $data['comment_date'] = time();
            $data['image'] = rand(1, 9);
            $data['name'] = $_SESSION['name'];
            $data['email'] = "0";
            $data['paper_id'] = "0";
            $paper->comment_add($data);
            header('location:dashbord.php?c=paper&a=mylist');
        }
        break;
}

require_once 'view/d' . $controller . '/' . $action . '.php';
