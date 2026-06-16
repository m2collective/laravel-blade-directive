<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Traits;

use Illuminate\Support\Facades\Blade;
use M2Collective\BladeDirective\BladeDirective;
use M2Collective\BladeDirective\Contracts\ClosingHandler;
use M2Collective\BladeDirective\Contracts\LogicalHandler;
use M2Collective\BladeDirective\Contracts\OpeningHandler;

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
        if($directive instanceof OpeningHandler) {
            Blade::directive($directive->openingTag(), [$directive, 'openingRender']);
        }

        if($directive instanceof LogicalHandler) {
            Blade::directive($directive->logicalTag(), [$directive, 'logicalRender']);
        }

        if($directive instanceof ClosingHandler) {
            Blade::directive($directive->closingTag(), [$directive, 'closingRender']);
        }
    }
}
