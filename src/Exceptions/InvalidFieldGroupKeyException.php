<?php

namespace Anchour\Theme\Installer\Exceptions;

use Throwable;

class InvalidFieldGroupKeyException extends \Exception
{
    public function __construct($key = "", $code = 0, Throwable $previous = null)
    {
        $message = "Requested \"$key\" from field group not found!";

        parent::__construct($message, $code, $previous);
    }
}