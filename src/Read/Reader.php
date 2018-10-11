<?php

namespace Harmony\DAL\Read;

use Doctrine\Common\Collections\Collection;
use Harmony\DAL\Model;

interface Reader
{
    /**
     * @param Query|null $query
     * @return Collection|Model[]
     */
    public function get(Query $query = null): Collection;
}
