class Character {
    private val MAX_HEALTH = 1000
    private var health = MAX_HEALTH
    fun hasHealth(value: Int): Boolean = health == value
    fun hasLevel(): Int = 1
    fun isAlive(): Boolean = health > 0

    fun damage(value: Int) {
        if (value > health) {
            health = 0
            return
        }

        health -= value
    }

    fun heal(value: Int) = when {
        isDead() -> Unit
        isMaxHealthExceeded(value) -> health = MAX_HEALTH
        else -> health += value
    }

    private fun isMaxHealthExceeded(value: Int) = value + health > MAX_HEALTH

    fun isDead(): Boolean = !isAlive()
}
