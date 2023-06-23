class Character {

    private var health = 1000;
    fun hasHealth(value: Int): Boolean = health == value;
    fun hasLevel(): Int {
        return 1
    }

    fun isAlive(): Boolean = health > 0;

    fun damage(value: Int) {
        if (value > health) {
            health = 0;
            return
        }

        health -= value;
    }
}
