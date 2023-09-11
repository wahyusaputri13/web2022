@if ($paginator->hasPages())
<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <!-- pojok kiri -->
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="fa fa-angle-left"></span>
                </span>
            </a>
        </li>
        @else
        <!-- pojok kiri ketika tidak di first page -->
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="fa fa-angle-left"></span>
                </span>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <!-- posisi saat ini -->
        <li class="page-item active"><a href="#" class="page-link">{{ $page }}</a></li>
        @else
        <!-- button halaman lain -->
        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <!-- pojok kanan ketika tidak di last page -->
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">
                <span aria-hidden="true">
                    <span class="fa fa-angle-right"></span>
                </span>
            </a>
        </li>
        @else
        <!-- pojok kanan -->
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <span aria-hidden="true">
                    <span class="fa fa-angle-right"></span>
                </span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif