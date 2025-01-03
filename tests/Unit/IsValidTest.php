<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\ValidateSemVer\ValidateSemVer;

class IsValidTest extends TestCase
{
    /**
     * @test
     * @dataProvider validSemVerProvider
     *
     * @see ValidateSemVer::isValid()
     */
    public function is_valid(string $version): void
    {
        $this->assertTrue(
            ValidateSemVer::isValid($version),
            "Failed asserting that '$version' is a valid SemVer string."
        );
    }

    /**
     * @test
     * @dataProvider invalidSemVerProvider
     *
     * @see ValidateSemVer::isValid()
     */
    public function invalid(string $version): void
    {
        $this->assertFalse(
            ValidateSemVer::isValid($version),
            "Failed asserting that '$version' is an invalid SemVer string."
        );
    }

    /**
     * Data provider for valid SemVer strings.
     *
     * @return array
     */
    public static function validSemVerProvider(): array
    {
        return [
            ['0.0.4'],
            ['1.2.3'],
            ['10.20.30'],
            ['1.1.2-prerelease+meta'],
            ['1.1.2+meta'],
            ['1.0.0-alpha'],
            ['1.0.0-alpha.beta'],
            ['1.0.0-alpha.1'],
            ['1.0.0-alpha.0valid'],
            ['1.0.0-rc.1+build.1'],
            ['1.2.3-beta'],
            ['10.2.3-DEV-SNAPSHOT'],
            ['1.2.3-SNAPSHOT-123'],
            ['1.0.0'],
            ['2.0.0+build.1848'],
            ['2.0.1-alpha.1227'],
            ['1.0.0-alpha+beta'],
            ['1.2.3----RC-SNAPSHOT.12.9.1--.12+788'],
            ['1.2.3----R-S.12.9.1--.12+meta'],
        ];
    }

    /**
     * Data provider for invalid SemVer strings.
     *
     * @return array
     */
    public static function invalidSemVerProvider(): array
    {
        return [
            ['01.1.1'],
            ['9.8.7-whatever+meta+meta'],
            ['1.2.3.DEV'],
            ['1.2.3-0123'],
            ['1.0.0-alpha_beta'],
            ['1.2-SNAPSHOT'],
            ['1.2.31.2.3----RC-SNAPSHOT.12.09.1--..12+788'],
        ];
    }
}