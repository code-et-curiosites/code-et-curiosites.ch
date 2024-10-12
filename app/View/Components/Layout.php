<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class Layout extends Component
{
    public function __construct(public string $layout, public string $title, public string $subtitle, public string $content) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.'.$this->layout);
    }
}
