<?php

namespace App\Enums;

abstract class BaseEnum
{
    /**
     * @var int
     */
    private $state = 0;

    /**
     * @param int $flag
     *
     * @return BaseEnum
     */
    final public function addFlag(int $flag): self
    {
        $this->state |= $flag;

        return $this;
    }

    /**
     * @param int $flag
     *
     * @return BaseEnum
     */
    final public function removeFlag(int $flag): self
    {
        $this->state &= (~$flag);

        return $this;
    }

    /**
     * @param int $flag
     *
     * @return BaseEnum
     */
    final public function toggleFlag(int $flag): self
    {
        $this->state ^= $flag;

        return $this;
    }

    /**
     * @param int $set
     * @param int $flag
     *
     * @return bool
     */
    final public function hasFlag(int $set, int $flag): bool
    {
        return ($this->state & $flag) === $flag;
    }

    /**
     * @param int $position
     *
     * @return int
     */
    final public function positionToFlag(int $position): int
    {
        return 1 << $position;
    }

    /**
     * @return int
     */
    final public function state(): int
    {
        return $this->state;
    }
}
