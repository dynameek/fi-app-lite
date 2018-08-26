<?php
    /*  Import necessary files  */
    require __DIR__ . '/../vendor/autoload.php';
    
    /*  Get input data  */
    $phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '';
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $hobby = isset($_GET['hobby']) ? htmlspecialchars($_GET['hobby']) : '';
    
    /*  Set return values   */
    $retCode = 0;
    $retBody = 'Error: Please try again';
    
    /*  */
    require_once('../send_mail.php');
    require_once('../send_sms.php');
    
    /*  */
    if(sendSMS($phone, $hobby))
    {
        $retCode = 1;
        $retBody = 'SMS sent';
        if(sendMail($email, $hobby))
            $retBody = 'SMS and Email sent';
    }
    /*  Return  */
    echo '{"successful":'.$retCode.', "body": "'.$retBody.'"}';
?>