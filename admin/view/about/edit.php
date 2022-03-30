<!--main content start-->
<b> ویرایش اطلاعات <?php echo $result['name']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=about&a=edit&id=<?php echo $result['id']; ?>" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> نام و نام خانوادگی </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['name']; ?>" name="frm[name]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> سمت عضو </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['user_role']; ?>" name="frm[user_role]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تصویر عضو </label>
						<div class="col-12 col-md-8">
							<img src="<?php echo $result['image']; ?>" alt="paper-image" class="img-fluid img-thumbnail ">
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

					<div class="form-group  row ">
						<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=about&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>