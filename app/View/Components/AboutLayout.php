<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

final class AboutLayout extends Component
{
     /**
     * Create a new component instance.
     */
    public function __construct(public $title = '')
    {
        //
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.about');
    }
}
