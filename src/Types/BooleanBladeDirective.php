<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Types;

use M2Collective\BladeDirective\ClosingBladeDirective;
use M2Collective\BladeDirective\LogicalBladeDirective;
use M2Collective\BladeDirective\OpeningBladeDirective;

abstract class BooleanBladeDirective implements ClosingBladeDirective, LogicalBladeDirective, OpeningBladeDirective
{

}
