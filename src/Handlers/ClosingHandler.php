<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Handlers;

use M2Collective\BladeDirective\Directive;

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
