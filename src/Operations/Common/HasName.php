<?php

namespace SteemConnect\Operations\Common;

/**
 * Trait HasName.
 *
 * Operations naming / identification.
 */
trait HasName
{
    /**
     * @var string Name of the operation to broadcast.
     */
    protected $name = null;

    /**
     * Operation name setter.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Operation name getter.
     *
     * @return null|string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
}