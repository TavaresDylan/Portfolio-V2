<?php

function envoiMail($objet, $mailcible, $messageBody, $cci = true){
	require 'config.php';

	$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername($mailaddress)
  ->setPassword($mailpassword);
  
	$mailer = new Swift_Mailer($transport);

	$message = (new Swift_Message($objet))
  ->setFrom([$mailaddress => 'Dydy'])
  ->setBcc($mailcible)
  ->setBody($messageBody);

  $result = $mailer->send($message);
}