<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}


/*
|--------------------------------------------------------------------------
| Get Email
|--------------------------------------------------------------------------
*/

$email = trim($_POST['email'] ?? '');


/*
|--------------------------------------------------------------------------
| Validate Email
|--------------------------------------------------------------------------
*/

if (empty($email)) {
    die("Please enter your email address.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}


/*
|--------------------------------------------------------------------------
| Sanitize Email
|--------------------------------------------------------------------------
*/

$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');


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

$subject = "New Newsletter Subscription - Innotell Technologies";


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
    <title>Newsletter Subscription</title>
</head>

<body style='font-family: Arial, sans-serif; background:#f5f5f5; padding:30px;'>

    <div style='max-width:600px; margin:0 auto; background:#ffffff; padding:30px; border-radius:8px;'>

        <h2 style='margin-top:0; color:#222;'>
            New Newsletter Subscription
        </h2>

        <p>
            A new user has subscribed to the Adhira Tech newsletter.
        </p>

        <hr>

        <p>
            <strong>Email Address:</strong><br>
            {$email}
        </p>

        <hr>

        <p style='font-size:13px; color:#777;'>
            This subscription was submitted through the Innotell Technologies website.
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

    // Redirect after successful subscription
    header("Location: ../newsletter-thank-you.php");
    exit;

} else {

    echo "Sorry, your subscription could not be completed. Please try again later.";
    exit;
}