<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Concerns;

use Illuminate\Support\Facades\Blade;
use M2Collective\BladeDirective\BladeDirective;
use M2Collective\BladeDirective\DefaultBladeDirective;
use M2Collective\BladeDirective\LogicalBladeDirective;

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
        if($directive instanceof DefaultBladeDirective) {
            Blade::directive($directive->tag(), [$directive, 'handler']);
        }

        if($directive instanceof LogicalBladeDirective) {
            Blade::directive($directive->openingTag(), [$directive, 'openingHandler']);
            Blade::directive($directive->elseTag(), [$directive, 'elseHandler']);
            Blade::directive($directive->closingTag(), [$directive, 'closingHandler']);
        }
    }
}
