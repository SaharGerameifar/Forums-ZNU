<!--main content start-->
<b> ویرایش منو <?php echo $result['title']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=menu&a=edit&id=<?php echo $result['id']; ?>" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان منو </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['title']; ?>" name="frm[title]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> آدرس منو </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['url']; ?>" name="frm[url]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> ترتیب نمایش منو</label>
						<input type="number" class="form-control col-12 col-md-8" value="<?php echo $result['sort']; ?>" name="frm[sort]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> سرگروه </label>
						<select class="form-control col-12 col-md-8" name="frm[chid]">
							<option value="0">سرگروه</option>
							<?php foreach ($submenu  as $value) {
								echo "<option value=" . $value['id'] . " ";
								if ($result['chid'] == $value['id']) {
									echo " selected";
								}
								echo ">" . $value['title'] . "</option>";
							} ?>
						</select>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش منو </label>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="1" <?php if ($result['status'] == '1') echo 'checked'; ?>>
							</label>
						</div>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								غیر فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="0" <?php if ($result['status'] == '0') echo 'checked'; ?>>
							</label>
						</div>

					</div>
					<div class="form-group  row ">
					<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
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