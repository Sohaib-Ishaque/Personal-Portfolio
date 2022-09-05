// function _(element){
//     return document.getElementById(element);
// }

//  const form = _("my-form");

//   form.submit(function (e) {

//         e.preventDefault();

//         var fname = _("fname").val();
//         var lname = _("lname").val();

//         var email = _("email").val();

//         var subject = _("subject").val();

//         var message = _("message").val();

//         var dataString = 'fname=' + fname + 'lname=' + lname + '&email=' + email + '&subject=' + subject + '&message=' + message;



//         function isValidEmail(emailAddress) {

//             var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);

//             return pattern.test(emailAddress);

//         };

//         if (isValidEmail(email) && (message.length > 1) && (name.length > 1)) {

//             $.ajax({

//                 type: "POST",

//                 url: "sendmail.php",

//                 data: dataString,

//                 success: function () {

//                     _('status.success').fadeIn(1000);

//                     _('status.error').fadeOut(500);

//                 }

//             });

//         }

//         else {

//             _('status.error').fadeIn(1000);

//             _('status.success').fadeOut(500);

//         }

//         return false;

//     });
