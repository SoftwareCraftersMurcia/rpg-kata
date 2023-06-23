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
        $attacker = new Character();

        $damagedCharacter = new Character(750, 1);

        $attacker->damage($character, 250);

        self::assertEquals($damagedCharacter, $character);
    }

    /** @test */
    public function kills_character_without_health(): void
    {
        $character = new Character();
        $attacker = new Character();
        $deadCharacter = new Character(0, 1);
        $attacker->damage($character, 500);
        $attacker->damage($character, 501);

        self::assertEquals($deadCharacter, $character);
    }

    /** @test */
    public function kills_character_is_not_alive(): void
    {
        $character = new Character();
        $attacker = new Character();

        $attacker->damage($character, 500);
        self::assertTrue($character->isAlive());
        $attacker->damage($character, 501);
        self::assertFalse($character->isAlive());
    }

    /** @test */
    public function character_can_heal_other(): void
    {
        $healed = new Character(500);
        $expected = new Character(600);
        $doctor = new Character();

        $doctor->heal($healed, 100);
        self::assertEquals($expected, $healed);
    }

    /** @test */
    public function character_cannot_be_healed_over_max_health(): void
    {
        $healed = new Character(500);
        $expected = new Character(1000);
        $doctor = new Character();

        $doctor->heal($healed, 600);

        self::assertEquals($expected, $healed);
    }
}
