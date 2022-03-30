<?php
require_once 'admin/model/Muser.php';
require_once 'public/include/PHPMailer.php';
require_once 'public/include/SMTP.php';
require_once 'public/include/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$user = new user();
$mail= new PHPMailer();
$mail->isSMTP();
switch ($action) {
   case 'register':

      if (isset($_POST['btn'])) {
         $data = $_POST['frm'];
         $password = sha1($data['password']);
         $data['password'] = $password;
         $data['vc'] = sha1(uniqid());
         $id = $user->user_add($data);
         $result = $user->select_verifyuser($id);
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth=true;
            $mail->SMTPSecure="tls";
            $mail->Port=587;
            $mail->Username="znu.anjoman2021@gmail.com";
            $mail->Password="2021@Zanjan";
            $mail->setFrom("znu.anjoman2021@gmail.com","انجمن برق دانشگاه زنجان");
            $mail->addAddress($data['email']);
            $subject = "ایمیل تایید انجمن علمی مهندسی برق دانشگاه زنجان";
            $message = '<p>کاربر گرامی از ثبت نام شما متشکریم. لطفا برای ثبت نام نهایی خود  روی لینک زیر کلیک کنید.</p>' . '<button class="btn btn success"><a class=" text-decoration-none" href="znu/vc.php?vc=' . $data['vc'] . '">کلیک کنید.</a></button>';
            $mail->Subject= $subject;
            $mail->CharSet="UTF-8";
            $mail->isHTML(true);
            $mail->Body = $message;
            $mail->Send();
            $mail->smtpClose();
         if ($result['verifyAdmin'] == 1) {
            $_SESSION['user_id'] = $id;
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['level'];
            header("location:index.php?c=user&a=login");
         } else {
            header("location:index.php?c=user&a=login&register=verify");
         }
      }
      
      break;
   case 'login':
      @$register = $_GET['register'];
      if ($register == 'verify') {
         echo "<div class=' m-5 alert alert-info alert-dismissible fade show'>
          ایمیل فعال سازی را تایید کنید.
          <button class='close' data-dissmiss='alert'> <span> &times; </span> </button>
          </div>";
      }
      @$login = $_GET['login'];
      if ($login == 'error1') {
         echo "<div class=' m-5 alert alert-info alert-dismissible fade show'>
         لطفا ایمیل تایید را بررسی کنید.
          <button class='close' data-dissmiss='alert'> <span> &times; </span> </button>
          </div>";
      } elseif ($login == 'error2') {
         echo "<div class=' m-5 alert alert-info alert-dismissible fade show'>
         دسترسی شما به پنل کاربری تان مسدود شده است. لطفا منتظر تایید ادمین بمانید.
          <button class='close' data-dissmiss='alert'> <span> &times; </span> </button>
          </div>";
      } elseif ($login == 'error3') {
         echo "<div class=' m-5 alert alert-danger alert-dismissible fade show'>
           کلمه عبور را اشتباه وارد کرده اید.
          <button class='close' data-dissmiss='alert'> <span> &times; </span> </button>
          </div>";
      } elseif ($login == 'error4') {
         echo "<div class=' m-5 alert alert-danger alert-dismissible fade show'>
            آدرس ایمیل را اشتباه وارد کرده اید.
          <button class='close' data-dissmiss='alert'> <span> &times; </span> </button>
          </div>";
      }

      if (isset($_COOKIE['email_remember']) && isset($_COOKIE['pass_remember'])) {
         $user = $user->select_user($_COOKIE['email_remember']);
         if ($user['password'] == sha1($_COOKIE['pass_remember']) && $user['verifyAdmin'] == 1 && $user['status'] == 1) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['level'];
            if ($user['level'] != 0) {
               header("location:admin/index.php?c=index");
            } else {
               header("location:admin/dashbord.php");
            }
         }
      }

      if ($_POST) {
         $data = $_POST['frm'];
         $password = sha1($data['password']);
         $user = $user->select_user($data['email']);
         if ($user) {
            switch ($user['status']) {
               case '1':
                  if ($user['verifyAdmin'] == 1) {
                     if ($user['password'] == $password) {
                        if (isset($data['remember'])) {
                           setcookie('email_remember', $data['email'], time() + (60 * 60 * 24 * 30));
                           setcookie('pass_remember', $data['password'], time() + (60 * 60 * 24 * 30));
                        }
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['role'] = $user['level'];
                        if ($user['level'] != 0) {
                           header("location:admin/index.php?c=index");
                        } else {
                           header("location:admin/dashbord.php");
                        }
                     } else {
                        header("location:index.php?c=user&a=login&login=error3");
                     }
                  } else {
                     header("location:index.php?c=user&a=login&login=error2");
                  }
                  break;
               case '0':
                  header("location:index.php?c=user&a=login&login=error1");
                  break;
            }
         } else {
            header("location:index.php?c=user&a=login&login=error4");
         }
      }
      break;
   case 'logout': {
         session_destroy();
         setcookie('email_remember', $data['email'], time() - 1);
         setcookie('pass_remember', $data['password'], time() - 1);
         header("location:index.php?c=user&a=login");
         break;
      }
}



require_once "view/$controller/$action.php";
