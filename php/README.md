# RPG Combat Kata

> Originally created by [Daniel Ojeda](https://twitter.com/danielojed4), [here are the slides](http://www.slideshare.net/DanielOjedaLoisel/rpg-combat-kata)

# Background

This is a fun kata that has the programmer building simple combat rules, as for a role-playing game (RPG). It is implemented as a sequence of iterations. The domain doesn't include a map or any other character skills apart from their ability to damage and heal one another.

# Instructions

1. Complete each iteration before reading the next one.

1. It's recommended you perform this kata with a pairing partner and while writing tests.

## Iteration One

<details>
  <summary>Show me!</summary>

  1. All Characters, when created, have:

    - Health, starting at 1000
    - Level, starting at 1
    - May be Alive or Dead, starting Alive (Alive may be a true/false)

  1. Characters can Deal Damage to Characters.

    - Damage is subtracted from Health
    - When damage received exceeds current Health, Health becomes 0 and the character dies

  1. A Character can Heal a Character.
    - Dead characters cannot be healed
    - Healing cannot raise health above 1000
</details>

## Iteration Two

<details>
  <summary>Show me!</summary>
  
  1. A Character cannot Deal Damage to itself.

  1. A Character can only Heal itself.

  1. When dealing damage:
    - If the target is 5 or more Levels above the attacker, Damage is reduced by 50%
    - If the target is 5 or more Levels below the attacker, Damage is increased by 50%
</details>

## Iteration Three

<details>
  <summary>Show me!</summary>
  
  1. Characters have an attack Max Range.

  1. _Melee_ fighters have a range of 2 meters.

  1. _Ranged_ fighters have a range of 20 meters.

  1. Characters must be in range to deal damage to a target.
</details>

## Retrospective

<details>
  <summary>Show me!</summary>

  - Are you keeping up with the requirements? Has any iteration been a big challenge?
  - Do you feel good about your design? Is it scalable and easily adapted to new requirements?
  - Is everything tested? Are you confident in your code?
</details>

## Iteration Four

<details>
  <summary>Show me!</summary>

  1. Characters may belong to one or more Factions.

    - Newly created Characters belong to no Faction.

  1. A Character may Join or Leave one or more Factions.

  1. Players belonging to the same Faction are considered Allies.

  1. Allies cannot Deal Damage to one another.

  1. Allies can Heal one another.
</details>

## Iteration Five

<details>
  <summary>Show me!</summary>

  1. Characters can damage non-character _things_ (props).
    - Anything that has Health may be a target
    - These things cannot be Healed and they do not Deal Damage
    - These things do not belong to Factions; they are neutral
    - When reduced to 0 Health, things are _Destroyed_
    - As an example, you may create a Tree with 2000 Health
</details>

## Retrospective

- What problems did you encounter?
- What have you learned? Any new technique or pattern?
- Share your design with others, and get feedback on different approaches.

# Base para hacer tests

Configuración básica para empezar a hacer una kata o aprender a hacer tests en los siguientes lenguajes:

- PHP con PHPUnit
- Javascript con Jest
- Typescript con Node
- Typescript con Deno
- Java con Junit y Mockito
- Scala con Munit y Scalacheck
- Kotlin con JUnit5 y MockK
- C# con xUnit (FluentAsertion) y NSubstitute (para mock)

# Configuración específica por lenguaje

## PHP con PHPUnit

1. Instalar [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install` (estando en la carpeta php)
3. `vendor/bin/phpunit` o `composer test`

### 📚 Documentación

- [PHPUnit](https://phpunit.readthedocs.io/)

## Javascript con Jest

1. Instalar [Node](http://nodejs.org/)
2. `npm install` (Estando en la carpeta javascript)
3. `npm test`

### 📚 Documentación

- [Jest](https://jestjs.io)

## [Typescript con Node](/typescript/README.md)

## Typescript con Deno

1. Instalar [Deno](https://deno.land/#installation)
2. `deno test` (Estando en la carpeta typescript)

### 📚 Documentación

- [Deno](https://deno.land/manual)
- [BDD module](https://deno.land/manual/testing/behavior_driven_development)
- [Expect module](https://deno.land/x/expect)

## Java con Junit y Mockito

1. Instalar las dependencias y tests con Maven [mvn test]
2. Ejecutar los tests con el IDE

### 📚 Documentación

- [JUnit](https://github.com/junit-team/junit/wiki)
- [Mockito](http://site.mockito.org/mockito/docs/current/org/mockito/Mockito.html)

## Scala con Munit y Scalacheck

1. `sbt` (en la carpeta scala)
2. `~test` para ejecutar los test en hot reload

### 📚 Documentación

- [Munit](https://scalameta.org/munit/docs/tests.html)
- [Scalacheck](https://github.com/typelevel/scalacheck/blob/main/doc/UserGuide.md) para testing basado en propiedades

### Linux/Mac

1. Instalar [SDKMan](https://sdkman.io/)
2. `sdk install java 11.0.12-open` instala OpenJDK
3. `sdk install sbt` una vez instalado SDKMan

### Windows

1. Instalar [OpenJDK](https://docs.microsoft.com/es-es/java/openjdk/download#openjdk-110141-lts--see-previous-releases)
2. Instalar [SBT](https://www.scala-sbt.org/download.html)

### Visual Studio Code

1. Descargar [Visual Studio Code](https://code.visualstudio.com/)
2. Instalar para VS Code [Metals](https://scalameta.org/metals/docs/editors/vscode)

## Kotlin con JUnit5 y MockK

1. Por consola: Puedes instalar dependencias y lanzar los tests con `gradlew test`
2. Usando IDE: Simplemente abre el proyecto desde el raiz de la plantilla Kotlin

### 📚 Documentación

- [JUnit5](https://junit.org/junit5/)
- [MockK](https://mockk.io/)

## C# con xUnit (con FluentAsertion) y NSubstitute (para mock)

1. Instalar Microsoft Visual Studio Community 2022
2. Abre el proyecto y se descargaran automáticamente los paquetes Nuguet necesarios

### 📚 Documentación

- [xUnit](https://xunit.net/)
- [NSubstitute](https://nsubstitute.github.io/help.html)
- [FluentAssertions](https://fluentassertions.com/introduction)

## Python

1. Instalar python 3.x
2. Una vez descargado el código fuente dentro de la carpeta \*/python/ creamos un virtual enviroment:
3. `python3 -m venv env`
4. Activamos en virtual environment:

- windows: `.\env\Scripts\activate.bat`
- linux/mac: `source env/bin/activate`

5. `pytest` para ejecutar los tests.
