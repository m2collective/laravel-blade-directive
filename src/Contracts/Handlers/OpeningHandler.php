<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Contracts\Handlers;

use M2Collective\BladeDirective\Contracts\BladeDirective;

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
