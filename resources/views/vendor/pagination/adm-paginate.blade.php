@if ($paginator->hasPages())
    <ul class="pagination pagination" style="margin-top: 10px; display: inline-flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="disabled item"><span><i class="icon ion-md-arrow-round-back"></i></span></li> -->
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><li class="item"><i class="icon ion-md-arrow-round-back"></i></li></a>
        @endif

        @if($paginator->currentPage() > 3)
            <a href="/eredmenyek{{ $paginator->url(1) }}"> <li class="hidden-xs item">1</li></a>
        @endif
        @if($paginator->currentPage() > 4)
            <li class="disabled item"><span>...</span></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="item active-pagination"><span>{{ $i }}</span></li>
                @else
                    <a href="/eredmenyek{{ $paginator->url($i) }}"><li class="item">{{ $i }}</li></a>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li class="disabled item"><span>...</span></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <a href="/eredmenyek{{ $paginator->url($paginator->lastPage()) }}"><li class="hidden-xs item">{{ $paginator->lastPage() }}</li></a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="/eredmenyek{{ $paginator->nextPageUrl() }}" rel="next"><li class="item"><i class="icon ion-md-arrow-round-forward"></i></li></a>
        @else
            <!-- <li class="item disabled"><i class="icon ion-md-arrow-round-forward"></i></li> -->
        @endif
    </ul>
@endif
