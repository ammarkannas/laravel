<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Alert type.
     *
     * @var string $type
     */
    public $type;

    /**
     * Alert is dismissible status.
     *
     * @var bool $dismissible
     */
    public $dismissible;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param bool $dismissible
     * @return void
     */
    public function __construct($type = 'success', $dismissible = false)
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
