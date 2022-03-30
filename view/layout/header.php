<?php $search_content=@$_POST['search_content']?$_POST['search_content']:null; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $settings['title_site']; ?></title>
    <!-- sweetalert css -->
    <link rel="stylesheet" href="public/default/css/sweet-alert.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="public/default/css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="public/default/css/style.css">
    <!-- font awesome -->
    <script src="public/default/js/all.js"></script>
    <!--ckeditor -->
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
    <!--start preloder -->
    <div class="preloader d-flex justify-content-center align-items-center">
        <img src="public/default/image/preloader.gif" alt="preloder">
        <div class="  justify-content-center">
            <p>صفحه در حال بار گذاری است.</p>
            <p>لطفا صبر کنید.</p>
        </div>

    </div>
    <!--end preloder -->
    <!-- start header  -->
    <header class="bg-dark pb-lg-5">
        <div class="container">
            <!--start navbar element  -->
            <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-lg-5" id="top_nav">
                <a class="navbar-brand" href="#"><?php echo $settings['title_site']; ?> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php foreach ($menu_list as $val) :
                            $rows = $menu->enable_submenu_list($val['id']);
                            if ($rows) {
                        ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo $val['url']; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $val['title']; ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <?php foreach ($rows as $row) : ?>
                                            <a class="dropdown-item" href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?> </a>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item ">
                                    <a class="nav-link " href=" <?php echo $val['url']; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $val['title']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="mr-5">
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            echo '<span class= "mx-2 header-login my-2">' . $_SESSION['name'] . ' عزیز خوش آمدی</span> ';
                            ?><div> <?php if($_SESSION['role']){ 
                                echo " <a class=' btn btn-warning btn-sm header-login-link my-2' href='admin/index.php' >پنل کاربری من</a>";
                            }else {
                                echo " <a class=' btn btn-warning btn-sm header-login-link my-2' href='admin/dashbord.php' >پنل کاربری من</a>";
                            }
                            echo " <a class=' btn btn-warning btn-sm header-login-link my-2' href='index.php?c=user&a=logout' >خروج</a>";
                            ?></div>
                        <?php } else {
                            echo "<a class='btn btn-warning btn-sm header-login-link' href='index.php?c=user&a=login'>ورود</a> ";
                            echo "<a class='btn btn-warning btn-sm header-login-link' href='index.php?c=user&a=register' >ثبت نام</a>";
                        }
                        ?>
                    </div>
                </div>


            </nav>
            <!--end navbar element  -->
            <!--start animation background  -->
            <div class="row justify-content-center">
                <div class="col-4  w-50 h-50"><img src="public/default/image/bg.gif" alt="animation-background" class="img-fluid"></div>
            </div>
            <!--start search box  -->
            <div class="pt-lg-1 pb-5 pt-0 mt-lg-1 mt-0">
                <form class="form-inline my-2 my-lg-0 mr-auto justify-content-center" method="POST" action="index.php?c=search">
                    <input class="form-control mr-sm-2 placholder search-box" type="search" placeholder="دنبال چی میگردی؟" aria-label="Search" name="search_content" value="<?php echo $search_content;?>" >
                    <button class="search-icon btn" type="submit"><i class="fas fa-search fa-fw"></i></button>
                </form>
            </div>
            <!--start info site  -->
            <div>
                <div class="row justify-content-center mb-4">
                    <div class="col-4 info-site "><a href="#" class="info-icon"> <i class="fas fa-newspaper fa-fw"></i></a>
                        <div class="row d-flex justify-content-center">
                            <p> تعداد مقالات </p>
                            <p class="px-1"> <?php echo $paper_counts; ?> </p>
                        </div>
                    </div>
                    <div class="col-4 info-site"><a href="#" class="info-icon"> <i class="fas fa-book-reader fa-fw"></i></a>
                        <div class="row d-flex justify-content-center">
                            <p>تعداد نویسنده ها</p>
                            <p class="px-1"> <?php echo $user_counts; ?> </p>
                        </div>
                    </div>
                    <div class="col-4 info-site "><a href="#" class="info-icon"> <i class="fas fa-film fa-fw"></i></a>
                        <div class="row d-flex justify-content-center">
                            <p>تعداد دوره ها</p>
                            <p class="px-1"> <?php echo $course_counts; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end info site  -->

        </div>
    </header>
    <!-- end header  -->