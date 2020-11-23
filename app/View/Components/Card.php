<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Card Header.
     *
     * @var string $header
     */
    public $header;

    /**
     * Card body.
     *
     * @var string $body
     */
    public $body;

    /**
     * Card footer.
     *
     * @var string $footer
     */
    public $footer;

    /**
     * Create a new component instance.
     *
     * @param  string|null  $header
     * @param  string|null  $body
     * @param  string|null  $footer
     * @return void
     */
    public function __construct(string $header = '', string $body = '', string $footer = '')
    {
        $this->header = $header;
        $this->body = $body;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
