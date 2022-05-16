<?php

namespace Alex\MagentoClient\Interfaces;

/**
 * Configuration interface for factory
 */
interface ConfigurationInterface
{

    /**
     * Returns consumer key.
     *
     * @return string consumer key
     */
    public function getConsumerKey(): string;

    /**
     * Returns consumer secret.
     *
     * @return string consumer secret
     */
    public function getConsumerSecret(): string;

    /**
     * Returns token.
     *
     * @return string token
     */
    public function getToken(): string;

    /**
     * Returns token secret.
     *
     * @return string token secret
     */
    public function getTokenSecret(): string;

    /**
     * Returns base uri.
     *
     * @param string $view
     *
     * @return string base uri
     */
    public function getBaseUri(string $view): string;

    /**
     * Returns http errors.
     *
     * @return bool http errors
     */
    public function getHttpErrors(): bool;

    /**
     * Returns base view.
     *
     * @return string base uri
     */
    public function getView(): string;
}
