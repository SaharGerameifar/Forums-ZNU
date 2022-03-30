<?php
require_once 'model/Muser.php';
$person = new user();
switch ($action) {
    case 'edit':
        $id = $_SESSION['user_id'];
        $result = $person->person_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $person->person_edit($data, $id);
            header("location:index.php");
        }
        break;
    case 'changepass':
        @$error = $_GET['error'];
        if ($error == 'yes') {
            echo 'error is :((';
        }
        
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if ($data['password'] == $data['repassword']) {
                $password = sha1($data['password']);
                $id = $_SESSION['user_id'];
                $person->change_password($password, $id);
                header("location:index.php");
            } else {
                header("location:index.php?c=person&a=changepass&error=yes");
            }
        }
        break;
}


require_once "view/$controller/$action.php";
