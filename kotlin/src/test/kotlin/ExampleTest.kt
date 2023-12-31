import org.junit.jupiter.api.Assertions
import org.junit.jupiter.api.DynamicTest
import org.junit.jupiter.api.Test
import org.junit.jupiter.api.TestFactory
import javax.xml.stream.events.Characters

class ExampleTest {

    @Test
    fun change_me_first() {
        val character = Character()
        Assertions.assertEquals("Example", "Example")
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
