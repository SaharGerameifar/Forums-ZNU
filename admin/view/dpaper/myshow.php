<!--main content start-->
<b> مشاهده مقاله <?php echo $paper['title']; ?></b>
<div class="  mt-4">
	<div class="bg-light">
		<span>وضعیت مقاله : </span>
		<?php
		if ($paper['status'] == 0) {
			echo "
                                    <span class='btn btn-sm btn-danger'>غیر فعال</span>
                                ";
		} else {
			echo "
                                    <span class='btn btn-sm btn-success'> فعال</span>
                                ";
		}
		?>
	</div>
	<div class="bg-light">
		<span>وضعیت نمایش مقاله در سایت  : </span>
		<?php
		if ($paper['show_status'] == 0) {
			echo "
                                    <span class='btn btn-sm btn-danger'>بررسی نشده </span>
                                ";
		} elseif ($paper['show_status'] == 1) {
			echo "
                                    <span class='btn btn-sm btn-success'> فعال</span>
                                ";
		} elseif ($paper['show_status'] == 2) {
			echo "
									<span class='btn btn-sm btn-warning'>  غیر قابل پذیرش</span>
                                ";
		}
		?>
	</div>
	<div class="my-img-show m-4">
	<p>تصویر مقاله : </p>
		<img src="<?php echo $paper['image']; ?>" alt="paper-image" class="img-fluid ">
	</div>
	<div class="my-body-show ">
	<p>توضیحات مقاله : </p>
		<div class="px-5"><?php echo $paper['body']; ?></div>
	</div>
	<div class="my-body-show ">
		<p>برچسب های مقاله : </p>
		<div class="content-tag ">
			<?php if ($paper['tags']) {
				$array_tags = explode(",", $paper['tags']);
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
	<a href="dashbord.php?c=paper&a=mylist" class="btn btn-sm btn-danger float-left px-4 py-2 my-5">بازگشت به صفحه قبل</a>
</div>