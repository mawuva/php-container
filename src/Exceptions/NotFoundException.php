<?php

namespace Mawuva\PHPContainer\Exceptions;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class not found
 */
class NotFoundException extends Exception implements NotFoundExceptionInterface
{
    
}