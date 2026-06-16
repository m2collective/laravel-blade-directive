<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

interface ClosingBladeDirective extends BladeDirective
{
    /**
     * @return string
     */
    public function closingTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function closingHandler(mixed $expression) : string;
}
