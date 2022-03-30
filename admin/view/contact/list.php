<!--main content start-->
<b > لیست تماس با ما</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>نام </th>
			<th>موضوع</th>
			<th>ایمیل</th>
			<th colspan="2"  class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($contact as $key => $value) : ?>
			<tr>
				<td ><?php echo  $key + 1; ?></td>
				<td ><?php echo $value['name']; ?></td>
				<td ><?php echo $value['title']; ?></td>
				<td><?php echo $value['email']; ?></td>
				<td><a href="index.php?c=contact&a=show&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">نمایش</a></td>
				<td><a href="index.php?c=contact&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>
