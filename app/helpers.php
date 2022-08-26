<?php

function rakolo_slug_maker(string $input): string
{
    return Str::slug($input, '-', null);
}

function is_english(string $input): bool
{
    return strlen($input) === strlen(utf8_decode($input));
}
