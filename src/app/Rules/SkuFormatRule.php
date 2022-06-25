<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SkuFormatRule implements Rule
{
    const PREFIX_START = 0;
    const PREFIX_LENGTH = 3;
    const SUFFIX_START = SkuFormatRule::PREFIX_LENGTH + 1;
    const SUFFIX_LENGTH = 5;

    public function passes($attribute, $value)
    {
        return $this->prefixAreLetters($value) && $this->suffixAreNumbers($value);
    }

    public function message()
    {
        return 'The :attribute must follow the following format: AAA00000';
    }

    private function prefixAreLetters($value)
    {
        return ctype_alpha(
            substr($value, SkuFormatRule::PREFIX_START, SkuFormatRule::PREFIX_LENGTH));
    }

    private function suffixAreNumbers($value)
    {
        return ctype_digit(
            substr($value, SkuFormatRule::SUFFIX_START, SkuFormatRule::SUFFIX_LENGTH));
    }
}
