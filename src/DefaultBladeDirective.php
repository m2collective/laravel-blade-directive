<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

interface DefaultBladeDirective extends BladeDirective
{
    /**
     * @return string
     */
    public function tag(): string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function handler(mixed $expression): string;
}
