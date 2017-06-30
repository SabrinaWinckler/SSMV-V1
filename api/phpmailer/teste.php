<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 3;                                 // Enable verbose debug output

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = 'gustavosatheler@gmail.com';          // SMTP username
$mail->Password = 'Satheler10';                         // SMTP password
$mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                      // TCP port to connect to

$mail->setFrom('nao.responda@ssmv.com.br', 'Seu sangue, minha vida');
$mail->AddReplyTo('nao.responda@ssmv.com.br', 'Seu sangue, minha vida');
$mail->addAddress('gustavo.satheler@alunos.unipampa.edu.br', 'Gustavo Bittencourt Satheler');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

// $para       = 'gustavosatheler@gmail.com';

// $mensagem = '<b> oi </b>';

// $de         = "SSMV - Seu sangue, minha vida";
// $email      = "nao.responda@ssmv.com.br";
// $headers    = "MIME-Version: 1.0" . "\r\n" . "Content-Type: text/html; charset=utf-8" . "\r\n" . "From:". '=?UTF-8?B?'.base64_encode($de).'?=' . "<".$email.">" . "\r\n";

// $assunto    = 'Sangue compatível.';
// $assunto    = '=?UTF-8?B?'.base64_encode($assunto).'?=';

// mail($para, $assunto, $mensagem, $headers);

?>