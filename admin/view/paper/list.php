<!--main content start-->
<b > لیست تمام مقالات</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>عنوان مقاله</th>
			<th>نویسنده</th>
			<th> نمایش در سایت</th>
			<th colspan="3"  class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($paper as $key => $value) : ?>
			<tr>
				<td class=" "><?php echo  $key + 1; ?></td>
				<td class=" "><?php echo $value['title']; ?></td>
				<td class=" "><?php echo $value['name']; ?></td>
				<td>
					<?php
					if ($value['show_status'] == 0) {
						echo "
                                    <span class='btn btn-sm btn-danger'> بررسی نشده</span>
                                ";
					} elseif($value['show_status'] == 1) {
						echo "
                                    <span class='btn btn-sm btn-success'> فعال</span>
                                ";
					}elseif($value['show_status'] == 2) {
						echo "
                                    <span class='btn btn-sm btn-warning'>  غیر قابل پذیرش</span>
                                ";
					}
					?>
				</td>
				<td><a href="index.php?c=paper&a=show&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">نمایش</a></td>
				<td><a href="index.php?c=paper&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش</a></td>
				<td><a href="index.php?c=paper&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>