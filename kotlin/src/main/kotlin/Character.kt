class Character {

    private var health = 1000;
    fun hasHealth(value: Int): Boolean = health == value;
    fun hasLevel(): Int {
        return 1
    }

    fun isAlive(): Boolean {
        return true
    }

    fun damage(i: Int) {
        health -= i;
    }
}
