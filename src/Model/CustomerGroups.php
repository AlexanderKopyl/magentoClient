<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Model;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Alex\MagentoClient\ApiClient;
use Alex\MagentoClient\Interfaces\Builder\SearchCriteriaInterface;
use Alex\MagentoClient\Interfaces\CustomerGroupsInterface;
use Alex\MagentoClient\Interfaces\DataTransfer\CustomerGroupDataTransferInterface;
use Alex\MagentoClient\Interfaces\DataTransfer\UrlDataTransferInterfaces;
use Alex\MagentoClient\Service\Converter\JsonConverter;

class CustomerGroups extends ApiClient implements CustomerGroupsInterface
{

    /**
     * @inheritDoc
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria,
        $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::CUSTOMER_GROUPS_SEARCH_URL,
            $searchCriteria->build()
        );
    }

    /**
     * @inheritDoc
     */
    public function getById(
        string  $customerGroupId,
        $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {
        return $this->client->get(
            $locale . UrlDataTransferInterfaces::CUSTOMER_GROUPS_URL . $customerGroupId
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteById(
        string $customerGroupId,
        string $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {
        return $this->client->delete(
            $locale . UrlDataTransferInterfaces::CUSTOMER_GROUPS_URL . $customerGroupId
        );
    }

    /**
     * @throws GuzzleException
     * @throws \Exception
     */
    public function save(
        CustomerGroupDataTransferInterface $customerGroupDataTransfer,
        string $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {

        if($customerGroupDataTransfer->getId()) {
            return $this->update($customerGroupDataTransfer, $locale);
        }else {
            return $this->client->post(
                $locale . UrlDataTransferInterfaces::CUSTOMER_GROUPS_URL . $customerGroupDataTransfer->getId(),
                [
                    'json' => ["group" => $customerGroupDataTransfer->getData() ]
                ]
            );
        }
    }

    /**
     * @throws GuzzleException
     * @throws \Exception
     */
    protected function update(
        CustomerGroupDataTransferInterface $customerGroupDataTransfer,
        string $locale = UrlDataTransferInterfaces::LANG_RU
    ): ResponseInterface {

        $customerGroup = $this->getById((string)$customerGroupDataTransfer->getId(), $locale);

        if($customerGroup->getStatusCode() === 200) {
            $customerGroupOld = JsonConverter::convertJson($customerGroup->getBody()->getContents());
            $customerGroupNew = $customerGroupDataTransfer->getData();

            $customerGroup = array_merge($customerGroupOld, $customerGroupNew);;

            return $this->client->put(
                $locale . UrlDataTransferInterfaces::CUSTOMER_GROUPS_URL . $customerGroupDataTransfer->getId(),
                [
                    'json' => ["group" => $customerGroup]
                ]
            );
        }

        return $customerGroup;
    }
}
