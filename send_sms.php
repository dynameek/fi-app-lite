<?php
    use Twilio\Rest\Client;
    use Twilio\Exceptions\EnvironmentException;
    function sendSMS($phoneNum, $hobby)
    {
        #
        $retVal = false;
        
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'ACc3f1ed418936760225a2ff30603d53d1'; #Intentionally kept visible
        $auth_token = '95d4fbc13d752276085374a2267e6de7';   # Intentionally kep visible
        
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+18053077688";
        $SMS_params = ['from' => $twilio_number, 'body' => 'You just added a new hobby:'. $hobby];
        
        try
        {
            $client = new Client($account_sid, $auth_token);
            $response = $client->messages->create('+'.trim($phoneNum), $SMS_params);
            if($response->error_code === null)
                $retVal = true;
        }catch(EnvironmentException $e)
        {
            //echo $e->getMessage();
            $retVal = false;
        }
        
        return $retVal;
    }