<?php

namespace Boris;

/**
 * Passes values through var_export() to inspect them.
 */
class ExportInspector extends Inspector
{
    public function inspect($variable)
    {
        return sprintf(" → %s", var_export($variable, true));
    }
}
