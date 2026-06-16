<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts\Handlers;

use M2Collective\BladeDirective\Contracts\BladeDirective;

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
