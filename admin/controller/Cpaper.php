<?php
require_once 'model/Mpaper.php';
$paper = new paper();
switch ($action) {
    case 'list':
        $paper = $paper->paper_list();
        break;
    case 'show':
        $id = $_GET['id'];
        $paper = $paper->paper_show($id);
        break;
    case 'edit':
        $id = $_GET['id'];

        $result = $paper->paper_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if ($data['rb'] == 1) {
                $lock = '1';
                $data['date'] = time();
            } else {
                $lock = '0';
                $data['date'] = 0;
            }
            $paper->paper_edit($data, $id, $lock);
            header("location:index.php?c=paper&a=list");
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $result = $paper->paper_show($id);
        $img_add = $result['image'];
        $paper->paper_delete($id);
        unlink($img_add);
        header("location:index.php?c=paper&a=list");
        break;
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
            header("location:index.php?c=paper&a=mylist");
        }

        break;
    case 'mydelete':
        $id = $_GET['id'];
        $result = $paper->my_paper_show($id);
        $img_add = $result['image'];
        $paper->my_paper_delete($id);
        unlink($img_add);
        header("location:index.php?c=paper&a=mylist");
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
            header("location:index.php?c=paper&a=mylist");
        }
        break;
    case 'listcomment':
        $comments = $paper->comment_list();
        break;
    case 'deletecomment':
        $id = $_GET['id'];
        $paper->comment_delete($id);
        header("location:index.php?c=paper&a=listcomment");
        break;
    case 'editcomment':
        $id = $_GET['id'];
        $result = $paper->comment_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $paper->comment_edit($data, $id);
            header("location:index.php?c=paper&a=listcomment");
        }
        break;
        case 'addreply':
            if (isset($_POST['btn'])) {
                $replyid = $_GET['id'];
                $data = $_POST['frm'];
                $data['reply'] = $replyid;
                $data['comment_date'] = time();
                $data['image'] = rand(1,9);
                $data['name'] = $_SESSION['name'];
                $data['email'] = "0";
                $data['paper_id'] = "0";
                $paper->comment_add($data);
                header('location:index.php?c=paper&a=listcomment');
            }
            break; 
            case 'showcomment':
                $id = $_GET['id'];
                $comment = $paper->comment_show($id);
                break;       
}


require_once "view/$controller/$action.php";
