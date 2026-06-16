<?php
declare(strict_types=1);

namespace M2Collective\BladeDirectives\Contracts;

use M2Collective\BladeDirectives\DirectiveInterface;

interface ClosingInterface extends DirectiveInterface
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
