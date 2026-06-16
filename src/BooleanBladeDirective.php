<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

use M2Collective\BladeDirective\Contracts\ClosingHandler;
use M2Collective\BladeDirective\Contracts\LogicalHandler;
use M2Collective\BladeDirective\Contracts\OpeningHandler;

abstract class BooleanBladeDirective implements ClosingHandler, LogicalHandler, OpeningHandler
{

}
