<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/HighSchoolSweetheart.php';

class HighSchoolSweetheartTest extends TestCase
{
    private HighSchoolSweetheart $highschool_sweetheart;

    protected function setUp(): void
    {
        $this->highschool_sweetheart = new HighSchoolSweetheart();
    }

    public function testFirstLetter()
    {
        $this->assertSame('J', $this->highschool_sweetheart->firstLetter(' John)'));
        $this->assertSame('j', $this->highschool_sweetheart->firstLetter('john)'));
    }

    public function testInitials()
    {
        $this->assertSame('J. S.', $this->highschool_sweetheart->initials(' John  Snow'));
        $this->assertSame('J. S.', $this->highschool_sweetheart->initials('john snow'));
        $this->assertSame('J. S.', $this->highschool_sweetheart->initials('   john      snow   '));
    }

    public function testInitial()
    {
        $this->assertSame('J.', $this->highschool_sweetheart->initial('John'));
        $this->assertSame('J.', $this->highschool_sweetheart->initial('john'));
    }
}
