<?php

namespace App\Services;

class SmsService
{
    protected $host = '';
    protected $port = '';
    protected $login = '';
    protected $password = '';
    protected $sender = '';

    public function __construct()
    {
        $this->host = config('sms.host');
        $this->port = config('sms.port');
        $this->login = config('sms.username');
        $this->password = config('sms.password');
        $this->sender = config('sms.sender');
    }

    function sendMessage($phone, $text)
    {
        $fp = fsockopen($this->host, $this->port, $errno, $errstr);
        if (!$fp) {
            return "errno: $errno \nerrstr: $errstr\n";
        }
        fwrite($fp, "GET /send/" .
            "?phone=" . rawurlencode($phone) .
            "&text=" . rawurlencode($text) .
            "&sender=" . rawurlencode($this->sender) .
            "  HTTP/1.0\n");
        fwrite($fp, "Host: " . $this->host . "\r\n");
        if ($this->login != "") {
            fwrite($fp, "Authorization: Basic " .
                base64_encode($this->login. ":" . $this->password) . "\n");
        }
        fwrite($fp, "\n");
        $response = "";
        while(!feof($fp)) {
            $response .= fread($fp, 1);
        }
        fclose($fp);
        list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
        return $responseBody;
    }
}