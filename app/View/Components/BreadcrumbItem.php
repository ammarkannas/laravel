<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadcrumbItem extends Component
{
    /**
     * Breadcrumb item.
     *
     * @var string $text
     */
    public $text;

    /**
     * Breadcrumb link href.
     *
     * @var string $href
     */
    public $href;

    /**
     * Breadcrumb is active status.
     *
     * @var bool $active
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @param string $text
     * @param string $href
     * @param bool $active
     * @return void
     */
    public function __construct(string $text = '', string $href = '#', bool $active = false)
    {
        $this->text = $text;
        $this->href = $href;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb-item');
    }
}
