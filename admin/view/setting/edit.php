<!--main content start-->
<b> ویرایش تنظیمات اصلی سایت </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=setting&a=edit" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان سایت </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['title_site']; ?>" name="frm[title_site]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لوگوی سایت </label>
						<div class="col-12 col-md-8">
							<img src="<?php echo $result['logo_site']; ?>" alt="logo-image" class="img-fluid img-thumbnail" style="max-width: 10rem; max-height: 10rem;">
							<div class="input-group w-100">
								<div class="custom-file ">
									<input type="file" class="custom-file-input upload-input " id="2" name="image">
									<label for="2" class="custom-file-label upload-label ">تصویر را آپلود کنید.</label>
								</div>
								<div class="input-group-prepenp">
									<span class="input-group-text">آپلود</span>
								</div>
							</div>
							<small class="form-text text-monospace">حجم تصویر کمتر از 2 Mb باشد. فرمت (jpeg,jpg,png)</small>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک اینستاگرام </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_instagram']; ?>" name="frm[link_instagram]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک تلگرام </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_telegram']; ?>" name="frm[link_telegram]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک دانشگاه زنجان </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_znu']; ?>" name="frm[link_znu]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک وزارت علوم </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_olom']; ?>" name="frm[link_olom]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک کتابخانه مرکزی دانشگاه زنجان </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_library']; ?>" name="frm[link_library]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک سامانه نیما </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_nima']; ?>" name="frm[link_nima]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> لینک سامانه گلستان </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['link_golestan']; ?>" name="frm[link_golestan]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> آدرس انجمن </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['address']; ?>" name="frm[address]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> پست الکترونیک انجمن </label>
						<input type="email" class="form-control col-12 col-md-8" value="<?php echo $result['email']; ?>" name="frm[email]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> متن کپی رایت </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['copyright']; ?>" name="frm[copyright]" required>
					</div>

					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> متن توضیحات درباره انجمن </label>
						<textarea cols="30" rows="10" type="text" class="form-control ckeditor col-12 col-md-8" name="frm[about_znu]" required><?php echo $result['about_znu']; ?></textarea>
						<script>
							CKEDITOR.replace('frm[about_znu]',{
								language:'fa',
								removeButtons: 'PasterFromWord'
							});
						</script>
					</div>
					<div class="form-group  row ">
						<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>