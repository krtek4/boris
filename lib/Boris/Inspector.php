<?php

namespace Boris;

/**
 * Something that is capable of returning a useful representation of a variable.
 */
abstract class Inspector
{
    const MAGIC = '/* INSPECT VALUE */';
    /**
     * Return a debug-friendly string representation of $variable.
     *
     * @param mixed $variable
     * @param string $output
     *
     * @return string
     */
    public abstract function inspect($variable, $output);

    public function makeInspectable($input) {
        return str_replace(static::MAGIC, 'return', $input);
    }

    public function isInspectable($input) {
        return strpos($input, Inspector::MAGIC) !== false;
    }
}
