<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts\Handlers;

use M2Collective\BladeDirective\Contracts\Directive;

interface ClosingHandler extends Directive
{
    /**
     * @return string
     */
    public function closingTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function closingRender(mixed $expression) : string;
}
