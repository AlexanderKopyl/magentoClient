<?php

declare(strict_types=1);

namespace Alex\MagentoClient;

use GuzzleHttp\Client,
    GuzzleHttp\HandlerStack,
    GuzzleHttp\Subscriber\Oauth\Oauth1;
use Alex\MagentoClient\Interfaces\ConfigurationInterface;

class ApiFactory
{
    /**
     * @var ConfigurationInterface
     */
    protected ConfigurationInterface $configuration;

    /**
     * @var string
     */
    private const SIGNATURE_METHOD = 'HMAC-SHA256';

    /**
     * @var Client|null
     */
    private ?Client $client = null;

    /**
     * Constructor.
     *
     * @param  ConfigurationInterface  $configuration
     */
    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Get new api client.
     *
     * @return Client
     */
    public function getApiClient(): Client
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1(
            [
                'consumer_key' => $this->configuration->getConsumerKey(),
                'consumer_secret' => $this->configuration->getConsumerSecret(),
                'token' => $this->configuration->getToken(),
                'token_secret' => $this->configuration->getTokenSecret(),
                'signature_method' => self::SIGNATURE_METHOD,
            ]
        );

        $stack->push($middleware);

        if(!$this->client) {
            $this->client = new Client(
                [
                    'base_uri' => $this->configuration->getBaseUri(
                        $this->configuration->getView()
                    ),
                    'handler' => $stack,
                    'auth' => 'oauth',
                    'headers' => [
                        'Content-Type' => 'application/json'
                    ],
                    'http_errors' => $this->configuration->getHttpErrors(),
                ]
            );
        }

        return $this->client;
    }

    /**
     * @return ConfigurationInterface
     */
    public function getConfiguration(): ConfigurationInterface
    {
        return $this->configuration;
    }
}
