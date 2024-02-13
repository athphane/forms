<?php

namespace Javaabu\Forms\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OverrideFormsDefaults
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @param  string   $framework
     * @return Response
     */
    public function handle(Request $request, Closure $next, string $framework): Response
    {
        config([
            'forms.framework' => $framework,
            'forms.inputs'    => array_merge(config('forms.inputs'), $this->getInputsConfig())
        ]);

        return $next($request);
    }

    /**
     * Get the inputs config
     *
     * @return array
     */
    protected function getInputsConfig(): array
    {
        if (property_exists($this, 'inputs_config')) {
            return $this->inputs_config;
        }

        return [];
    }
}
