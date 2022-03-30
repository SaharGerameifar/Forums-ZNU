<!--main content start-->
<b> تغییر سطح نویسنده <?php echo $result['name']; ?></b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=writer&a=changelevel&id=<?php echo $result['id']; ?>" method="POST" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">تغییر سطح </label>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								نویسنده
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="0" <?php if ($result['level'] == '0') echo 'checked'; ?>>
							</label>
						</div>

						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								ادمین
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="1" <?php if ($result['level'] == '1') echo 'checked'; ?>>
							</label>
						</div>
					</div>
					<div class="form-group  row ">
						<div class="col-0 col-md-4"></div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=writer&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>