<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

/*
|--------------------------------------------------------------------------
| Get Form Data
|--------------------------------------------------------------------------
*/

$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$company    = trim($_POST['company'] ?? '');
$budget     = trim($_POST['budget'] ?? '');
$message    = trim($_POST['message'] ?? '');

$services = $_POST['services'] ?? [];


/*
|--------------------------------------------------------------------------
| Validate Required Fields
|--------------------------------------------------------------------------
*/

if (
    empty($first_name) ||
    empty($last_name) ||
    empty($email) ||
    empty($message)
) {
    die("Please fill in all required fields.");
}


/*
|--------------------------------------------------------------------------
| Validate Email
|--------------------------------------------------------------------------
*/

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}


/*
|--------------------------------------------------------------------------
| Process Services
|--------------------------------------------------------------------------
*/

if (is_array($services)) {
    $services = implode(', ', $services);
} else {
    $services = '';
}


/*
|--------------------------------------------------------------------------
| Sanitize Data
|--------------------------------------------------------------------------
*/

$first_name = htmlspecialchars($first_name, ENT_QUOTES, 'UTF-8');
$last_name  = htmlspecialchars($last_name, ENT_QUOTES, 'UTF-8');
$email      = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone      = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$company    = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$budget     = htmlspecialchars($budget, ENT_QUOTES, 'UTF-8');
$services   = htmlspecialchars($services, ENT_QUOTES, 'UTF-8');
$message    = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));


/*
|--------------------------------------------------------------------------
| Receiver Email
|--------------------------------------------------------------------------
*/

$to = "info@innotelltech.com";


/*
|--------------------------------------------------------------------------
| Email Subject
|--------------------------------------------------------------------------
*/

$subject = "New Contact Enquiry - Innotell Tech";


/*
|--------------------------------------------------------------------------
| Email Body
|--------------------------------------------------------------------------
*/

$email_body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>New Contact Enquiry</title>
</head>

<body style='font-family: Arial, sans-serif; background:#f5f5f5; padding:30px;'>

    <div style='max-width:650px; margin:0 auto; background:#ffffff; padding:30px; border-radius:8px;'>

        <h2 style='margin-top:0; color:#222;'>
            New Contact Form Enquiry
        </h2>

        <p>
            A new enquiry has been submitted through the Innotell Technologies website.
        </p>

        <hr>

        <p>
            <strong>First Name:</strong><br>
            {$first_name}
        </p>

        <p>
            <strong>Last Name:</strong><br>
            {$last_name}
        </p>

        <p>
            <strong>Email:</strong><br>
            {$email}
        </p>

        <p>
            <strong>Phone:</strong><br>
            {$phone}
        </p>

        <p>
            <strong>Company:</strong><br>
            {$company}
        </p>

        <p>
            <strong>Budget Range:</strong><br>
            {$budget}
        </p>

        <p>
            <strong>Service(s) Needed:</strong><br>
            {$services}
        </p>

        <p>
            <strong>Project Details:</strong><br>
            {$message}
        </p>

        <hr>

        <p style='font-size:13px; color:#777;'>
            This enquiry was submitted through the Innotell Technologies website contact form.
        </p>

    </div>

</body>
</html>
";


/*
|--------------------------------------------------------------------------
| Email Headers
|--------------------------------------------------------------------------
*/

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Innotell Technologies <info@innotelltech.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";


/*
|--------------------------------------------------------------------------
| Send Email
|--------------------------------------------------------------------------
*/

if (mail($to, $subject, $email_body, $headers)) {

    // Redirect to thank-you page
    header("Location: ../thank-you.php");
    exit;

} else {

    echo "Sorry, your message could not be sent. Please try again later.";
    exit;
}