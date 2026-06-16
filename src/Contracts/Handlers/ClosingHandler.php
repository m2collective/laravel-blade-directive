<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts\Handlers;

use M2Collective\BladeDirective\Contracts\BladeDirective;

interface ClosingHandler extends BladeDirective
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
