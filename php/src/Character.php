<?php declare(strict_types=1);

namespace Kata;

class Character
{
    private int $health;
    private int $level;

    public function __construct(
        int $health = 1000,
        int $level = 1
    ) {
        $this->health = $health;
        $this->level = $level;
    }

    public function receiveDamage(int $damage): void
    {
        if ($this->health < $damage) {
            $this->health = 0;
            return;
        }
        $this->health -= $damage;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }
}
