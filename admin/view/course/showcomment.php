<!--main content start-->
<b> مشاهده دیدگاه <?php echo $comment['name']; ?></b>

<div class="  mt-4">
	<div class="bg-light ">
		<span>وضعیت نمایش دیدگاه در سایت : </span>
		<?php
		if ($comment['show_status'] == 0) {
			echo "
                                    <span class='btn btn-sm btn-danger'> غیر فعال</span>
                                ";
		} elseif ($comment['show_status'] == 1) {
			echo "
									<span class='btn btn-sm btn-success'> فعال</span>
					";
		}
		?>
	</div>
	<div class="row d-flex justify-content-around mt-3">
		<div class="my-body-show my-1 mx-2 px-2 py-1">
			<p>تاریخ ارسال دیدگاه : <?php echo jdate(" Y/m/d ", $comment['comment_date']); ?> </p>
		</div>
		<div class="my-body-show my-1 mx-2  px-2 py-1">
			<p>ایمیل ارسال کننده : <?php echo $comment['email']; ?></p>
		</div>
	</div>
	<div class="my-body-show ">
		<p>توضیحات دیدگاه : </p>
		<div><?php echo $comment['body']; ?></div>
	</div>
	<div class="my-body-show ">
		<p> دیدگاه مرتبط به دوره :</p>
		<div>
			<?php
			$row = $course->comment_list_course($comment['course_id']);
			echo $row['title']; ?>
		</div>
	</div>
	<div class="my-body-show ">
		<?php
		$results = $course->comment_reply($comment['id']);
		if ($results) {
			echo ' <p>پاسخ ها به این دیدگاه :</p>';
		}
		foreach ($results as $result) : ?>
			<div class="m-4">
				<p class=" badge-secondary p-3">نام پاسخ دهنده: <?php echo $result['name']; ?> <a href="index.php?c=course&a=deletecomment&id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger float-left">حذف </a></p>
				<hr>
				<?php echo $result['body']; ?>
			</div>
		<?php endforeach; ?>
	</div>

</div>

<div>
	<a href="index.php?c=course&a=listcomment" class="btn btn-sm btn-danger float-left px-4 py-2 my-5">بازگشت به صفحه قبل</a>
</div>