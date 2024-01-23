<?php

namespace Javaabu\Forms\Http\Middleware;

class OverrideFormsDefaults
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$scopes
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next, $framework)
    {
        config([
            'forms.framework' => $framework,
            'forms.inputs' => array_merge(config('forms.inputs'), $this->getInputsConfig())
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
