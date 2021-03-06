<?php

namespace GoDaddy\Domain\Api\Exception;

class SuggestGatewayTimeoutException extends \RuntimeException implements ServerException
{
    private $error;
    public function __construct(\GoDaddy\Domain\Api\Model\Error $error)
    {
        parent::__construct('Gateway timeout', 504);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}