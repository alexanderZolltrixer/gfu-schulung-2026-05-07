<?php

namespace App\Data\Attributes\Validation;

use Attribute;
use Carbon\Carbon;
use Spatie\LaravelData\Support\Validation\ValidationRule;

#[Attribute]
class NoWeekends extends ValidationRule
{

    public function validate(string $attribute, mixed $value, \Closure $fail): void{
        $date =Carbon::parse($value);
        if ($date->isWeekend()) {
            $fail('Das gewählte Datum für :attribute liegt auf einem Wochenende. wir schulen nur Mo-Fr.');
        }
    }
}
