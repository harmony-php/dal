<?php

namespace Harmony\DAL;

use Harmony\DAL\Model\Identifier;

interface Model
{
    public function getIdentifier(): Identifier;
}
