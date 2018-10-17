<?php

namespace Harmony\DAL\Write;

use Harmony\DAL\Exception\ConfigurationException;
use Harmony\DAL\Exception\NotFoundException;
use Harmony\DAL\Model;

/**
 * A \Harmony\DAL\Model\Hydration\Extractor must be given to the Writer via the constructor
 */
interface Writer
{
    /**
     * @param Model $model
     *
     * @throws ConfigurationException
     *  Must be thrown when the writer has not been given a valid \Harmony\DAL\Model\Hydration\Extractor
     */
    public function create(Model $model): void;

    /**
     * @param Model $model
     *
     * @throws NotFoundException
     *  Must be thrown if no record matching the provided model is found
     *
     * @throws ConfigurationException
     *  Must be thrown when the writer has not been given a valid \Harmony\DAL\Model\Hydration\Extractor
     */
    public function delete(Model $model): void;

    /**
     * @param Model $original
     * @param Model $new
     *
     * @throws NotFoundException
     *  Must be thrown if no record matching the provided model is found
     *
     * @throws ConfigurationException
     *  Must be thrown when the writer has not been given a valid \Harmony\DAL\Model\Hydration\Extractor
     */
    public function update(Model $original, Model $new): void;
}
