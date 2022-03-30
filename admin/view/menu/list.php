<!--main content start-->
<b> لیست تمام منو ها</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>عنوان منو</th>
			<th>آدرس منو</th>
			<th>عنوان سرگروه</th>
			<th> نمایش در سایت</th>
			<th>ترتیب نمایش</th>
			<th colspan="2"  class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($menulist as $key => $value) : ?>
			<tr>
				<td><?php echo  $key + 1; ?></td>
				<td><?php echo $value['title']; ?></td>
				<td><?php echo $value['url']; ?></td>
				<td>
					<?php if ($value['chid'] == 0) {
						echo "سرگروه ";
					} else {
						foreach ($submenu as $val) {
							if ($value['chid'] == $val['id']) {
								echo "$val[title]";
							}
						}
					}
					?>
				</td>
				<td>
					<?php
					if ($value['status'] == 0) {
						echo "
                                    <span class='btn btn-sm btn-danger'> غیر فعال </span>
                                ";
					} elseif ($value['status'] == 1) {
						echo "
                                    <span class='btn btn-sm btn-success'> فعال</span>
                                ";
					}
					?>
				</td>
				<td class=" "><?php echo $value['sort']; ?></td>
				<td><a href="index.php?c=menu&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش</a></td>
				<td><a href="index.php?c=menu&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>