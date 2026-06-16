<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts;

use M2Collective\BladeDirective\BladeDirective;

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
