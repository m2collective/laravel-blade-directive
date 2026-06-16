<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts;

use M2Collective\BladeDirective\BladeDirective;

interface OpeningHandler extends BladeDirective
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
