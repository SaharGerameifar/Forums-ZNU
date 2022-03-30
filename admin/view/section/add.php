<!-- start content section -->
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<b> افزودن گرایش جدید</b>
				<form action="index.php?c=section&a=add" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان گرایش </label>
						<input type="text" class="form-control col-12 col-md-8" placeholder="عنوان گرایش  را وارد کنید." name="frm[title]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> توضیحات گرایش </label>
						<textarea cols="30" rows="10" type="text" class="form-control ckeditor col-12 col-md-8" placeholder="توضیحات گرایش را وارد کنید." name="frm[body]" required></textarea>
						<script>
							CKEDITOR.replace('frm[body]',{
								language:'fa',
								removeButtons: 'PasterFromWord'
							});
						</script>
					</div>
					<div class="form-group  row ">
						<div class="col-0 col-md-4">

						</div>
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">افزودن</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=section&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- end content section -->