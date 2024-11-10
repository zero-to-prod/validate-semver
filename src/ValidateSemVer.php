<?php

namespace Zerotoprod\ValidateSemVer;

use Zerotoprod\SemverRegex\SemverRegex;

class ValidateSemVer
{
    /**
     * Determine if a given value is a valid SemVer string.
     *
     * @param  mixed  $version
     *
     * @return bool
     */
    public static function isValid($version): bool
    {
        return is_string($version) && preg_match(SemverRegex::pattern, $version) === 1;
    }
}