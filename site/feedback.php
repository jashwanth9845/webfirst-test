
<?php
session_start();
$email = filter_input(INPUT_POST, 'email');
$to_email = "jashureddy56@gmail.com";
$subject = "FeedBack from the company project";
$headers = "From:". $email;
$n = filter_input(INPUT_POST, 'name');
$feed = filter_input(INPUT_POST, 'radio');
$msg = filter_input(INPUT_POST, 'comment');
$name="From the:".$n."<br> Email:".$email;
$message ="This is feedback:" .$msg ;
    if (($name=="")||($email=="")||($feed=="")||($message=="")) {
        echo "<script type='text/javascript'>alert('all field requried...');
     window.location.href='feedback.html';</script>";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script type='text/javascript'>alert('invalid Email please Fill the form agian.. ');
     window.location.href='feedback.html';</script>";
    }
     elseif (mail($to_email, $subject, $message, $name,$headers)) {
     echo "<script type='text/javascript'>alert('Thank you for your feed back we will get back to you soon..');
     window.location.href='feedback.html';</script>";
} else {
    echo "<script type='text/javascript'>alert('Email error');
     window.location.href='login.html';</script>";
}

?>

