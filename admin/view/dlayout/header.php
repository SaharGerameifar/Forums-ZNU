<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../public/default/css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="../public/admin/css/style.css">
    <!-- font awesome -->
    <script src="../public/default/js/all.js"></script>
    <title>پنل کاربری</title>
</head>

<body>
    <header class="bg-dark ">
        <div class="container">
            <!--start navbar element  -->
            <nav class="navbar  navbar-light pt-3 pb-lg-3">
                <a class="navbar-brand" href="#"> <?php echo $_SESSION['name']; ?> عزیز به پنل کاربری تان خوش آمدید.</a>
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
                            <a class="dropdown-item" href="http://znu/admin/dashbord.php?c=person&a=edit">ویرایش اطلاعات من </a>
                                <a class="dropdown-item" href="http://znu/admin/dashbord.php?c=person&a=changepass"> تغییر کلمه عبور </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                مدیریت مقالات من
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://znu/admin/dashbord.php?c=paper&a=add">افزودن مقاله جدید </a>
                                <a class="dropdown-item" href="http://znu/admin/dashbord.php?c=paper&a=mylist"> لیست مقالات من</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="http://znu/index.php?c=user&a=logout" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end navbar element  -->
        </div>
    </header>