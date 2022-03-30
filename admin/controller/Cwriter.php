<?php
require_once 'model/Muser.php';
$writer = new user();
switch ($action) {
    case 'list':
        @$error = $_GET['error'];
        if ($error == 'yes') {
            echo '<p>امکان تغییر سطح برای نویسنده غیر فعال شده وجود ندارد.</p>';
        }
        $id = $_SESSION['user_id'];
        $result = $writer->select_verifyuser($id);
        $level = $result['level'];
        $writer = $writer->all_writer_list($level);
        break;
    case 'changelevel':

        $id = $_GET['id'];
        $result = $writer->select_verifyuser($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if ($result['verifyAdmin'] == 1) {
                $writer->writer_level_edit($data, $id);
                header("location:index.php?c=writer&a=list");
            } else {
                header("location:index.php?c=writer&a=list&error=yes");
            }
        }
        break;
    case 'edit':
        $id = $_GET['id'];
        $result =  $writer->select_verifyuser($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $writer->writer_edit($data, $id);
            header("location:index.php?c=writer&a=list");
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $writer->writer_delete( $id);
        header("location:index.php?c=writer&a=list");
        break;
}


require_once "view/$controller/$action.php";
