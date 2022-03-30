<!-- start content section -->
<section class="content my-5 ">
    <div class="container ">
        <div class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php">خانه</a> </li>
            <li class="breadcrumb-item active ">گرایش ها </li>
        </div>
        <div class=" row">
            <?php foreach ($section_list as $values) : ?>

                <div class=" introduction_section col-12 ">
                    <b class="itroduction-title "><?php echo $values['title']; ?></b>
                    <hr>
                    <div class="itroduction">
                        <p><?php echo $values['body']; ?></p>
                    </div>
                    <hr>
                    <b class="itroduction-teacher"> اعضای هیت علمی </b>
                    <div class="itroduction-teacher">
                        <div class="row d-flex teachers">
                            <?php foreach ($teachers_list as $rows) {
                                if ($rows['chid'] == $values['id']) { ?>
                                    <div class="col-12 col-md-6 col-lg-4 teacher-item mb-3">
                                        <div class="teacher-img">
                                            <img src="<?php echo $rows['image']; ?>" alt="profile-teacher" class="img-fluid teacher-img">
                                            <div class="hover-teacher ">
                                                <h5><?php echo $rows['name']; ?></h5>
                                                <p><?php echo $rows['site']; ?></p>
                                                <p><?php echo $rows['email']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>

                </div>


            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- end content section -->