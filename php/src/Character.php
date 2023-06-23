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

    public function damage(Character $other, int $damage): void
    {
        if ($other->health < $damage) {
            $other->health = 0;
            return;
        }
        $other->health -= $damage;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    public function heal(Character $other, int $health): void
    {
        $other->health += $health;
    }
}
