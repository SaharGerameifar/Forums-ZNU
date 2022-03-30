<!--start course -->
<section class="latest-course mt-4 ">
	<div class="container">
		<div class="breadcrumb">
			<li class="breadcrumb-item "><a href="index.php">خانه</a> </li>
			<li class="breadcrumb-item active ">نتایج جستجو برای : <?php echo $search_content; ?> </li>
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
						<div class="course-caption">
							<a href="index.php?c=course&a=detail&id=<?php echo  $course['id']; ?>" class="course-link"><?php echo $course['title']; ?> </a>
							<div><?php echo limit_words($course['body'], 20) ; ?></div>
							<span class="seen-caption" title="تعداد بازدیدها"><i class="fas fa-eye fa-fw"></i><?php echo $course['view_course']; ?></span>
							<span class="seen-comment" title="تعداد نظرات"><i class="fas fa-comment fa-fw"></i>15</span>
							<span class="seen-writer" title="مدرس دوره"><i class="fas fa-book-reader fa-fw"></i><?php echo $course['teacher']; ?></span>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--end course -->

<!--start paper -->
<section class="latest-paper mt-4 ">
    <div class="container">
       
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
                            <span class="seen-comment" title="تعداد نظرات"><i class="fas fa-comment fa-fw"></i>15</span>
                            <span class="seen-writer" title="نویسنده مقاله"><i class="fas fa-book-reader fa-fw"></i><?php echo $paper['name']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--end paper -->
<?php 
 if($course_list== null && $paper_list == null){
	echo "<div class=' m-5 alert alert-info alert-dismissible fade show'>
   نتیجه ای برای این جستجو یافت نشد.
	 
	 </div>";
}
?>
<br>
<br>
<br>