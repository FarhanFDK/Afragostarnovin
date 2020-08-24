<?php
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'mail.afragostarnovin.ir';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'farhanabdollahi@afragostarnovin.ir';
        $mail->Password   = 'z?OTBYxRm#wh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = '993';

        $mail->setFrom('Farhanabdollahi@afragostarnovin.ir' , 'Farhanabdollahi');
        $mail->addAddress('Farhanabdollahiab@gmail.com' , 'Farhanabdollahi');
        $mail->isHTML(true);

        $mail->Subject = 'TEST';
        $mail->Body =  '<i>TESTING!</i>';
        $mail->AltBody = 'TEST!';
    } catch (Exception $e) {
       echo "message could not be sent {$mail->ErrorInfo}";
    }
    

?>