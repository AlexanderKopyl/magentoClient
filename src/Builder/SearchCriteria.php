<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Builder;


use Alex\MagentoClient\Interfaces\Builder\SearchCriteriaInterface;

class SearchCriteria implements SearchCriteriaInterface
{

    protected $params;

    /**
     * @inheritDoc
     */
    public function create(array $params = []): SearchCriteriaInterface
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function build(): array
    {
        $paramsToQuery = [];

        foreach ($this->params as $param => $value) {
            $paramsToQuery['query']['searchCriteria'][$param] = $value;
        }

        return $paramsToQuery;
    }
}
