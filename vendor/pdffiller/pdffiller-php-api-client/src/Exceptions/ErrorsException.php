<?php

namespace PDFfiller\OAuth2\Client\Provider\Exceptions;

use PDFfiller\OAuth2\Client\Provider\Core\Exception;

/**
 * Class ErrorsException
 * Handle exceptions with errors messages.
 * @package PDFfiller\OAuth2\Client\Provider\Exceptions
 */
class ErrorsException extends Exception
{
    protected $errors = [];

    public function __construct($errors, $message = "", $code = 0, Exception $previous = null)
    {
        $this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
