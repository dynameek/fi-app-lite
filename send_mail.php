<?php

function sendMail($emailAddress, $hobby)
{
    try{
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("me@nateoguns.com.ng", "Oguntuberu Nathan O.");
        $email->setSubject("FieldInsight: Oguntuberu Nathan");
        $email->addTo($emailAddress, "");
        $email->addContent("text/plain", "You just added a new hobby:"+$hobby);
        
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        
        $response = $sendgrid->send($email);
        $retVal = true;
    } catch (Exception $e) {
        $retVal = false;
    }
    
    return $retVal;
}