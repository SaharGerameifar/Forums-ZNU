<!--main content start-->
<b> ویرایش دوره <?php echo $result['title']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=course&a=edit&id=<?php echo $result['id']; ?>" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان دوره </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['title']; ?>" name="frm[title]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> مدرس دوره </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['teacher']; ?>" name="frm[teacher]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تاریخ برگزاری دوره </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['date']; ?>" name="frm[date]" id="persianDatapicker" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> قیمت دوره </label>
						<div class="col-12 col-md-8 d-flex">
							<input type="number" class="form-control w-75 mx-3" value="<?php echo $result['price']; ?>" name="frm[price]" required>
							<span class="my-auto">تومان</span>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> توضیحات دوره </label>
						<textarea cols="30" rows="10" type="text"  class="form-control ckeditor col-12 col-md-8" name="frm[text]" required><?php echo $result['body']; ?></textarea>
						<script>
							CKEDITOR.replace('frm[text]',{
								language:'fa',
								removeButtons: 'PasterFromWord'
							});
						</script>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> برچسب های دوره </label>
						<div class="col-12 col-md-8">
							<input type="text" class="form-control " value="<?php echo $result['tags']; ?>" name="frm[tags]">
							<small class="form-text text-monospace"> برای جداسازی برچسب ها از , استفاده کنید. </small>
							<small class="form-text text-monospace"> برای مثال : آموزش , دوره , مهندسی </small>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تصویر دوره </label>
						<div class="col-12 col-md-8">
							<img src="<?php echo $result['image']; ?>" alt="paper-image" class="img-fluid img-thumbnail">
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
							<small class="form-text text-monospace">  ابعاداستاندارد برای تصویر (طول (850-700))(عرض (550-400))  </small>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش دوره </label>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="1" <?php if ($result['show_status'] == '1') echo 'checked'; ?>>
							</label>
						</div>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								غیر فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="0" <?php if ($result['show_status'] == '0') echo 'checked'; ?>>
							</label>
						</div>

					</div>
					<div class="form-group  row ">
						<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=course&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>