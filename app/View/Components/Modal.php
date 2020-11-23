<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    /**
     * Modal id.
     *
     * @var string $id
     */
    public $id;

    /**
     * Modal head title.
     *
     * @var string $title
     */
    public $title;

    /**
     * Modal footer.
     *
     * @var string $footer
     */
    public $footer;


    /**
     * Create a new component instance.
     *
     * @param  string  $id
     * @param  string  $title
     * @param  string  $footer
     * @return void
     */
    public function __construct(string $id = '', string $title = '', string $footer = '')
    {
        $this->id = $id ?: 'modal-'.md5(uniqid());
        $this->title = $title;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
