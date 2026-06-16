<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

interface LogicalBladeDirective extends BladeDirective
{
    /**
     * @return string
     */
    public function logicalTag(): string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function logicalHandler(mixed $expression): string;
}
