<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Handlers;

use M2Collective\BladeDirective\Directive;

interface ElseHandler extends Directive
{
    /**
     * @return string
     */
    public function elseTag(): string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function elseRender(mixed $expression): string;
}
