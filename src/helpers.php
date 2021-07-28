<?php

if (!function_exists('starts_with'))
{
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string  $haystack
     * @param  string|string[]  $needles
     * @return bool
     */
    function starts_with($haystack, $needles)
    {
        return \Illuminate\Support\Str::startsWith($haystack, $needles);
    }
}
