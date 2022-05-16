<?php

namespace Alex\MagentoClient\Interfaces\Builder;

interface SearchCriteriaInterface
{
    /**
     * @return array
     */
    public function build(): array;

    /**
     * @param  array  $params
     *
     * @return SearchCriteriaInterface
     */
    public function create(array $params = []): SearchCriteriaInterface;
}
