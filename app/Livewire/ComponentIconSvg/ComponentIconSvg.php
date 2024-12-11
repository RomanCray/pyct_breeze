<?php

namespace App\Livewire\ComponentIconSvg;

use Livewire\Component;

class ComponentIconSvg extends Component
{
    public $color;
    public $width;
    public $height;
    public $dataSvg;

    public function mount(
        $color = 'black',
        $width = '50',
        $height = '50',
        $dataSvg = 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJhbiI+PGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iMTAiLz48cGF0aCBkPSJtNC45IDQuOSAxNC4yIDE0LjIiLz48L3N2Zz4='
    ) {
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
        $array = explode("base64,", $dataSvg);
        $svg = base64_decode($array[1]);
        foreach (['stroke' => $color, 'width' => $width, 'height' => $height] as $key => $value) {
            $svg = preg_replace('/(<svg[^>]*?)(' . $key . '="[^"]*")?/', '$1 ' . $key . '="' . htmlspecialchars($value) . '"', $svg, 1);
        }

        $this->dataSvg = $svg;
    }

    public function render()
    {
        return view('livewire.component-icon-svg.component-icon-svg');
    }
}
