@if ($paginator->hasPages())
    <ul class="pagination" style="margin-top: 10px; display: inline-flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="disabled"><i class="icon ion-md-arrow-round-back"></i></li> -->
        @else
            <a href="/eredmenyek{{ $paginator->previousPageUrl() }}" rel="prev"><li class="item"><i class="icon ion-md-arrow-round-back"></i></li></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active-pagination"><span>{{ $page }}</span></li>
                    @else
                        <a href="/eredmenyek{{ $url }}"><li class="item">{{ $page }}</li></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="/eredmenyek{{ $paginator->nextPageUrl() }}" rel="next"><li class="item"><i class="icon ion-md-arrow-round-forward"></i></li></a>
        @else
            <!--<li class="disabled item"><i class="icon ion-md-arrow-round-forward"></i></li>-->
        @endif
    </ul>
@endif
