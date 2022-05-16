<?php

namespace Alex\MagentoClient\Interfaces\Builder;

interface QueryInterface
{
    /**
     * @param  array  $params
     *
     * @return QueryInterface
     */
    public function create(array $params = []): QueryInterface;

    /**
     * @return array
     */
    public function buildQuery(): array;

    /**
     * @return array
     */
    public function buildQueryFormParams(): array;
}
