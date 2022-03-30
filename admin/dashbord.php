<?php
ob_start();
session_start();
include_once 'view/dlayout/header.php';
include_once '../public/include/jdf.php';
include_once '../public/include/config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 0) {
    header("location:http://znu/index.php?c=user&a=login");
}

?>

    <!-- end header  -->
    <!-- start main content -->
    <section class="main-content m-5">
        <div class="container">
        <?php
        $controller = @$_GET['c'] ? $_GET['c'] : 'dashbord';
        $action = @$_GET['a'] ? $_GET['a'] : 'dashbord';
        if (file_exists('controller/d' . $controller . '.php')) {
            require_once 'controller/d' . $controller . '.php';
        } ?>
        </div>
    </section>
    <!-- end main content -->
    <?php
include_once 'view/dlayout/footer.php';

?>    