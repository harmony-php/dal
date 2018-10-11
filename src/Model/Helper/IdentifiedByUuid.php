<?php

namespace Harmony\DAL\Model\Helper;

use Harmony\DAL\Identity\Uuid;

trait IdentifiedByUuid
{
    private $uuid;

    public function __construct(?Uuid $uuid = null)
    {
        $this->uuid = $uuid ?: new Uuid;
    }

    public function getUuid(): Uuid
    {
        return $this->uuid;
    }
}
