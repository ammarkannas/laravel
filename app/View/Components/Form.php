<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Form action.
     *
     * @var string  $action
     */
    public $action;

    /**
     * Form method.
     *
     * @var string  $method
     */
    public $method;

    /**
     * Forum method field.
     *
     * @var string  $methodField
     */
    public $methodField;

    /**
     * Create a new component instance.
     *
     * @param  string  $action
     * @param  string  $method
     * @param  string  $route
     * @return void
     */
    public function __construct(string $action = '', string $method = 'GET', string $route = '', string $url = '')
    {
        if ($route) {
            $action = route($route);
        } elseif ($url) {
            $action = url($url);
        }

        $this->action = $action;
        $this->method = (in_array(strtoupper($method), ['POST', 'GET'])) ? strtoupper($method) : 'POST';
        $this->methodField = method_field($method);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
