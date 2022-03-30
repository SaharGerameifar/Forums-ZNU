<?php
ob_start();
session_start();
include_once 'view/layout/header.php';
include_once '../public/include/jdf.php';
include_once '../public/include/config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] == 0 ) {
    header("location:http://znu/index.php?c=user&a=login");
}

?>
<section class="main-content m-5">
    <div class="container">
        <?php
        $controller = @$_GET['c'] ? $_GET['c'] : 'index';
        $action = @$_GET['a'] ? $_GET['a'] : 'index';
        if (file_exists('controller/C' . $controller . '.php')) {
            require_once 'controller/C' . $controller . '.php';
        } ?>
    </div>
</section>
<?php
include_once 'view/layout/footer.php';

?>