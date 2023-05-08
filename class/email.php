<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class email extends PHPMailer{
    private $mail;
    function __construct(){
        $this->mail = new PHPMailer(true);
        $h=new SMTP();
       
    }
        
    /**
     * send
     *
     * @return void
     */
    public function send(){
        try {
            //Server settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = 'fahlaouimohammed@gmail.com';                     //SMTP username
            $this->mail->Password   = 'nmdftcxzpycuqqfy';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $this->mail->setFrom('fahlaouimohammed@gmail.com', 'Mailer');
            $this->mail->addAddress('youssefouhba@gmail.com', 'Youssef ouhba');     //Add a recipient
                           //Name is optional
            
            
        
            //Attachments
          
        
            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $this->mail->send();
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

}
?>