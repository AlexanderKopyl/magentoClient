<?php

namespace Alex\MagentoClient\Interfaces\DataTransfer;

interface CustomerGroupDataTransferInterface
{
    /**
     * @return string|null
     */
    public function getCode(): ?string;

    /**
     * @param  string  $code
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setCode(string $code): CustomerGroupDataTransferInterface;

    /**
     * @return int|null
     */
    public function getTaxClassId(): ?int;

    /**
     * @param  int  $tax_class_id
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setTaxClassId(int $tax_class_id): CustomerGroupDataTransferInterface;

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param  int  $id
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setId(int $id): CustomerGroupDataTransferInterface;

    /**
     * @return string|null
     */
    public function getTaxClassName(): ?string;

    /**
     * @param  string  $tax_class_name
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setTaxClassName(string $tax_class_name): CustomerGroupDataTransferInterface;

    /**
     * @return array|null
     */
    public function getExtensionAttributes(): ?array;

    /**
     * @param  array  $extension_attributes
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setExtensionAttributes(array $extension_attributes): CustomerGroupDataTransferInterface;
}
