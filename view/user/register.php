<!-- start content section -->
<section class="content my-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-8 mx-auto ">
				<b class=" register-title">فرم ثبت نام کاربر</b>
				<form method="POST" action="index.php?c=user&a=register" id="register-form'" onsubmit="return checkform();">
					<div class="form-group register">
						<input type="text" class="form-control " placeholder=" نام و نام خانوادگی شما (الزامی)"  name="frm[name]" required>
						<input type="email" class="form-control " placeholder="پست الکترونیک شما (الزامی)  "  name="frm[email]" required>
						<input type="password" class="form-control  " placeholder="  کلمه عبور شما (الزامی) "  name="frm[password]" required>
						<button type="submit" class="btn btn-secondary btn-block " name="btn" id="btn"> ثبت نام </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- end content section -->
