<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective;

use M2Collective\BladeDirective\Contracts\Handlers\ClosingHandler;
use M2Collective\BladeDirective\Contracts\Handlers\LogicalHandler;
use M2Collective\BladeDirective\Contracts\Handlers\OpeningHandler;

abstract class BooleanDirective implements ClosingHandler, LogicalHandler, OpeningHandler
{

}
