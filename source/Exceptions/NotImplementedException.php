<?php declare(strict_types=1);

namespace Monopage\Contracts\Exceptions;

class NotImplementedException extends MaintenanceException
{
    public $message = 'Functionality is not currently implemented';
}
