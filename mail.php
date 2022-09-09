<html>
    <head>
        <link rel="stylesheet" type="text/css" href="JS/Alerts/sweetalert.css">
        <script  src="JS/Alerts/sweetalert.js"></script>
        <script  src="JS/Alerts/sweetalert.min.js"></script>
    </head>
</html>
<?php
if (isset($_POST['email'])) {
    $email_to = "sohaibishaque180@gmail.com";
    $email_subject = "New Portfolio Form submissions";
    function problem($error)
    { 
        ?>
            <script>
                    swal({
                        title: "Error!",
                        text:  "We're sorry, but there were error(s) found with the form you submitted. ",
                        type: "error",
                        showCancelButton: false,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false
                    },
                    function(){
                        window.location = "index.html";
                    });
            </script>
        <?php
        die();
    }
    if (
        !isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])
    ) {
        problem('Were sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['fname'];
    $lname = $_POST['lname']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "<strong>Form details below. </strong>";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "<html><body>";
    $email_message .= "<h1>Name:</h1> " . clean_string($name) . ' ' . clean_string($lname);
    $email_message .= "<h1>Email:</h1> " . clean_string($email);
    $email_message .= "<h1>Message:</h1> " . clean_string($message);
    $email_message .= "</body></html>";

    $headers = "MIME-Version: 1.0\r\n" .
        "Content-Type: text/html; charset=ISO-8859-1\r\n" .
        'From: ' . $email . 
        'Reply-To: ' . $email . 
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    

<?php
    ?>
        <script>
                swal({
                    title: "Congrats!",
                    text:  "Your message sent. Thanks for getting in touch. We will get back to you soon.",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ok",
                    closeOnConfirm: false
                },
                function(){
                    window.location = "index.html";
                });
        </script>
    <?php
}
?>

