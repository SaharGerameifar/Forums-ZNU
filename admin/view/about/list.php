<!--main content start-->
<b > لیست تمام اعضا</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>نام و نام خانوادگی </th>
			<th>سمت عضو</th>
			<th>تصویر عضو</th>
			<th colspan="2"  class="crud">عملیات</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($about as $key => $value) : ?>
			<tr>
				<td ><?php echo  $key + 1; ?></td>
				<td ><?php echo $value['name']; ?></td>
				<td><?php echo $value['user_role']; ?></td>
				<td ><img src="<?php echo $value['image']; ?>" alt="" class="img-fluid img-thumbnail " style="max-width:7rem; max-height:5rem;"></td>
				<td><a href="index.php?c=about&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش</a></td>
				<td><a href="index.php?c=about&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>
