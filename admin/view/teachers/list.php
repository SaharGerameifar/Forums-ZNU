<!--main content start-->
<b> لیست تمام اساتید</b>
<table class="table table-responsive-md table-hover mt-4">
	<thead class="thead-dark">
		<tr>
			<th>ردیف</th>
			<th> نام استاد</th>
			<th> گرایش استاد</th>
			<th> تصویر استاد</th>
			<th colspan="3" class="crud">عملیات</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($results as $key => $value) : ?>
			<tr>
				<td ><?php echo  $key + 1; ?></td>
				<td ><?php echo $value['name']; ?></td>
				<td><?php
					foreach ($section_list as $val) {
						if ($value['chid'] == $val['id']) {
							echo  $val['title'];
						}
					}
					?></td>
				<td><img src="<?php echo $value['image']; ?>" alt="" class="img-fluid img-thumbnail " style="max-width:7rem; max-height:5rem;"></td>
				<td><a href="index.php?c=teachers&a=show&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning">نمایش</a></td>
				<td><a href="index.php?c=teachers&a=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-success">ویرایش</a></td>
				<td><a href="index.php?c=teachers&a=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger">حذف</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php" class="btn btn-danger px-4 py-2 float-left my-5">بازگشت به صفحه قبل</a>