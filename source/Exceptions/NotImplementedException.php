<?php declare(strict_types=1);

namespace Monopage\Contracts\Exceptions;

use Exception;

class NotImplementedException extends Exception implements ExceptionInterface
{
    public $message = 'Functionality is not currently implemented';
}
