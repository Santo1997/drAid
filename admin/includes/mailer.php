<?php


require_once 'Swiftmailer/vendor/autoload.php';

class Mail{

  function __construct($sub, $to, $toName, $body){

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
      ->setUsername('testermailhhs@gmail.com')
      ->setPassword('qgfoawwzsrmvaygn')
    ;//qgfoawwzsrmvaygn


    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    // Create a message
    $message = (new Swift_Message($sub))
      ->setFrom(['testermailhhs@gmail.com' => 'John Doe'])
      ->setTo([$to => $toName])
      ->setBody($body)
      ;

    // Send the message
    if ($result = $mailer->send($message)) {
      return true;
    }

  }
}
