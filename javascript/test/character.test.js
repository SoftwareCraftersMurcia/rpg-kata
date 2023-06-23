const Character = require("../src/character");

describe("Character", function () {
  describe("constructor", function () {
    it("a new character should have 1000 health points", function () {
      const character = new Character();

      expect(character.healthPoints).toBe(1000);
    });

    it("a new character should start at level 1", function () {
      const character = new Character();

      expect(character.level).toBe(1);
    });

    it("a new character should be alive", function () {
      const character = new Character();

      expect(character.isAlive).toBe(true);
    });
  });

  describe("when a character damages other character", function () {
    it("should reduce the other character's health points", function () {
      const attacker = new Character();
      const victim = new Character();

      attacker.dealDamage(victim, 100);

      expect(victim.healthPoints).toBe(900);
    });

    describe("when damage exceeded the character's health", function () {
      let attacker;
      let victim;
      beforeEach(function () {
        attacker = new Character();
        victim = new Character();

        attacker.dealDamage(victim, 2000);
      });

      it("should set the character's health to 0", function () {
        expect(victim.healthPoints).toBe(0);
      });

      it("should set the character's isAlive to false", function () {
        expect(victim.isAlive).toBe(false);
      });
    });

    describe("when a character heals another character", function() {
      function newDamagedCharacter(initialLife) {
        const damagedCharacter = new Character();
        const attacker = new Character();
        attacker.dealDamage(damagedCharacter, 1000 - initialLife);
        return damagedCharacter;
      }

      it('should restore health points to damaged character', function() {
        const healerCharacter = new Character();
        const damagedCharacter = newDamagedCharacter(400);

        healerCharacter.heal(damagedCharacter, 100);

        expect(damagedCharacter.healthPoints).toBe(500);

      });
    })
  });
});
