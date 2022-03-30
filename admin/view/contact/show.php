<!--main content start-->
<b> مشاهده تماس <?php echo $contact['name']; ?></b>
<div class="m-4 bg-light p-5">
	<div class="my-body-show ">
		<label>نام فرستنده : </label>
		<div ><?php echo $contact['name']; ?></div>
	</div>
	<div class="my-body-show ">
		<label> ایمیل فرستنده : </label>
		<div ><?php echo $contact['email']; ?></div>
	</div>
	<div class="my-body-show ">
		<label>موضوع : </label>
		<div ><?php echo $contact['title']; ?></div>
	</div>
	<div class="my-body-show ">
		<label>متن ارسالی : </label>
		<div ><?php echo $contact['body']; ?></div>
	</div>

</div>
<div>
	<a href="index.php?c=contact&a=list" class="btn btn-sm btn-danger float-left px-4 py-2 my-5">بازگشت به صفحه قبل</a>
</div>