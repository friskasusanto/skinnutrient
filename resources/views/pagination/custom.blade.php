@if ($paginator->hasPages())
<ul class="pagination">
    @if ($paginator->onFirstPage())
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </span> 
            <span class="sr-only">Previous</span>
        </a>
    </li>
    @else
    <li class="page-item">
        <a class="page-link"href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">← Previous</a>
        <span aria-hidden="true">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </span> 
        <span class="sr-only">Previous</span>
    </li>
    @endif

    @foreach ($elements as $element)
           
        @if (is_string($element))
            <li class="page-item"><span>{{ $element }}</span></li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </span> 
            <span class="sr-only">Next</span>
        </a>
    </li>
    @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif 