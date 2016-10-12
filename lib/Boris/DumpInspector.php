<?php

namespace Boris;

/**
 * Passes values through var_dump() to inspect them.
 */
class DumpInspector extends Inspector
{
    public function inspect($variable, $output)
    {
        ob_start();
        var_dump($variable);
        return sprintf("%s\n → %s", $output, trim(ob_get_clean()));
    }
}
