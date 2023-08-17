<?php

namespace App\Domains\CarUser\Jobs;

class ShowCarFindByApiJob
{
    /**
     * @param string $vincode
     */
    public function __construct
    (
        public string $vincode,
    )
    {}

    /**
     * @return mixed
     */
    public function handle()
    {
        $apiPrefix = "https://api.vindecoder.eu/3.1";
        $apikey = "de90a346aaeb";   // Your API key
        $secretkey = "e000435f73";  // Your secret key
        $id = "decode";
        $vin = mb_strtoupper($this->vincode);

        $controlsum = substr(sha1("{$vin}|{$id}|{$apikey}|{$secretkey}"), 0, 10);

        $data = file_get_contents("{$apiPrefix}/{$apikey}/{$controlsum}/decode/info/{$vin}.json", false);

        return json_decode($data);
    }
}
