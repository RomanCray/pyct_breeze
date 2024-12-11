<?php

namespace App\Livewire\IconSvg;

use Livewire\Component;

class IconSvg extends Component
{
    public $color;
    public $class;
    public $viewBox;

    public function mount($color = 'black', $class = '', $viewBox = '0 0 25 32')
    {
        $this->color = $color;
        $this->class = $class;
        $this->viewBox = $viewBox;
    }

    public function render()
    {
        return view('livewire.icon-svg.icon-svg');
    }
}
