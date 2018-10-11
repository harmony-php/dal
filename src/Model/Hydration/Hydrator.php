<?php

namespace Harmony\DAL\Model\Hydration;

use Harmony\DAL\Model;

interface Hydrator
{
    public function hydrate(object $raw): Model;
}
