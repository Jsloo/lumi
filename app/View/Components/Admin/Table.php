<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Table extends Component
{
    public ?array $headers = [];

    public ?LengthAwarePaginator $paginator = null;

    /**
     * Create a new component instance.
     */
    public function __construct(?array $headers = [], ?LengthAwarePaginator $paginator = null)
    {
        $this->headers = $this->formatHeaders($headers);

        if (isset($paginator)) {
            $this->paginator = $paginator;
        }
    }

    private function formatHeaders($headers): array
    {
        return array_map(function ($header) {
            $name = is_array($header) ? $header['name'] : $header;

            return [
                'name'     => $name,
                'classes'  => $this->textAlignClasses($header['align'] ?? 'left'),
                'checkbox' => $name === 'checkbox',
                'action'   => $header['action'] ?? null
            ];

        }, $headers);
    }

    private function textAlignClasses($align): string
    {
        return [
            'left'   => 'text-start',
            'right'  => 'text-end',
            'center' => 'text-center'
        ][$align] ?? 'text-start';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('admin.components.table');
    }
}
