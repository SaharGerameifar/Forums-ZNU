<!-- start content section -->
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<b> افزودن مقاله جدید</b>
				<form action="index.php?c=paper&a=add" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان مقاله </label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="عنوان مقاله خود را وارد کنید." name="frm[title]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> متن مقاله </label>
						<textarea cols="30" rows="10" type="text" class="form-control ckeditor col-12 col-md-8" placeholder="متن مقاله خود را وارد کنید." name="frm[text]" required></textarea>
						<script>
							CKEDITOR.replace('frm[text]',{
								language:'fa',
								removeButtons: 'PasterFromWord'
							});
						</script>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> برچسب های مقاله </label>
						<div class="col-12 col-md-8">
							<input type="text" class="form-control " placeholder="برچسب های مقاله خود را وارد کنید." name="frm[tags]">
							<small class="form-text text-monospace"> برای جداسازی برچسب ها از , استفاده کنید. </small>
							<small class="form-text text-monospace"> برای مثال : آموزش , مقاله , مهندسی </small>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تصویر مقاله </label>
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
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش مقاله </label>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="1" required>
							</label>
						</div>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								غیر فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="0" required>
							</label>
						</div>

					</div>
					<div class="form-group  row ">
					<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">افزودن</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="http://znu/admin/index.php?c=paper&a=mylist" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>

<!-- end content section -->