<!-- start content section -->
<section class="content my-5 ">
	<div class="container ">
		<div class="breadcrumb">
			<li class="breadcrumb-item "><a href="index.php">خانه</a> </li>
			<li class="breadcrumb-item active "> تماس با ما </li>
		</div>
		<b class="contact-title"> تماس با ما</b>
		<hr>
		<div class="row d-flex ">
			<div class="col-12 col-md-6">
				<b class="contact-sub-title mr-3"> اطلاعات تماس</b>
				<a href="<?php echo $settings['link_telegram']; ?>" class="contact-icon mr-3"><i class="fab fa-telegram"></i></a>
				<a href="<?php echo $settings['link_instagram']; ?>" class="contact-icon mr-3"><i class="fab fa-instagram"></i></a>
				<hr class="mx-3">
				<p class="mr-3"><?php echo $settings['address']; ?></p>
				<hr class="mx-3">
			</div>
			<div class="col-12 col-md-6">
				<b class="contact-sub-title mr-3">ارسال پیام</b>
				<form method="POST" action="index.php?c=contact&a=add" >
					<div class="form-group m-3">
						<input type="text" class="form-control  p-3 mt-3" placeholder="  نام شما (الزامی) " required name="frm[name]">
						<input type="email" class="form-control  p-3 mt-3" placeholder="پست الکترونیک شما (الزامی)  " required name="frm[email]">
						<input type="text" class="form-control  p-3 mt-3" placeholder="  موضوع  (الزامی) " required name="frm[title]">
						<textarea class="form-control ckeditor p-3 mt-3"  id="editor1" cols="30" rows="10" required placeholder="پیام خود را وارد کنید.(الزامی)" name="frm[body]"></textarea>
						<script>
							CKEDITOR.replace('frm[body]',{
								language:'fa',
								removeButtons: 'PasterFromWord'
							});
						</script>
						<button type="submit" class="btn btn-success px-3 mt-3 float-left" name="btn">ارسال</button>
					</div>
				</form>
			</div>

		</div>
	</div>
	</div>
</section>
<!-- end content section -->