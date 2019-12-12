# aoc_in_php
Advent of Code 2019 in PHP

This repo provides example files for implementing and unit-testing
Advent of Code 2019 (https://adventofcode.com) puzzles. The example
file is primed for the first puzzle.

After adding a new class in the `src` directory, run this command
to add the new class to the autoloader:
```
./phpab-1.25.8.phar -o src/autoload.php src
```

To run the tests in a specific file, use a command like this:
```
./phpunit --bootstrap src/autoload.php tests/Advent01Test.php
```
