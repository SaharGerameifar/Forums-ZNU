<?php
require_once 'model/Mcourse.php';
$course = new course();
switch ($action) {
    case 'list':
        $course = $course->course_list();
        break;
    case 'show':
        $id = $_GET['id'];
        $course = $course->course_show($id);
        break;

    case 'delete':
        $id = $_GET['id'];
        $result = $course->course_show($id);
        $img_add = $result['image'];
        $course->course_delete($id);
        unlink($img_add);
        header("location:index.php?c=course&a=list");
        break;

    case 'add':
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $uploadepath = '../public/course_images/';
            $prename = "course-" . rand();
            $image = $course->uploader("image", $uploadepath, $prename);
            $data['image'] = $image;
            $course->course_add($data);
            header("location:index.php?c=course&a=list");
        }

        break;

    case 'edit':
        $id = $_GET['id'];
        $result = $course->course_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($_FILES['image']['name'])) {
                $uploadepath = '../public/course_images/';
                $prename = "course-" . rand();
                $image = $course->uploader("image", $uploadepath, $prename);
                $data['image'] = $image;
                unlink($result['image']);
            } else {
                $data['image'] = $result['image'];
            }
            $course->course_edit($data, $id);
            header("location:index.php?c=course&a=list");
        }
        break;
    case 'listcomment':
        $comments = $course->comment_list();
        break;
    case 'showcomment':
        $id = $_GET['id'];
        $comment = $course->comment_show($id);
        break;
    case 'deletecomment':
        $id = $_GET['id'];
        $course->comment_delete($id);
        header("location:index.php?c=course&a=listcomment");
        break;
    case 'editcomment':
        $id = $_GET['id'];
        $result = $course->comment_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $course->comment_edit($data, $id);
            header("location:index.php?c=course&a=listcomment");
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
            $data['course_id'] = "0";
            $course->comment_add($data);
            header('location:index.php?c=course&a=listcomment');
        }
        break;
}


require_once "view/$controller/$action.php";
