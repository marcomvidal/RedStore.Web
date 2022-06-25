<?php

namespace App\Presenters;

class SelectItem
{
    public $label;
    public $value;

    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }
}