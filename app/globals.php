<?php

/*define("SMS_FROM", "MOJE COLLEGE");
define("SMS_TOKEN", "yynVuIl7CSYD4p5mXN268SPbRzqWAgpUpvrDG9me");
define("SMS_PASS", "34aa6286356326a4c0312847d6fa6ab3");*/

/*function sms_send($to, $message, $backup = false)
{
    $params = [
        'to' => $to,
        'from' => SMS_FROM,
        'message' => $message,
    ];

    static $content;
    static $token = SMS_TOKEN;

    if ($backup == true) {
        $url = 'https://api2.smsapi.com/sms.do';
    } else {
        $url = 'https://api.smsapi.com/sms.do';
    }

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $params);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));

    $content = curl_exec($c);
    $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    if ($http_status != 200 && $backup == false) {
        $backup = true;
        sms_send($to, $message, $backup);
    }

    curl_close($c);
    return $content;
}*/

    /*function sms_send($params, $backup = false ) {

        static $content;

        if($backup == true){
            $url = 'https://api2.smsapi.com/sms.do';
        }else{
            $url = 'https://api.smsapi.com/sms.do';
        }

        $c = curl_init();
        curl_setopt( $c, CURLOPT_URL, $url );
        curl_setopt( $c, CURLOPT_POST, true );
        curl_setopt( $c, CURLOPT_POSTFIELDS, $params );
        curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );

        $content = curl_exec( $c );
        $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        if($http_status != 200 && $backup == false){
            $backup = true;
            sms_send($params, $backup);
        }

        curl_close( $c );
        return $content;
    }*/
