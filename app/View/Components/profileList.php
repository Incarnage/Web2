<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profileList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $profiles;
    public function __construct($profiles)
    {
        $this->profiles = $profiles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile-list');
    }
}
