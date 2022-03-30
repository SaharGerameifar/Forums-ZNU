<!--start course -->
<section class="latest-course mt-4 ">
    <div class="container">
        <div class=" d-flex justify-content-center">
            <h5><span class="content-title">دوره های</span> انجمن علمی برق</h5>
        </div>
        <div class="row">
            <?php foreach ($course_list as $course) :
            ?>
                <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                    <div class="course">
                        <div class="course-item">
                            <a href="index.php?c=course&a=detail&id=<?php echo  $course['id']; ?>"> <img src="<?php echo $course['image']; ?>" alt="course-image" class="img-fluid course-img"></a>
                            <div class="hover-course "><a href="index.php?c=course&a=detail&id=<?php echo  $course['id']; ?>"><span>مشاهده کامل </span></a></div>
                        </div>
                        <div class="course-caption ">
                            <a href="index.php?c=course&a=detail&id=<?php echo  $course['id']; ?>" class="course-link "><?php echo $course['title']; ?> </a>
                            <div><?php echo limit_words($course['body'], 20) ; ?></div>
                            <span class="seen-caption" title="تعداد بازدیدها"><i class="fas fa-eye fa-fw"></i><?php echo $course['view_course']; ?></span>
                            <span class="seen-comment" title="تعداد نظرات"><i class="fas fa-comment fa-fw"></i>
                            <?php
								 $row = new course();
								 $results = $row->comment_count($course['id']);
								 foreach($results as $res){} 
								 echo $res;?>
                            </span>
                        </span>
                            <span class="seen-writer" title="مدرس دوره"><i class="fas fa-book-reader fa-fw"></i><?php echo $course['teacher']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--end course -->
<br>
<br>
<br>
<div class="d-flex justify-content-center"><a href="index.php?c=course&a=list" class="btn btn-outline-warning px-4 py-3 mx-auto">بیشتر <i class="fas fa-plus fa-fw"></i></a></div>
<br>
<br>
<hr class="w-75">
<!--start paper -->
<section class="latest-paper mt-4 ">
    <div class="container">
        <div class=" d-flex justify-content-center">
        <h5><span class="content-title"> مقالات</span> انجمن علمی برق</h5>
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
                            <div><?php echo limit_words($paper['body'], 20); ?></div>
                            <span class="seen-caption" title="تعداد بازدیدها"><i class="fas fa-eye fa-fw"></i><?php echo $paper['view_paper']; ?></span>
                            <span class="seen-comment" title="تعداد نظرات"><i class="fas fa-comment fa-fw"></i>
                            <?php
								 $row = new paper();
								 $results = $row->comment_count($paper['id']);
								 foreach($results as $res){} 
								 echo $res;?>
                            </span>
                        </span>
                            <span class="seen-writer"title="نویسنده مقاله"><i class="fas fa-book-reader fa-fw"></i><?php echo $paper['name']; ?></span>
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
<div class="d-flex justify-content-center "><a href="index.php?c=paper&a=list" class="btn btn-outline-warning px-4 py-3 mx-auto">بیشتر <i class="fas fa-plus fa-fw"></i></a></div>
<br>
<br>

<!-- contact section -->
<section class="contact py-5" id="contact">
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