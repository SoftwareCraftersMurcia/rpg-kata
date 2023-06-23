<?php declare(strict_types=1);

namespace KataTests;

use Kata\Character;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    /** @test */
    public function instance_of_character_has_good_start_values(): void
    {
        $character = new Character();
        $characterTest = new Character(1000, 1, true);

        self::assertEquals($characterTest, $character);
    }

    /** @test */
    public function damage_subtract_health_from_character(): void
    {
        $character = new Character();
        $damagedCharacter = new Character(750, 1, true);

        $character->receiveDamage(250);

        self::assertEquals($damagedCharacter, $character);
    }

    /** @test */
    public function killer_damage_kills_character(): void
    {
        $character = new Character();
        $deadCharacter = new Character(0, 1, false);

        $character->receiveDamage(500);
        $character->receiveDamage(501);

        self::assertEquals($deadCharacter, $character);
    }
}
