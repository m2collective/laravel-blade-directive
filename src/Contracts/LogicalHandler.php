<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts;

use M2Collective\BladeDirective\BladeDirective;

interface LogicalHandler extends BladeDirective
{
    /**
     * @return string
     */
    public function logicalTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function logicalRender(mixed $expression) : string;
}
