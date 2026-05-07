<?php

namespace App\Exceptions;

use Exception;

class UnableToUpsertEventException extends Exception
{
    public function __construct(
        string $message = 'Unable to upsert event.',
        int $code = 500, // Internal Server Error
        Exception|null $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

}
