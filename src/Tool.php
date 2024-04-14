<?php

namespace Demo\PhpUnittestExample;

class Tool
{
    function add($a, $b)
    {
        return $a + $b;
    }

    function throwException()
    {
        throw new \Exception('This is an exception');
    }

    function createInvoice($data)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://api.example.com/invoice', $data);

        return $res;
    }
}
