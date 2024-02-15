<?php

namespace Javaabu\Forms\Support;

trait HandlesDefaultAndOldValue
{
    use HandlesBoundValues;

    private function setValue(string $name, $bind = null, $default = null)
    {
        $inputName = static::convertBracketsToDots($name);

        $boundValue = $this->getBoundValue($bind, $inputName);

        $default = is_null($boundValue) ? $default : $boundValue;

        return $this->value = old($inputName, $default);
    }
}
