<?php

namespace Zerotoprod\ValidateSemVer;

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
        return is_string($version)
            && preg_match(
                '/^(?P<major>0|[1-9]\d*)\.'
                .'(?P<minor>0|[1-9]\d*)\.'
                .'(?P<patch>0|[1-9]\d*)'
                .'(?:-'
                .'(?P<prerelease>'
                .'(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)'
                .'(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*'
                .'))?'
                .'(?:\+'
                .'(?P<buildmetadata>'
                .'[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*'
                .'))?$/',
                $version
            ) === 1;
    }
}