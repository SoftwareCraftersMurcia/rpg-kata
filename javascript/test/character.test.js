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
  });
});
