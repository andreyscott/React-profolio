<?php 


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "andreyscott301@yahoo.com";

    $headers = "From: ".$email;
    $txt = "You have received a messages from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend")
} 




?>