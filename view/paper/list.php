<!--start paper -->
<section class="latest-paper mt-4 ">
    <div class="container">
        <div class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php">خانه</a> </li>
            <li class="breadcrumb-item active ">مقاله ها</li>
        </div>
        <div class="row ">
            <?php foreach ($paper_list as $paper) :
            ?>
                <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                    <div class="course">
                        <div class="course-item">
                            <a href="index.php?c=paper&a=detail&id=<?php echo  $paper['id']; ?>"> <img src="<?php echo $paper['image']; ?>" alt="paper-image" class="img-fluid course-img"></a>
                            <div class="hover-course "><a href="index.php?c=paper&a=detail&id=<?php echo  $paper['id']; ?>"><span>مشاهده کامل مقاله</span></a></div>
                        </div>
                        <div class="course-caption">
                            <a href="index.php?c=paper&a=detail&id=<?php echo  $paper['id']; ?>" class="course-link"> <?php echo $paper['title']; ?></a>
                            <div><?php echo limit_words($paper['body'], 20) ; ?></div>
                            <span class="seen-caption" title="تعداد بازدیدها"><i class="fas fa-eye fa-fw"></i><?php echo $paper['view_paper']; ?></span>
                            <span class="seen-comment" title="تعداد نظرات"><i class="fas fa-comment fa-fw"></i>
                            <?php
								 $row = new paper();
								 $results = $row->comment_count($paper['id']);
								 foreach($results as $res){} 
								 echo $res;?>
                            </span>
                            <span class="seen-writer" title="نویسنده مقاله"><i class="fas fa-book-reader fa-fw"></i><?php echo $paper['name']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--end paper -->
<br>
<br>
<br>
<!-- contact section -->
<section class="contact py-5 " id="contact">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto col-md-6">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control contact-input p-3" placeholder="پست الکترونیک شما ">
                        <button type="submit" class="btn btn-outline-secondary btn-block contact-btn">عضویت در خبرنامه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->