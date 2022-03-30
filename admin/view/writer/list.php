<!--main content start-->
<b> لیست تمام نویسندگان </b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>نام نویسنده</th>
			<th>وضعیت</th>
			<th colspan="3"  class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($writer as $key => $value) : ?>
			<tr>
				<td><?php echo  $key + 1; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td>
					<?php
					if ($value['verifyAdmin'] == 0 && $value['status'] == 0) {
						echo "
                                    <span class='btn btn-sm btn-warning'>تایید نشده </span>
                                ";
					} elseif ($value['verifyAdmin'] == 1 && $value['status'] == 0) {
						echo "
                                    <span class='btn btn-sm btn-info'> ایمیل تایید ... </span>
                                ";
					} elseif ($value['verifyAdmin'] == 1 && $value['status'] == 1) {
						echo "
                                    <span class='btn btn-sm btn-success'>فعال</span>
								";
					}elseif ($value['verifyAdmin'] == 0 && $value['status'] == 1) {
						echo "
                                    <span class='btn btn-sm btn-danger'> غیر فعال</span>
                                ";
					}
					?>
				</td>
				<td><a href="index.php?c=writer&a=changelevel&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">تغییر سطح</a></td>
				<td><a href="index.php?c=writer&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">فعال/عدم فعال سازی</a></td>
				<td><a href="index.php?c=writer&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>