window.addEventListener('load', () => document.querySelector('.preloader')
    .classList.add('hidpreloader'));
// document.querySelector('#btn').onclick = function() {
//     swal({
//             title: "Are you sure?",
//             text: "You will not be able to recover this imaginary file!",
//             type: "warning",
//             showCancelButton: true,
//             confirmButtonColor: "#DD6B55",
//             confirmButtonText: "Yes, delete it!",
//             closeOnConfirm: false
//         },
//         function() {
//             swal("Deleted!", "Your imaginary file has been deleted.", "success");
//         });
// };
// document.querySelector('#btn').onclick = function() {
//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Your work has been saved',
//         showConfirmButton: false,
//         timer: 1500
//     })
// };
// $(document).ready(function() {
//     $('#register-form').on('submit', function(e) {
//         $.ajax({
//             url: 'index.php?c=user&a=register', //===PHP file name====
//             data: $(this).serialize(),
//             type: 'POST',
//             success: function(data) {
//                 console.log(data);
//                 //Success Message == 'Title', 'Message body', Last one leave as it is
//                 swal("¡Success!", "Message sent!", "success");
//             },
//             error: function(data) {
//                 //Error Message == 'Title', 'Message body', Last one leave as it is
//                 swal("Oops...", "Something went wrong :(", "error");
//             }
//         });
//         e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
//     });
// });//  document.querySelector('#btn').onclick = function() {
//      swal({
//              title: "ثبت نام با موفقیت انجام شد.",
//              text: "لطفا ایمیل فعال سازی را تایید کنید.",
//              type: "success",
//              confirmButtonColor: "#DD6B55",
//              confirmButtonText: "باشه !!!",
//             },
//         //  function() {
//         //      swal("Deleted!", "Your imaginary file has been deleted.", "success");
//         //  }
//          );
//  };