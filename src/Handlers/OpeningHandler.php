<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Handlers;

use M2Collective\BladeDirective\Directive;

interface OpeningHandler extends Directive
{
    /**
     * @return string
     */
    public function openingTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function openingRender(mixed $expression) : string;
}
