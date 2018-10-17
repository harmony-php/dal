<?php

namespace Harmony\DAL\Read;

use Doctrine\Common\Collections\Collection;
use Harmony\DAL\Exception\ConfigurationException;
use Harmony\DAL\Exception\NotFoundException;
use Harmony\DAL\Model;

/**
 * A \Harmony\DAL\Model\Hydration\Hydrator must be given to the Reader via the constructor
 */
interface Reader
{
    /**
     * @param Query $query
     * @return Collection|Model[]
     *
     * @throws ConfigurationException
     *  Must be thrown when the reader has not been given a valid \Harmony\DAL\Model\Hydration\Hydrator
     */
    public function get(Query $query): Collection;

    /**
     * @param Query $query
     * @return Model
     *
     * @throws NotFoundException
     *  Must be thrown if no record matching the provided query is found
     *
     * @throws ConfigurationException
     *  Must be thrown when the reader has not been given a valid \Harmony\DAL\Model\Hydration\Hydrator
     */
    public function getFirst(Query $query): Model;

    /**
     * @param Query $query
     * @return Model
     *
     * @throws NotFoundException
     *  Must be thrown if no record matching the provided query is found
     *
     * @throws ConfigurationException
     *  Must be thrown when the reader has not been given a valid \Harmony\DAL\Model\Hydration\Hydrator
     */
    public function getLast(Query $query): Model;
}
