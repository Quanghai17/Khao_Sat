@if ($paginator->hasPages())
    <ul class="pagination justify-content-start">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item">
                    <a class="page-link"><span class="flaticon-arrow roted">{{ $element }}</span></a>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link"  href="{{ $url }}" >{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif