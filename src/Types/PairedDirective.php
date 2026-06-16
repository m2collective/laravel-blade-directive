<?php
declare(strict_types=1);

namespace M2Collective\BladeDirectives\Types;

use M2Collective\BladeDirectives\Contracts\ClosingInterface;
use M2Collective\BladeDirectives\Contracts\OpeningInterface;

abstract class PairedDirective implements OpeningInterface, ClosingInterface
{

}
