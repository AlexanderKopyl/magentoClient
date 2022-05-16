<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Builder;

use Alex\MagentoClient\Interfaces\Builder\QueryInterface;

class Query implements QueryInterface
{

    protected $params;

    /**
     * @inheritDoc
     */
    public function create(array $params = []): QueryInterface
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function buildQuery(): array
    {
        $paramsToQuery = [];

        foreach ($this->params as $param => $value) {
            $paramsToQuery['query'][$param] = $value;
        }

        return $paramsToQuery;

    }

    public function buildQueryFormParams(): array
    {
        $paramsToQuery = [];

        foreach ($this->params as $param => $value) {
            $paramsToQuery['form_params'][$param] = $value;
        }

        return $paramsToQuery;
    }
}
