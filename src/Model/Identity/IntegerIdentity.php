<?php

namespace Harmony\DAL\Model\Identity;

use Harmony\DAL\Model\Identifier;

final class IntegerIdentity implements Identifier
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function __toString(): string
    {
        return (string) $this->id;
    }
}
