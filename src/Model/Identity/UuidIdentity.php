<?php

namespace Harmony\DAL\Model\Identity;

use Harmony\DAL\Identity\Uuid;
use Harmony\DAL\Model\Identifier;

final class UuidIdentity implements Identifier
{
    private $id;

    public function __construct(Uuid $id)
    {
        $this->id = $id;
    }

    public function __toString(): string
    {
        return $this->id->getBinary();
    }
}
