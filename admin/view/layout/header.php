<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../public/default/css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="../public/admin/css/style.css">
    <link rel="stylesheet" href="../public/admin/css/persian-datepicker.min.css">
    <!-- font awesome -->
    <script src="../public/default/js/all.js"></script>
    <!--ckeditor -->
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <title>پنل ادمین</title>

</head>

<body>
    <header class="bg-dark ">
        <div class="container">
            <!--start navbar element  -->
            <nav class="navbar  navbar-light pt-3 pb-lg-3">
                <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?> عزیز به پنل کاربری تان خوش آمدید.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-icon">
                        <span>منوها</span> <i class="fas fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                پروفایل من
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=person&a=edit">ویرایش اطلاعات من </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=person&a=changepass"> تغییر کلمه عبور </a>
                            </div>
                        </li>
                        <?php if ($_SESSION['role'] == 2) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    مدیریت منوها
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://znu/admin/index.php?c=menu&a=add">افزودن منوی جدید </a>
                                    <a class="dropdown-item" href="http://znu/admin/index.php?c=menu&a=list"> لیست منوها</a>
                                </div>
                            </li>
                        <?php } ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت نویسندگان
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=writer&a=list"> لیست نویسندگان</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت مقالات
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=paper&a=add">افزودن مقاله جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=paper&a=mylist"> لیست مقالات من</a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=paper&a=list"> لیست همه مقالات</a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=paper&a=listcomment"> دیدگاه ها </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت دوره ها
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=course&a=add">افزودن دوره جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=course&a=list"> لیست دوره ها</a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=course&a=listcomment"> دیدگاه ها </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت اعضا
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=about&a=add">افزودن عضو جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=about&a=list"> لیست اعضا </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت اساتید
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=teachers&a=add">افزودن استاد جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=teachers&a=list"> لیست اساتید </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت گرایش ها
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=section&a=add">افزودن گرایش جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/index.php?c=section&a=list"> لیست گرایش ها </a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="http://znu/admin/index.php?c=contact&a=list" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                تماس با ما
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="http://znu/admin/index.php?c=setting&a=edit" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                تنظیمات
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="http://znu/index.php?c=user&a=logout" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end navbar element  -->
        </div>

    </header>
    <!-- end header  -->