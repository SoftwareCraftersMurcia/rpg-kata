const STARTING_HEALTH_POINTS = 1000;
const STARTING_LEVEL = 1;

class Character {
  constructor() {
    this.healthPoints = STARTING_HEALTH_POINTS;
    this.level = STARTING_LEVEL;
    this.isAlive = true;
  }
}
module.exports = Character;
