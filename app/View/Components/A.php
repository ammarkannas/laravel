<?php

namespace App\View\Components;

use Illuminate\View\Component;

class A extends Component
{
    /**
     * link text.
     *
     * @var string $text
     */
    public $text;

    /**
     * link href.
     *
     * @var string $href
     */
    public $href;

    /**
     * Create a new component instance.
     *
     * @param  string  $text
     * @param  string  $href
     * @param  string  $route
     * @param  string  $url
     * @return void
     */
    public function __construct(string $text = '', $href = '', $route = '', $url = '')
    {
        $this->text = $text;

        if ($route) {
            $href = route($route);
        } elseif ($url) {
            $href = url($url);
        }

        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.a');
    }
}
