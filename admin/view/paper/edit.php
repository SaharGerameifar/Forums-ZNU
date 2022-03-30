<!--main content start-->
<b> ویرایش مقاله <?php echo $result['title']; ?> </b>
<section class=" my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<form action="index.php?c=paper&a=edit&id=<?php echo $result['id']; ?>" method="POST" class="mt-4">
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> عنوان مقاله </label>
						<p class="form-control col-12 col-md-8"><?php echo $result['title']; ?></p>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> متن مقاله </label>
						<textarea class="form-control col-12 col-md-8" cols="30" rows="10" readonly><?php echo $result['body']; ?></textarea>
						
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> برچسب های مقاله</label>
						<div class="col-12 col-md-8 ">
						<div class="content-tag  m-0  d-inline-flex flex-wrap">
							<?php if ($result['tags']) {
								$array_tags = explode(",", $result['tags']);
								foreach ($array_tags as $tag) {
							?>
									<span class="m-1 "><?php echo $tag; ?></span>
								<?php }
							} else { ?>
								<p><?php echo 'برچسب ندارد.'; ?></p>
							<?php } ?>
						</div>
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4"> تصویر مقاله </label>
						<div class="col-12 col-md-8">
							<img src="<?php echo $result['image']; ?>" alt="paper-image" class="img-fluid img-thumbnail">
						</div>
					</div>
					<div class="form-group row my-5">
						<label class="form-control-lable col-12 col-md-4">وضعیت نمایش مقاله در سایت </label>
						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								فعال
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="1" <?php if ($result['show_status'] == '1') echo 'checked'; ?>>
							</label>
						</div>

						<div class="form-check mx-4">
							<label for="" class="form-check-label">
								غیر قابل پذیرش
								<input type="radio" class="form-check-input col-12 col-md-8" name="frm[rb]" value="2" <?php if ($result['show_status'] == '2') echo 'checked'; ?>>
							</label>
						</div>
					</div>
					<div class="form-group  row ">
					<div class="col-5 col-md-4 ">
							<button type="submit" name="btn" class="btn btn-success px-4 py-2 ">ویرایش</button>
						</div>
						<div class="col-5 col-md-4 ">
							<a href="index.php?c=paper&a=list" class="btn btn-danger px-4 py-2 "> انصراف</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>