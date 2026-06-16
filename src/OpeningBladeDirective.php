<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

interface OpeningBladeDirective extends BladeDirective
{
    /**
     * @return string
     */
    public function openingTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function openingHandler(mixed $expression) : string;
}
