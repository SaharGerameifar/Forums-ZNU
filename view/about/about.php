    <!-- start content section -->
    <section class="content my-5 ">
        <div class="container ">
        <div class="breadcrumb">
			<li class="breadcrumb-item "><a href="index.php">خانه</a> </li>
			<li class="breadcrumb-item active "> درباره ما </li>
		</div>
        <b class="about-title"> درباره انجمن</b>
        <p class="about-text"> <?php echo $settings['about_znu']; ?></p>
        <hr>
            <b class="about-title">اعضای انجمن</b>
            <div class="row d-flex teams">
                <?php foreach($about_list as $vals): ?>
                <div class="col-12 col-md-6 col-lg-4 team-item mb-3">
                    <div class="item-img">
                        <img src="<?php echo $vals['image']; ?>" alt="profile-anjoman" class="img-fluid team-img">
                        <div class="hover-item ">
                            <h5><?php echo $vals['name']; ?></h5>
                            <p><?php echo $vals['user_role']; ?> </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </section>
    <!-- end content section -->

