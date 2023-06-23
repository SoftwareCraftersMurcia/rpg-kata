const STARTING_HEALTH_POINTS = 1000;
const STARTING_LEVEL = 1;

class Character {
  constructor() {
    this.healthPoints = STARTING_HEALTH_POINTS;
    this.level = STARTING_LEVEL;
    this.isAlive = true;
  }

  dealDamage(character, damage) {
    if (damage > character.healthPoints) {
      character.healthPoints = 0;
      character.isAlive = false;
      return;
    }
    character.healthPoints = character.healthPoints - damage;
  }

  heal(character, restoredLive) {
    character.healthPoints = character.healthPoints + restoredLive;
  }
}
module.exports = Character;
