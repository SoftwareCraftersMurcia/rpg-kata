import org.junit.jupiter.api.Assertions
import org.junit.jupiter.api.DynamicTest
import org.junit.jupiter.api.Test
import org.junit.jupiter.api.TestFactory

class ExampleTest {

    @Test
    fun `should have 1000 health if new character is created`() {
        val character = Character()
        Assertions.assertEquals(true, character.hasHealth(1000))
    }

    @Test
    fun `should start at level 1`() {
        val character = Character()
        Assertions.assertEquals(1, character.hasLevel())
    }

    @Test
    fun `should start alive`() {
        val character = Character()
        Assertions.assertEquals(true, character.isAlive())
    }

    @TestFactory
    fun dynamicTestExample() = listOf(
        1 to 1,
        2 to 2,
        3 to 3
    ).map { (input, expected) ->
        DynamicTest.dynamicTest("given $input expected $expected") {
            Assertions.assertEquals(expected, input)
        }
    }

}
