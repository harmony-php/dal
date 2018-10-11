<?php

namespace Harmony\DAL\Model\Helper;

use Harmony\DAL\Model\Exception\PropertyUndefinedException;

trait UsesPrivateAttributes
{
    private $attributes = [];

    private function set(string $property, $value): self
    {
        $this->attributes[$property] = $value;
        return $this;
    }

    /**
     * @param string $property
     * @param mixed $default
     *  The default value to return if the property has not been set. Callbacks may be
     *  passed here to perform custom logic if desired.
     * @return mixed
     *
     * @throws PropertyUndefinedException If the PropertyDefault::THROW_UNDEFINED() enum is supplied as a default and
     *  the requested property has not been defined.
     */
    private function get(string $property, $default = null)
    {
        if (!isset($this->attributes[$property])) {
            if ($default == PropertyDefault::THROW_UNDEFINED()) {
                throw new PropertyUndefinedException("Property `$property` is not defined.");
            }

            if (is_callable($default)) {
                return call_user_func($default);
            }

            return $default;
        }

        return $this->attributes[$property];
    }
}
