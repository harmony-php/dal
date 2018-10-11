<?php

namespace Harmony\DAL\Model\Hydration;

use Harmony\DAL\Model;

interface Extractor
{
    public function extract(Model $model): object;
}
