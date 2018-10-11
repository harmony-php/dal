<?php

namespace Harmony\DAL\Write;

use Harmony\DAL\Model;

interface Writer
{
    public function create(Model $model): void;

    public function delete(Model $model): void;

    public function update(Model $original, Model $new): void;
}
