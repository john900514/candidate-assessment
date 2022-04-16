<?php

namespace App\Exceptions\Clubs;

use DomainException;

class LocationException extends DomainException
{
    public static function clubAlreadyExist() : self
    {
        return new self('Location already exists!');
    }
}
