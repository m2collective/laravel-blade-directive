<?php
declare(strict_types=1);

namespace M2Collective\BladeDirectives\Contracts;

use M2Collective\BladeDirectives\DirectiveInterface;

interface OpeningInterface extends DirectiveInterface
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
