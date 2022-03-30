<!--main content start-->
<b> ویرایش دیدگاه <?php echo $result['name']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=course&a=editcomment&id=<?php echo $result['id']; ?>" method="POST" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> دیدگاه مرتبط به دوره</label>
						<p class="form-control col-12 col-md-8">
							<?php $row = $course->comment_list_course($result['course_id']);
							echo $row['title']; ?>
						</p>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">تاریخ ارسال دیدگاه  </label>
						<p class="form-control col-12 col-md-8"><?php echo jdate(" Y/m/d ", $result['comment_date']); ?></p>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> ایمیل ارسال کننده</label>
						<p class="form-control col-12 col-md-8"><?php echo $result['email']; ?></p>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> توضیحات دیدگاه </label>
						<textarea class="form-control col-12 col-md-8" cols="30" rows="10" readonly><?php echo $result['body']; ?></textarea>

					</div>


					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش دیدگاه در سایت </label>
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
						<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=course&a=listcomment" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>