<!-- start content section -->
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<b> افزودن استاد جدید</b>
				<form action="index.php?c=teachers&a=add" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> نام و نام خانوادگی استاد </label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="  نام و نام خانوادگی استاد را وارد کنید." name="frm[name]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> ایمیل استاد</label>
						<input type="email" class="form-control col-12 col-md-8" placeholder="  ایمیل استاد را وارد کنید." name="frm[email]" >
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> سایت استاد</label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="  سایت استاد را وارد کنید." name="frm[site]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تصویر استاد </label>
						<div class="col-12 col-md-8">
							<div class="input-group w-100">
								<div class="custom-file ">
									<input type="file" class="custom-file-input upload-input " id="2" name="image" required>
									<label for="2" class="custom-file-label upload-label ">تصویر را آپلود کنید.</label>
								</div>
								<div class="input-group-prepenp">
									<span class="input-group-text">آپلود</span>
								</div>
							</div>
							<small class="form-text text-monospace">حجم تصویر کمتر از 2 Mb باشد. فرمت (jpeg,jpg,png)</small>
							<small class="form-text text-monospace">  ابعاداستاندارد برای تصویر (طول (850-700))(عرض (550-400))  </small>
							
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> گرایش استاد</label>
						<select name="frm[chid]" class="form-control col-12 col-md-8" required>
							<?php foreach ($section_list as $value) : ?>
								<option value="<?php echo $value['id']; ?>"> <?php echo $value['title']; ?></option>
							<?php endforeach; ?>
						</select>

					</div>
					<div class="form-group  row ">
						<div class="col-0 col-md-4">

						</div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">افزودن</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=teachers&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- end content section -->