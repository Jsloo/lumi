<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    public bool $containerFluid;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $containerFluid)
    {
        $this->containerFluid = $containerFluid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('admin.components.base-layout', [
            'containerFluid' => $this->containerFluid
        ]);
    }
}
