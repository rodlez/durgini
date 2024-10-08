<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class MatchRule implements RuleInterface
{

    public function validate(array $data, string $field, array $params): bool
    {
        // fieldOne is the second value to match (e.g confirmedPassword) 
        $fieldOne = $data[$field];
        // fieldTwo is the param, that will be the first field to check if matches (e.g password)
        $fieldTwo = $data[$params[0]];

        // return false if NOT equal
        return $fieldOne === $fieldTwo;
    }

    public function getMessage(array $data, string $field, array $params, string $idioma): string
    {
        return "Does not match {$params[0]} field.";
    }
}
