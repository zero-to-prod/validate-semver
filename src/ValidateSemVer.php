<?php

namespace Zerotoprod\ValidateSemVer;

use Zerotoprod\RegexSemver\RegexSemver;

/**
 * Validates a SemVer String
 *
 * @link https://github.com/zero-to-prod/validate-semver
 */
class ValidateSemVer
{
    /**
     * Determine if a given value is a valid SemVer string.
     *
     * @param  mixed  $version
     *
     * @return bool
     * @link https://github.com/zero-to-prod/validate-semver
     */
    public static function isValid($version): bool
    {
        return is_string($version) && preg_match(RegexSemver::pattern, $version) === 1;
    }
}