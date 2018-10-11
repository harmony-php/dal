<?php

namespace Harmony\DAL\Read;

use Doctrine\Common\Collections\Collection;
use Harmony\DAL\Model;

interface Reader
{
    /**
     * @param Query $query
     * @return Collection|Model[]
     */
    public function get(Query $query): Collection;
}
