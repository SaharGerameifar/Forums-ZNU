<!-- start content section -->
<section class="content my-5 ">
        <div class="container ">
            <div class="row">
                <div class="col-8 mx-auto ">
                    <b class=" register-title">فرم ورود کاربر</b>
                    <form method="POST" action="index.php?c=user&a=login" >
                        <div class="form-group register">
                            <input type="email" class="form-control " placeholder="پست الکترونیک شما  " required name="frm[email]">
                            <input type="password" class="form-control  " placeholder="  کلمه عبور شما  " required name="frm[password]">
                            <input type="checkbox" name="frm[remember]" > <span>مرا به خاطر بسپار</span>
                            <button type="submit" class="btn btn-secondary btn-block " name="btn">  ورود </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end content section -->