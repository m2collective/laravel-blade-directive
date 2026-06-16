<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

interface ElseBladeDirective extends BladeDirective
{
    /**
     * @return string
     */
    public function elseTag(): string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function elseHandler(mixed $expression): string;
}
