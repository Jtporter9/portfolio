   <?php

    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $subscribed = $_POST['subscribe'];
    $gender = $_POST['gender'];
    $about_you = $_POST['about-you'];

    if ($subscribed == ""){
        $subscribed = "NO";
    }
    else {
        $subscribed = "YES";
    }



// xampp code fix      
// ini_set( 'sendmail_from', "jtporter9@gmail.com" );
// ini_set( 'SMTP', "	smtp-relay.gmail.com" );
//     ini_set( 'smtp_port', 25 );

//BUILD THE EMAIL

$headers = 'From: jtporter9@gmail.com';

//  . "\r\n" .
//     'Reply-To: jtporter9@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

    $to = "jtporter9@gmail.com";
    $subject = "Web Languages to Assignment 1 Email Form";

    $message = "Thank you for signing up! The following info was submitted\n\n Email: "
    .$email."\nPassword: "
    .$password."\nSubscribed: "
    .$subscribed."\nGender: "   
    .$gender."\nAbout you: "
    .$about_you."\n";
// SEND THE EMAIL 
    $foo = mail($to, $subject, $message);   

if ($foo)
{
    $sent = " MESSAGE SENT";
}
else {
        $sent = " FAILED TO SEND";
}
    ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css" type="text/css">

    <title>Email Sent</title>
</head>
<body>
    
    <?php include './header.php';?>

    <?php
        echo '
        <div class="thank-you">
            <h3>Thanks for signing up to be a member! The following details were submitted . . .</h3>
            <p>Email: ' . $email . '</p>
            <p>Password: ' . $password . '</p>
            <p>Subscribed: ' . $subscribed . '</p>
            <p>Gender: ' . $gender . '</p>
            <p>About you: ' . $about_you . '</p>
        </div>

        <h3>' . $sent . ' to ' . $to . '</h3>
        
        <div>
        <p>The Email should be as follows: <p/>
        ' . $message . '
        </div>
      
    ';?>

</body>
</html>
