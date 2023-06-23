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
      it("should set the character's health to 0", function () {
        const attacker = new Character();
        const victim = new Character();

        attacker.dealDamage(victim, 2000);

        expect(victim.healthPoints).toBe(0);
      });
    });
  });
});
