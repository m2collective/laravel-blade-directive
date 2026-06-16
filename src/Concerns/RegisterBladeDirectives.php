<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Concerns;

use Illuminate\Support\Facades\Blade;
use M2Collective\BladeDirective\BladeDirective;
use M2Collective\BladeDirective\ClosingBladeDirective;
use M2Collective\BladeDirective\LogicalBladeDirective;
use M2Collective\BladeDirective\OpeningBladeDirective;

trait RegisterBladeDirectives
{
    /**
     * @param array $directives
     * @return void
     */
    private function registerBladeDirectives(array $directives) : void
    {
        if($directives !== []) {
            foreach ($directives as $directive) {
                $this->registerBladeDirective($directive);
            }
        }
    }

    /**
     * @param BladeDirective $directive
     * @return void
     */
    private function registerBladeDirective(BladeDirective $directive) : void
    {
        if($directive instanceof OpeningBladeDirective) {
            Blade::directive($directive->openingTag(), [$directive, 'openingHandler']);
        }

        if($directive instanceof LogicalBladeDirective) {
            Blade::directive($directive->logicalTag(), [$directive, 'logicalHandler']);
        }

        if($directive instanceof ClosingBladeDirective) {
            Blade::directive($directive->closingTag(), [$directive, 'closingHandler']);
        }
    }
}
