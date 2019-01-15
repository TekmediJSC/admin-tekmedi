@if ($paginator->hasPages())
    <div class="vw-page-navigation-pagination">
        @if ($paginator->onFirstPage())
            <i class="icon-iconic-left"></i>
        @else
            <a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="icon-iconic-left"></i></a>
        @endif

        <?php
        $start = $paginator->currentPage() - 2;
        $end = $paginator->currentPage() + 2;
        if ($start < 1) {
            $start = 1;
            $end += 1;
        }
        if ($end >= $paginator->lastPage())
            $end = $paginator->lastPage();
        ?>

        @if($start > 1)
            <a class="page-numbers" href="{{ $paginator->url(1) }}">{{1}}</a>
            @if($paginator->currentPage() != 4)
                <span class="page-link">...</span>
            @endif
        @endif
        @for ($i = $start; $i <= $end; $i++)
            <a class="page-numbers {{($paginator->currentPage() == $i) ? 'current' : ''}}" href="{{ $paginator->url($i) }}">{{$i}}</a>
        @endfor
        @if($end < $paginator->lastPage())
            @if($paginator->currentPage() + 3 != $paginator->lastPage())
                <span class="page-link">...</span>
            @endif
            <a class="page-numbers" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
        @endif

        @if ($paginator->hasMorePages())
            <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                <i class="icon-iconic-right"></i>
            </a>
        @else
            <i class="icon-iconic-right"></i>
        @endif
    </div>
@endif