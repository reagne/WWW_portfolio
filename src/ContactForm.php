<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(isset($_POST['mail']) && strlen($_POST['mail']) > 5 && isset($_POST['title']) && isset($_POST['message'])){
         $mail = trim($_POST['mail']);
         $title = trim($_POST['title']);
         $message = trim($_POST['message']);

         $title = 'Contact Form: '.$title;
         $message = wordwrap($message, 70, "\r\n");
         $receiverMail = 'my.mail@mail.com';
         $senderMail = 'From: '.$mail;
         if (mail($receiverMail, $title, $message, $senderMail)){  // nie ma odpowiednich ustawień w php.ini, więc mail nie będzie się wysyłał.
             echo("<p>Dziękujemy za wysłanie formularza.</p>");
         }
    } else {
         echo("<p>Przepraszamy. Nie udało się wysłać formularza. Proszę spróbować raz jeszcze.</p>");
     }
}