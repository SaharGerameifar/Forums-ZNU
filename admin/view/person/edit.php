<!--main content start-->
<b> ویرایش پروفایل من </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=person&a=edit" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> نام و نام خانوادگی </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['name']; ?>" name="frm[name]">
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">پست الکترونیک</label>
						<input type="email" class="form-control col-12 col-md-8" value="<?php echo $result['email']; ?>" name="frm[email]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> شماره تماس </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['phone']; ?>" name="frm[phone]">
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