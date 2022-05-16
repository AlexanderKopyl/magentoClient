<?php

namespace Alex\MagentoClient\Interfaces;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Alex\MagentoClient\Interfaces\Builder\SearchCriteriaInterface;
use Alex\MagentoClient\Interfaces\DataTransfer\CustomerGroupDataTransferInterface;

interface CustomerGroupsInterface
{
    /**
     * Get list of customer groups
     *
     * @param  SearchCriteriaInterface  $searchCriteria
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function getList(SearchCriteriaInterface $searchCriteria,string  $locale): ResponseInterface;

    /**
     * Get customer group by id
     *
     * @param  string  $customerGroupId
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function getById(string $customerGroupId,string  $locale): ResponseInterface;


    /**
     * Delete customer group by id
     *
     * @param  string  $customerGroupId
     * @param  string  $locale
     *
     * @return ResponseInterface
     *
     * @throws GuzzleException
     */
    public function deleteById(string $customerGroupId,string  $locale): ResponseInterface;

    /**
     * Update customer group
     *
     * @param  CustomerGroupDataTransferInterface $customerGroupDataTransfer
     * @param  string  $locale
     *
     * @return ResponseInterface
     */
    public function save(CustomerGroupDataTransferInterface $customerGroupDataTransfer,string  $locale): ResponseInterface;
}
