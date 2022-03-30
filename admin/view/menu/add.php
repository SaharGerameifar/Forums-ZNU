<!-- start content section -->
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<b> افزودن منو جدید</b>
				<form action="index.php?c=menu&a=add" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان منو </label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="عنوان منو را وارد کنید." name="frm[title]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> آدرس منو </label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="آدرس منو را وارد کنید." name="frm[url]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> ترتیب نمایش منو </label>
						<input type="number" class="form-control col-12 col-md-8" placeholder="ترتیب نمایش منو را وارد کنید." name="frm[sort]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> سرگروه </label>
						<select class="form-control col-12 col-md-8" name="frm[chid]" required>
							<option value="0">سرگروه </option>
							<?php foreach ($submenu  as $value) : ?>
								<option value="<?php echo $value['id']; ?>" > <?php echo $value['title']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش منو </label>
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
							<a href="index.php?c=menu&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>

<!-- end content section -->