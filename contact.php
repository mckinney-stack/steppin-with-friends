<?php 

if (isset($_POST['submit'])) {
    $ticketAmount = $_POST['ticketAmount'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $donation = $_POST['donation'];

    $mailTo = "evanmckinney@hotmail.co.uk";
    $headers = "From: ".$email; 
    $txt = "You have received a ticket order from ".$firstName.$lastName;
    
    mail($mainTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

