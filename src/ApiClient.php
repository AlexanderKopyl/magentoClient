<?php

declare(strict_types=1);

namespace Alex\MagentoClient;

use GuzzleHttp\Client;

abstract class ApiClient
{
    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @param  Client  $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
