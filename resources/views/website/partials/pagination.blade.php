@push('css')
    <style>
        .pagination ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .pagination a {
            display: inline-block;
            padding: 10px 18px;
            color: #222;
        }

        /* ONE */
        .pagination.p1{
            justify-content: center;
        }
        .p1 a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            padding: 0;
            text-align: center;
            text-decoration: none;
        }

        .p1 a.is-active {
            background-color: #0ee951;
            border-radius: 100%;
            color: #fff;
        }
    </style>
@endpush


@if ($paginator->hasPages())
    <div class="pagination p1">
        <ul>
            {{-- First Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="javascript:void()" rel="prev">
                    &laquo;
                </a>
            @else
                <a href="{{ \Request::url() }}" rel="prev">
                    &laquo;
                </a>
            @endif

            @if ($paginator->onFirstPage())
                <a href="javascript:void()">
                    <li>
                        < </li>
                </a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}">
                    <li>
                        < </li>
                </a>
            @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="is-active" href="javascript:void()">
                        <li>{{ $element }}</li>
                    </a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="is-active" href="javascript:void()">
                                <li>{{ $page }}</li>
                            </a>
                        @else
                            <a href="{{ $url }}">
                                <li>{{ $page }}</li>
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <li>></li>
                </a>
            @else
                <a href="javascript:void()" rel="next">
                    <li>></li>
                </a>
            @endif

            {{-- Last Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ \Request::url() . '?page=' . $paginator->lastPage() }}" rel="last"
                    aria-label="@lang('pagination.last')">&raquo;</a>
            @else
                <a href="javascript:void()" >
                    <li>
                        &raquo;
                    </li>
                </a>
            @endif
        </ul>
    </div>
@endif
