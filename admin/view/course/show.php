<!--main content start-->
<b> مشاهده دوره <?php echo $course['title']; ?></b>

<div class="  mt-4">
	<div class="bg-light ">
		<span>وضعیت نمایش دوره در سایت : </span>
		<?php
		if ($course['show_status'] == 0) {
			echo "
                                    <span class='btn btn-sm btn-danger'> غیر فعال</span>
                                ";
		} elseif ($course['show_status'] == 1) {
			echo "
									<span class='btn btn-sm btn-success'> فعال</span>
					";
		}
		?>
	</div>
	<div class="row d-flex justify-content-around mt-3">
		<div class="my-body-show my-1 mx-2 px-2 py-1">
			<p>تاریخ برگزاری دوره : <?php echo $course['date']; ?></p>
		</div>
		<div class="my-body-show my-1 mx-2  px-2 py-1">
			<p>مدرس دوره : <?php echo $course['teacher']; ?></p>
		</div>
	</div>
	<div class="my-img-show m-1">
		<p>تصویر دوره : </p>
		<img src="<?php echo $course['image']; ?>" alt="course-image" class="img-fluid ">
	</div>
	<div class="my-body-show ">
		<p>توضیحات دوره : </p>
		<div><?php echo $course['body']; ?></div>
	</div>
	<div class="my-body-show ">
		<p>قیمت دوره : </p>
		<?php if ($course['price'] == 0) { ?>
			<p><?php echo 'رایگان'; ?></p>
		<?php } else { ?>
			<p><?php echo number_format($course['price']).' تومان'; ?></p>
		<?php } ?>
	</div>
	<div class="my-body-show ">
		<p>برچسب های دوره : </p>
		<div class="content-tag ">
			<?php if ($course['tags']) {
				$array_tags = explode(",", $course['tags']);
				foreach ($array_tags as $tag) {
			?>
					<span><?php echo $tag; ?></span>
				<?php }
			} else { ?>
				<p><?php echo 'برچسب ندارد.'; ?></p>
			<?php } ?>
		</div>
	</div>
</div>
<div>
	<a href="index.php?c=course&a=list" class="btn btn-sm btn-danger float-left px-4 py-2 my-5">بازگشت به صفحه قبل</a>
</div>