<?php

namespace Boris;

/**
 * Passes values through var_export() to inspect them.
 */
class ExportInspector extends Inspector
{
    public function inspect($variable, $output)
    {
        return sprintf("%s\n → %s", $output, var_export($variable, true));
    }
}
