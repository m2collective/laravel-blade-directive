<?php
declare(strict_types=1);

namespace M2Collective\BladeDirectives\Contracts;

use M2Collective\BladeDirectives\DirectiveInterface;

interface LogicalInterface extends DirectiveInterface
{
    /**
     * @return string
     */
    public function logicalTag() : string;

    /**
     * @param mixed $expression
     * @return string
     */
    public function logicalHandler(mixed $expression) : string;
}
