<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Service\Converter;


use Alex\MagentoClient\Service\Json;

class JsonConverter
{
    /**
     * This method should only be used by \Magento\Framework\DataObject::toJson
     * All other cases should use \Magento\Framework\Serialize\Serializer\Json::serialize directly
     *
     * @param string|int|float|bool|array|null $data
     * @return bool|string
     * @throws \Exception
     */
    public static function convert($data)
    {
        $serializer = new Json();
        return $serializer->serialize($data);
    }

    /**
     * This method should only be used by \Magento\Framework\DataObject::toJson
     * All other cases should use \Magento\Framework\Serialize\Serializer\Json::serialize directly
     *
     * @param string|int|float|bool|array|null $data
     * @return bool|string
     * @throws \Exception
     */
    public static function convertJson($data)
    {
        $serializer = new Json();
        return $serializer->unserialize($data);
    }
}
