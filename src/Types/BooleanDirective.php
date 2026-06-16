<?php
declare(strict_types=1);

namespace M2Collective\BladeDirectives\Types;

use M2Collective\BladeDirectives\Contracts\ClosingInterface;
use M2Collective\BladeDirectives\Contracts\LogicalInterface;
use M2Collective\BladeDirectives\Contracts\OpeningInterface;

abstract class BooleanDirective implements OpeningInterface, LogicalInterface, ClosingInterface
{

}
