<!--main content start-->
<b> لیست تمام دیدگاه ها</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th>نام کاربر</th>
			<th> مرتبط با مقاله</th>
			<th>تاریخ ارسال دیدگاه</th>
			<th> نمایش در سایت</th>
			<th colspan="4" class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($comments as $key => $value) : ?>
			<tr>
				<td><?php echo  $key + 1; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td>
					<?php 
					$row = $paper->comment_list_paper($value['paper_id']);
					echo $row['title']; ?>
				</td>
				<td><?php echo  jdate(" Y/m/d ", $value['comment_date']); ?></td>
				<td>
					<?php
					if ($value['show_status'] == 0) {
						echo "
                                    <span class='btn btn-sm btn-danger'> غیر فعال </span>
                                ";
					} elseif ($value['show_status'] == 1) {
						echo "
                                    <span class='btn btn-sm btn-success'> فعال</span>
                                ";
					}
					?>
				</td>
				<td><a href="index.php?c=paper&a=showcomment&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">نمایش</a></td>
				<td><a href="index.php?c=paper&a=editcomment&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش </a></td>
				<td><a href="index.php?c=paper&a=replycomment&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-primary">پاسخ </a></td>
				<td><a href="index.php?c=paper&a=deletecomment&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>