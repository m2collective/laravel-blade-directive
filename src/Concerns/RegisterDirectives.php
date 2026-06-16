<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Concerns;

use Illuminate\Support\Facades\Blade;
use M2Collective\BladeDirective\BladeDirective;
use M2Collective\BladeDirective\ClosingBladeDirective;
use M2Collective\BladeDirective\ElseBladeDirective;
use M2Collective\BladeDirective\OpeningBladeDirective;

trait RegisterDirectives
{
    /**
     * @param array $directives
     * @return void
     */
    private function registerDirectives(array $directives) : void
    {
        if($directives !== []) {
            foreach ($directives as $directive) {
                $this->registerDirective($directive);
            }
        }
    }

    /**
     * @param BladeDirective $directive
     * @return void
     */
    private function registerDirective(BladeDirective $directive) : void
    {
        if($directive instanceof OpeningBladeDirective) {
            Blade::directive($directive->openingTag(), [$directive, 'openingHandler']);
        }

        if($directive instanceof ElseBladeDirective) {
            Blade::directive($directive->elseTag(), [$directive, 'elseHandler']);
        }

        if($directive instanceof ClosingBladeDirective) {
            Blade::directive($directive->closingTag(), [$directive, 'closingHandler']);
        }
    }
}
