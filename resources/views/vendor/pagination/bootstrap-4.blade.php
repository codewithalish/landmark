@if ($paginator->hasPages())
    <nav>

        <ul class="pagination">
            {{-- Previous Page Link --}}
            <span class="pagination-loop" style="display: flex">

            @if ($paginator->onFirstPage())
                    <li class="page-item">
                    <a class="prev page-item" href="{{ $paginator->previousPageUrl() }}"></a>
                </li>
                @else
                    <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="prev page-item" href="{{ $paginator->previousPageUrl() }}"><i
                            class="ion-ios-arrow-forward"></i></a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())

                                <li class="page-item active" aria-current="page"><span
                                        class="page-item current">{{$page}}</span></li>
                            @else
                                <li class="page-item"> <a class="page-item" href="{{ $url }}">{{ $page }}</a></li>

                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                    <a class="next page-item" href="{{ $paginator->nextPageUrl() }}"><i class="ion-ios-arrow-back"></i></a>
                </li>
                @else
                    <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                     <a class="next page-item" href="{{ $paginator->nextPageUrl() }}"><i
                             class="ion-ios-arrow-forward"></i></a>
                </li>
                @endif
             </span>
        </ul>

    </nav>
@endif
