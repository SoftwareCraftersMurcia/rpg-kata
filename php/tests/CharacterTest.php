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
        $characterTest = new Character(1000, 1);

        self::assertEquals($characterTest, $character);
    }

    /** @test */
    public function damage_subtract_health_from_character(): void
    {
        $character = new Character();
        $damagedCharacter = new Character(750, 1);

        $character->receiveDamage(250);

        self::assertEquals($damagedCharacter, $character);
    }

    /** @test */
    public function kills_character_without_health(): void
    {
        $character = new Character();
        $deadCharacter = new Character(0, 1);

        $character->receiveDamage(500);
        $character->receiveDamage(501);

        self::assertEquals($deadCharacter, $character);
    }

    /** @test */
    public function kills_character_is_not_alive(): void
    {
        $character = new Character();
        $character->receiveDamage(500);
        self::assertTrue($character->isAlive());
        $character->receiveDamage(501);
        self::assertFalse($character->isAlive());
    }
}
