<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Model\DataTransfer;

use Alex\MagentoClient\Interfaces\DataTransfer\CustomerGroupDataTransferInterface;

class CustomerGroupDataTransfer extends DataObject implements CustomerGroupDataTransferInterface
{
    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_data['code'];
    }

    /**
     * @param  string  $code
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setCode(string $code): CustomerGroupDataTransferInterface
    {
        $this->_data['code'] = $code;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTaxClassId(): ?int
    {
        return $this->_data['tax_class_id'];
    }

    /**
     * @param  int  $tax_class_id
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setTaxClassId(int $tax_class_id): CustomerGroupDataTransferInterface
    {
        $this->_data['tax_class_id'] = $tax_class_id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->_data['id'];
    }

    /**
     * @param  int  $id
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setId(int $id): CustomerGroupDataTransferInterface
    {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxClassName(): ?string
    {
        return $this->_data['tax_class_name'];
    }

    /**
     * @param  string  $tax_class_name
     *
     * @return CustomerGroupDataTransferInterface
     */
    public function setTaxClassName(string $tax_class_name): CustomerGroupDataTransferInterface
    {
        $this->_data['tax_class_name'] = $tax_class_name;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getExtensionAttributes(): ?array
    {
        return $this->_data['extension_attributes'];
    }

    /**
     * @param  array  $extension_attributes
     */
    public function setExtensionAttributes(array $extension_attributes): CustomerGroupDataTransferInterface
    {
        $this->_data['extension_attributes'] = $extension_attributes;

        return $this;
    }

}
