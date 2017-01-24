   <?php

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

//BUILD THE EMAIL

    $to = "jtporter9@gmail.com";
    $subject = "Web Languages to Assignment 1 Email Form";

    $email_message = "Thank you for signing up! The following info was submitted\n\n Email: "
    .$email."\nPassword: "
    .$password."\nSubscribed: "
    .$subscribed."\nGender: "
    .$gender."\nAbout you: "
    .$about_you."\n";
// SEND THE EMAIL 
    mail($to, $subject, $email_message, 'FROM'.$email);   

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
      
    ';?>

</body>
</html>
