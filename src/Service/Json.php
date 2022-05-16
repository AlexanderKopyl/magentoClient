<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Service;


use Alex\MagentoClient\Interfaces\SerializerInterface;

class Json implements SerializerInterface
{
    /**
     * @inheritDoc
     */
    public function serialize($data)
    {
        $result = json_encode($data);
        if (false === $result) {
            throw new \Exception("Unable to serialize value. Error: " . json_last_error_msg());
        }
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function unserialize($string)
    {
        if ($string === null) {
            throw new \Exception(
                'Unable to unserialize value. Error: Parameter must be a string type, null given.'
            );
        }
        $result = json_decode($string, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Unable to unserialize value. Error: " . json_last_error_msg());
        }
        return $result;
    }
}
