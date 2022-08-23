<?php
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class ManagerMail extends Utilisateur{
        public function sendMail($userEmail, $subject,$emailMessage){

        require 'vendor/autoload.php';
        
            try{
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;              
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;              
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.hostinger.com';                      
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'smtp@adrardev.fr';                     
            $mail->Password   = 'B733vat44@79';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      
            $mail->Port       = 465;                                   
            $mail->setFrom('smtp@adrardev.fr','secu');
            $mail->addAddress($userEmail);                   
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $emailMessage;
            $mail->send();
            
            } 
            catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

?>