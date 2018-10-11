<?php

namespace Harmony\DAL\Identity;

use JsonSerializable;
use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid implements JsonSerializable
{
    private $inner;

    public function __construct(?string $uuid = null)
    {
        $this->inner = $uuid ? BaseUuid::fromString($uuid) : BaseUuid::uuid4();
    }

    public function getBinary(): string
    {
        return $this->inner->getBytes();
    }

    public function getHex(): string
    {
        return $this->inner->getHex();
    }

    public static function fromBinary(string $bytes): Uuid
    {
        return new Uuid(BaseUuid::fromBytes($bytes));
    }

    public function __toString(): string
    {
        return (string) $this->inner;
    }

    public function jsonSerialize(): string
    {
        return (string) $this;
    }
}
