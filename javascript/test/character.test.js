const Character = require("../src/character");

describe("Character", function () {
  describe("constructor", function () {
    it("a new character should have 1000 health points", function () {
      const character = new Character();

      expect(character.healthPoints).toBe(1000);
    });
  });
});
