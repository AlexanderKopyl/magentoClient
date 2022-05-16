<?php

namespace Alex\MagentoClient\Interfaces;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Alex\MagentoClient\Builder\Query;
use Alex\MagentoClient\Interfaces\DataTransfer\UrlDataTransferInterfaces;

interface StoreInterface
{
    /**
     * Get stores by locale
     *
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function getStores(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface;

    /**
     * Get stores by locale
     *
     * @param  string  $locale
     *
     * @throws GuzzleException
     */
    public function getGroupsStore(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface;

    /**
     * Get stores by locale
     *
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function getWebsites(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface;


    /**
     * Get stores by locale
     *
     * @param  Query $queryBuilder
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function getStoreConfigManager(
        Query $queryBuilder,
        string $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface;


}
