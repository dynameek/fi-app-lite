<?php
    use Twilio\Rest\Client;
    function sendSMS($phoneNum, $hobby)
    {
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'ACc3f1ed418936760225a2ff30603d53d1'; #Intentionally kept visible
        $auth_token = '95d4fbc13d752276085374a2267e6de7';   # Intentionally kep visible
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+18053077688";
        
        try{
            $client = new Client($account_sid, $auth_token);
            $client->messages->create(
                // Where to send a text message (your cell phone?)
                $phoneNum,
                array(
                    'from' => $twilio_number,
                    'body' => 'You just added a new hobby:'. $hobby
                )
            );
            $retVal = true;
        }catch(Exception $e)
        {
            $retVal = false;
        }
        
        return $retVal;
    }