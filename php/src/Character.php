<?php declare(strict_types=1);

namespace Kata;

class Character
{
    private int $health;
    private int $level;
    private bool $isAlive;

    public function __construct(
        int $health = 1000,
        int $level = 1,
        bool $isAlive = true
    ) {
        $this->health = $health;
        $this->level = $level;
        $this->isAlive = $isAlive;
    }
}
