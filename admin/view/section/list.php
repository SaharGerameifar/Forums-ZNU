<!--main content start-->
<b > لیست تمام گرایش ها</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>عنوان گرایش</th>
			<th colspan="3"  class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($section as $key => $value) : ?>
			<tr>
				<td class=" "><?php echo  $key + 1; ?></td>
				<td class=" "><?php echo $value['title']; ?></td>
				<td><a href="index.php?c=section&a=show&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">نمایش</a></td>
				<td><a href="index.php?c=section&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش</a></td>
				<td><a href="index.php?c=section&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>