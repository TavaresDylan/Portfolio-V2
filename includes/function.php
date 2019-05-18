<?php
require 'vendor/autoload.php';
function envoiMail($objet, $mailto, $msg, $cci = true)//:string
{
	require 'config.php';
	if(!is_array($mailto)){
		$mailto = [ $mailto ];
	}
	// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
	->setUsername($defaultmail)
	->setPassword($mailpwd);
	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);
	// Create a message
	$message = (new Swift_Message($objet))
		->setFrom($_POST["mailfrom"]);
	if ($cci){
		$message->setBcc($mailto);
	}else{
		$message->setto($mailto);
	}
	if(is_array($msg) && array_key_exists("html", $msg) && array_key_exists("text", $msg))
	{
		$message->setBody($msg["html"], 'text/html');
		// Add alternative parts with addPart()
		$message->addPart($msg["text"], 'text/plain');
	}else if(is_array($msg) && array_key_exists("html", $msg) ){
		$message->setBody($msg["html"], 'text/html');
		$message->addPart($msg["html"], 'text/plain');
	}else if(is_array($msg) && array_key_exists("text", $msg)){
		$message->setBody($msg["text"], 'text/plain');
	}else if(is_array($msg)){
		die('erreur une clé n\'est pas bonne'); 
	}else{
		$message->setBody($msg, 'text/plain');
	}
	
	// Send the message
	return $mailer->send($message);
}
if (!empty($_POST["mailfrom"]) && !empty($_POST["msg"])) {
	require 'config.php';
	envoiMail("Contact depuis Portfolio",
            		$defaultmail,
            		["html" => "<p>E-mail envoyé depuis ".$_POST["mailfrom"]."</br> ".$_POST["msg"]."</p>", "text"=> ""]
          		 	);
}