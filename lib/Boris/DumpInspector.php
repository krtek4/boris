<?php

namespace Boris;

/**
 * Passes values through var_dump() to inspect them.
 */
class DumpInspector extends Inspector
{
    public function inspect($variable)
    {
        ob_start();
        var_dump($variable);
        return sprintf(" → %s", trim(ob_get_clean()));
    }
}
