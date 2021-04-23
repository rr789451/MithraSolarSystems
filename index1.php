<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $contact = $_POST['number'];
    $message = $_POST['message'];

    $mailTo = "sales@mithrasolarsystems.com";
    $headers = "From: ".$mailFrom."\n\nName: ".$name."\n\n Message: ".$message."\n\n Contact: ".$contact;
    $txt = "Enquiry e-Mail";

    mail($mailTo, $txt, $headers);
    header("Location: index.html#contactus?mailsent");
}