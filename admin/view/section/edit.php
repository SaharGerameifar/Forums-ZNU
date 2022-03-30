<!--main content start-->
<b> ویرایش گرایش <?php echo $result['title']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=section&a=edit&id=<?php echo $result['id']; ?>" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان گرایش </label>
						<input type="text" class="form-control col-12 col-md-8" value="<?php echo $result['title']; ?>" name="frm[title]" required>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> توضیحات گرایش </label>
						<textarea cols="30" rows="10" type="text" class="form-control ckeditor col-12 col-md-8" name="frm[body]" required><?php echo $result['body']; ?></textarea>
						<script>
							CKEDITOR.replace('frm[body]',{
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
							<a href="index.php?c=section&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>