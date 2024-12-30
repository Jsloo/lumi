@unless ($breadcrumbs->isEmpty())

    {{-- <ul> --}}
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <a href="{{ $breadcrumb->url }}" class=" text-[#ffab00] capitalize hover:text-[#ffab00]">{{ $breadcrumb->title }} </a> /
            @else
                {{ $breadcrumb->title }}
            @endif
        @endforeach
    {{-- </ul> --}}
@endunless