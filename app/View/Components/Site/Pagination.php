<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $items;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $items  The pagination data
     * @return void
     */
    public function __construct($items)
    {
        $this->items = $items;  // 将分页数据赋值给组件属性
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('site.components.pagination', [
            'items' => $this->items,  // 将分页数据传递给视图
        ]);
    }
}

