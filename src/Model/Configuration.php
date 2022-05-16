<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Model;

use Alex\MagentoClient\Interfaces\ConfigurationInterface;
use Alex\MagentoClient\Interfaces\DataTransfer\UrlDataTransferInterfaces;

class Configuration implements ConfigurationInterface
{

    /**
     * @var string consumer key
     */
    protected $consumerKey;

    /**
     * @var string consumer secret
     */
    protected $consumerSecret;

    /**
     * @var string token
     */
    protected $token;

    /**
     * @var string token secret
     */
    protected $tokenSecret;

    /**
     * @var string base uri
     */
    protected $baseUri;

    /**
     * @var string base uri
     */
    protected $view;

    /**
     * @var bool errors
     */
    protected $httpErrors;

    /**
     * @param  string  $consumerKey
     * @param  string  $consumerSecret
     * @param  string  $token
     * @param  string  $tokenSecret
     * @param  string  $baseUri
     * @param  string  $view
     * @param  bool  $httpErrors
     */
    public function __construct(
        string $consumerKey,
        string $consumerSecret,
        string $token,
        string $tokenSecret,
        string $baseUri,
        string $view = UrlDataTransferInterfaces::LANG_UK,
        bool $httpErrors = false
    ) {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->token = $token;
        $this->tokenSecret = $tokenSecret;
        $this->baseUri = $baseUri;
        $this->view = $view;
        $this->httpErrors = $httpErrors;
    }

    /**
     * @return string
     */
    public function getConsumerKey(): string
    {
        return $this->consumerKey;
    }

    /**
     * @return string
     */
    public function getConsumerSecret(): string
    {
        return $this->consumerSecret;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getTokenSecret(): string
    {
        return $this->tokenSecret;
    }

    /**
     * @param string $view
     *
     * @return string
     */
    public function getBaseUri(string $view): string
    {
        return $this->baseUri . UrlDataTransferInterfaces::DEFAULT_URL . $view;
    }

    /**
     * @return bool
     */
    public function getHttpErrors(): bool
    {
        return $this->httpErrors;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }
}
