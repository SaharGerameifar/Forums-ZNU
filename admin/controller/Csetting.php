<?php
require_once 'model/Msetting.php';
$setting = new setting();
switch ($action) {
    case 'edit':
        $result = $setting->setting_show();
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            if (!empty($_FILES['image']['name'])) {
                $uploadepath = '../public/default/image/';
                $prename =  rand();
                $image = $setting->uploader("image", $uploadepath, $prename);
                $data['image'] = $image;
                unlink($result['logo_site']);
            } else {
                $data['image'] = $result['logo_site'];
            }
            $setting->setting_edit($data);
            header("location:index.php");
        }
        break;
}


require_once "view/$controller/$action.php";
