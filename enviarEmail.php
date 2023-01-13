<?php
require './PHPMailerAutoload.php';
function sendEmail($destinatario, $asunto, $cuerpo)
{
    // Create a new PHPMailer instance
    $mail = new PHPMailer();
    $mail->IsSMTP();

    //Configuracion servidor mail
    $mail->From = "pruebascongresomatexv@gmail.com"; //remitente
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; //seguridad
    $mail->Host = "smtp.gmail.com"; // servidor smtp
    $mail->Port = 587; //puerto
    $mail->Username = 'pruebascongresomatexv@gmail.com'; //nombre usuario
    $mail->Password = 'xxraindvupfonqly'; //contraseña

    //Agregar destinatario
    $mail->AddAddress($destinatario);
    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;

    // Enviar
    return $mail->Send();
}
