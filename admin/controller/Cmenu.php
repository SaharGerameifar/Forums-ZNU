<?php
require_once 'model/Mmenu.php';
$menu = new menu();
switch ($action) {
    case 'list':
        $submenu = $menu->sub_menu();
        $menulist = $menu->menu_list();
        break;

    case 'delete':
        $id = $_GET['id'];
        $menu->menu_delete($id);
        header("location:index.php?c=menu&a=list");
        break;

    case 'add':
        $submenu = $menu->sub_menu();
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $menu->menu_add($data);
            header("location:index.php?c=menu&a=list");
        }
        break;

    case 'edit':
        $id = $_GET['id'];
        $submenu = $menu->sub_menu_edit($id);
        $result = $menu->menu_show($id);
        if (isset($_POST['btn'])) {
            $data = $_POST['frm'];
            $menu->menu_edit($data, $id);
            header("location:index.php?c=menu&a=list");
        }
        break;
}


require_once "view/$controller/$action.php";
