<?php
declare(strict_types=1);

namespace M2Collective\BladeDirective\Concerns;

use Illuminate\Support\Facades\Blade;
use M2Collective\BladeDirective\Directive;
use M2Collective\BladeDirective\Handlers\ClosingHandler;
use M2Collective\BladeDirective\Handlers\ElseHandler;
use M2Collective\BladeDirective\Handlers\OpeningHandler;

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
     * @param Directive $directive
     * @return void
     */
    private function registerDirective(Directive $directive) : void
    {
        if($directive instanceof OpeningHandler) {
            Blade::directive($directive->openingTag(), [$directive, 'openingRender']);
        }

        if($directive instanceof ElseHandler) {
            Blade::directive($directive->elseTag(), [$directive, 'elseRender']);
        }

        if($directive instanceof ClosingHandler) {
            Blade::directive($directive->closingTag(), [$directive, 'closingRender']);
        }
    }
}
