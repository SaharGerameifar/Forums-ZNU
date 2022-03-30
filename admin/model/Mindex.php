<?php

class main {
   
    public function __construct()
    {
        global $pdo;
        $this->pdo=$pdo;
    }
  
   public function uploader($uploadeimage, $uploadepath, $prename)
    {
        $uploade_ok = 1;
        $valid_ext = array("jpeg", "jpg", "png");
        $image_name = $_FILES[$uploadeimage]['name'];
        $image_size = $_FILES[$uploadeimage]['size'];
        $image_tmp = $_FILES[$uploadeimage]['tmp_name'];
        $image_type = $_FILES[$uploadeimage]['type'];
        $temp = explode(".", $image_name);
        $image_ext = strtolower(end($temp));
        $new_name = uniqid($prename, true) . "." . $image_ext;
        $target_dir = $uploadepath . $new_name;
        if (empty($image_name)) {
            // echo "تصویری برای آپلود انتخاب نکرده اید.";
            $uploade_ok = 2;
        }
        if (in_array($image_ext, $valid_ext) === false) {
            // echo "لطفا یک تصویر با فرمت JPEG یا JPG یا PNG انتخاب کنید.";
            $uploade_ok = 3;
        }
        if ($image_size > 2000000) {
            // echo "سایز تصویر انتخاب شده نباید بیشتر از 2مگ باشد.";
            $uploade_ok = 4;
        }
    
        if ($uploade_ok == 1) {
            
                move_uploaded_file($image_tmp, $target_dir);
                // echo "تصویر با موفقیت آپلود شد.";
                return $target_dir;
            
        } else {
            // echo "خطایی وجود دارد . لطفا دوباره تلاش کنید.";
            
        }
    }
  
}
