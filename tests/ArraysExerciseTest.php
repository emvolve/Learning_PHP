<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/arrays_exercise.php';


final class ArraysExerciseTest extends TestCase
{

    private array $languages;

    protected function setUp(): void
    {
        $this->languages = ["PHP", "Haskell", "Java"];
    }

    public function test_language_list_empty(): void
    {
        $this->assertSame([], language_list());
    }

    public function test_language_list(): void
    {
        $this->assertSame(["PHP", "Haskell", "Java"], language_list("PHP", "Haskell", "Java"));
    }

    public function test_add_to_language_list(): void
    {
        $this->assertSame(["PHP", "Haskell", "Java", "C++"], add_to_language_list($this->languages, "C++"));
    }

    public function test_prune_language_list(): void
    {
        $this->assertSame(["Haskell", "Java"], prune_language_list($this->languages));
    }

    public function test_current_language(): void
    {
        $this->assertSame("PHP", current_language($this->languages));
    }

    public function test_language_list_length(): void
    {
        $this->assertSame(3, language_list_length($this->languages));
    }

}