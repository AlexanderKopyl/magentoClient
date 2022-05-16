<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Model;

use Psr\Http\Message\ResponseInterface;
use Alex\MagentoClient\ApiClient;
use Alex\MagentoClient\Builder\Query;
use Alex\MagentoClient\Interfaces\DataTransfer\UrlDataTransferInterfaces;
use Alex\MagentoClient\Interfaces\StoreInterface;

class Store extends ApiClient implements StoreInterface
{
    /**
     * @inheritDoc
     */
    public function getStores(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface
    {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::STORE_URL
        );
    }

    /**
     * @inheritDoc
     */
    public function getGroupsStore(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface
    {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::STORE_GROUP_URL
        );
    }

    /**
     * @inheritDoc
     */
    public function getWebsites(string $locale = UrlDataTransferInterfaces::LANG_RU): ResponseInterface
    {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::STORE_WEBSITES_URL
        );
    }

    /**
     * Params must be like
     * [
     *    'query' => [
     *        current => $current
     *     ]
     * ]
     *
     * @inheritDoc
     */
    public function getStoreConfigManager(
        Query $queryBuilder,
        string $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::STORE_CONFIGS_URL,
            $queryBuilder->buildQuery()
        );
    }
}
