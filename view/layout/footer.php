 <!--start footer section  -->
 <footer class="footer ">
     <div class="container-fluid bg-dark py-5 ">
         <div class="row ">
             <div class="col-l2 col-md-6 ">
                 <p class="link-footer-title2"> راه های ارتباط با ما</p>
                 <a href="<?php echo $settings['link_telegram']; ?>" class="footer-icon " title="تلگرام"><i class="fab fa-telegram"></i><span class="p-3">ما را در تلگرام دنبال کنید.</span></a>
                 <a href="<?php echo $settings['link_instagram']; ?>" class="footer-icon" title="اینستاگرام "> <i class="fab fa-instagram"></i><span class="p-3">ما را در اینستاگرام دنبال کنید.</span></a>
             </div>
             <div class="col-l2 col-md-6">
                 <p class="link-footer-title1">لینک دسترسی سریع</p>
                 <a href="<?php echo $settings['link_znu']; ?>" title="دانشگاه زنجان" class="footer-link">وب سایت دانشگاه زنجان</a>
                 <a href="<?php echo $settings['link_olom']; ?>" title=" وزارت علوم" class="footer-link">وب سایت وزارت علوم </a>
                 <a href="<?php echo $settings['link_library']; ?>" title=" کتابخانه مرکزی" class="footer-link"> کتابخانه دانشگاه زنجان </a>
                 <a href="<?php echo $settings['link_nima']; ?>" title=" سامانه نیما" class="footer-link"> سامانه نیما</a>
                 <a href="<?php echo $settings['link_golestan']; ?>" title=" سامانه گلستان" class="footer-link"> سامانه گلستان</a>
             </div>
         </div>
         <a href="#top_nav" class="float-left nav_top "><span class="btn btn-warning ">بالا</span></a>
     </div>
     <div class="footer2 ">
         <p class="footer-privacy"><?php echo $settings['copyright']; ?> </p>
         <a href="https://ir.linkedin.com/in/sahar-gerameifar-7b226712a" class="footer-privacy-link "><span>طراحی شده توسط:sahar-gerameifar</span> </a>

     </div>

 </footer>

 <!--end footer section  -->
 <!-- sweet-alert js -->
 <script src="public/default/js/sweet-alert.min.js"></script>
 <!-- script js -->
 <script src="public/default/js/script.js"></script>
 <!-- jquery -->
 <script src="public/default/js/jquery-3.5.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="public/default/js/bootstrap.min.js"></script>

 <script>
    
    function checkform() {
    var name = $('input[name="frm[name]"]').val();
    var email = $('input[name="frm[email]"]').val();
    var password = $('input[name="frm[password]"]').val();
    if (name == "" || email == "" || password == "") {
        swal({
            title: "مطمئنی همه فیلدها رو وارد کردی؟",
            text: "فیلد نام و نام خانوادگی و یا ایمیل و یا کلمه عبور خالی است.",
            type: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "باشه !!!",
            
        });
    } else {
        swal({
            title: "ثبت نام با موفقیت انجام شد.",
            text: "لطفا ایمیل فعال سازی را تایید کنید .",
            type: "success",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "باشه !!!",
            
        });
    }
}


 </script>

 </body>

 </html>