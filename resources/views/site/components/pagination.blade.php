@props(['items'])
<div class="tractour-pagination" aria-label="page navigation example">
    <ul class="pagination justify-center flex pl-0">
        <!-- Previous Page Link -->
        @if ($items->onFirstPage())
            <li class="page-item m-[0_5px] first:ml-0 disabled">
                <span class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2">
                    <i class="fa fa-long-arrow-left"></i>
                </span>
            </li>
        @else
            <li class="page-item m-[0_5px] first:ml-0">
                <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2"
                    href="{{ $items->previousPageUrl() }}">
                    <i class="fa fa-long-arrow-left"></i>
                </a>
            </li>
        @endif

        <!-- Page Links -->
        @foreach ($items->links()->elements[0] as $page => $url)
            @if ($page == $items->currentPage())
                <li class="page-item m-[0_5px] first:ml-0 active">
                    <span class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2">
                        {{ $page }}
                    </span>
                </li>
            @else
                <li class="page-item m-[0_5px] first:ml-0">
                    <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2"
                        href="{{ $url }}">
                        {{ $page }}
                    </a>
                </li>
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($items->hasMorePages())
            <li class="page-item m-[0_5px] first:ml-0">
                <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2"
                    href="{{ $items->nextPageUrl() }}">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </li>
        @else
            <li class="page-item m-[0_5px] first:ml-0 disabled">
                <span class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2">
                    <i class="fa fa-long-arrow-right"></i>
                </span>
            </li>
        @endif
    </ul>
</div>