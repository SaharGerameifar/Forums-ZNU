<!--main content start-->
<div class="m-5 bg-light p-5">
<b> مشاهده اطلاعات <?php echo  $results['name']; ?></b>
<div class="m-4">
	<div class="my-body-show  d-sm-flex p-0">
		<p class="px-2">نام استاد : </p>
		<p class="px-4"><?php echo $results['name']; ?></p>
	</div>
	<div class="my-body-show d-sm-flex p-0">
		<p class="px-2">ایمیل استاد : </p>
		<p class="px-4"><?php echo $results['email']; ?></p>
	</div>
	<div class="my-body-show d-sm-flex p-0">
		<p class="px-2">آدرس سایت استاد : </p>
		<p class="px-4"><?php echo $results['site']; ?></p>
	</div>
	<div class="my-img-show m-1">
		<p class="px-2">تصویر استاد : </p>
		<img src="<?php echo $results['image']; ?>" style="max-width:20rem; max-height:20rem;" alt="teacher-image" class="img-fluid ">
	</div>
	<div class="form-group row my-5 px-2">
		<label class="form-control-lable col-12 col-md-4 "> گرایش استاد</label>
		<select name="frm[chid]" class="form-control col-12 col-md-8">
			<?php
			foreach ($section_list as $value) {
				if ($results['chid'] == $value['id']) {
					echo "<option value=" . $value['id'] . "selected>" . $value['title'] . "</option>";
				}
			}
			?>
		</select>
	</div>

</div>
</div>
<div>
	<a href="index.php?c=teachers&a=list" class="btn btn-sm btn-danger float-left px-4 py-2 my-5">بازگشت به صفحه قبل</a>
</div>