<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    $mailTo = "belnem.design@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $title, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>