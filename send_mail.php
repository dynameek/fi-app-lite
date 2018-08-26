
<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)

function sendMail($emailAddress, $hobby)
{
    try{
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("me@nateoguns.com.ng", "Oguntuberu Nathan O.");
        $email->setSubject("FieldInsight: Oguntuberu Nathan");
        $email->addTo($emailAddress, "");
        $email->addContent("text/plain", "You just added a new hobby:"+$hobby);
        $sendgrid = new \SendGrid('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');
        
        $response = $sendgrid->send($email);
        $retVal = true;
    } catch (Exception $e) {
        $retVal = false;
    }
    
    return $retVal;
}