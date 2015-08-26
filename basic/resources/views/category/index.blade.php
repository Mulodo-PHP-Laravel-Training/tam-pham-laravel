@extends('app') @section('content')
<section>
    <ul>
        @foreach ($category as $v)
        <li><a href="/category/{{ $v->id }}/edit">{{ $v->name }}</a></li>
        @endforeach
    </ul>
    {!! $category->render() !!} <br>
    @if ($category->lastPage() > 1)
    <ul class="pagination">
    	<li class="{{ ($category->currentPage() == 1) ? ' disabled' : '' }}">
    		
    		{!! $category->currentPage() != 1 ? '<a href="'.$category->url(1).'">First</a>' : '<span>First</span>' !!}
    	</li>
        <li class="{{ ($category->currentPage() == 1) ? ' disabled' : '' }}">
            {!! $category->previousPageUrl() ? '<a href="'.$category->previousPageUrl().'">Prev</a>' : '<span>Prev</span>' !!}
        </li>
       
        @for($i = 1; $i <= $category->lastPage(); $i++)
        	@if (($category->currentPage() - 1) <= 5)
        		@if ($i == $category->lastPage()-2)
        			<li class="disabled"><span>...</span></li>
        		@endif
        		@if ($i < ($category->lastPage()/2) + 1 || $i == $category->lastPage() || $i == $category->lastPage() -1)
        			<li class="{{ ($category->currentPage() == $i) ? ' active' : '' }}">
		                <a href="{{ $category->url($i) }}">{{ $i }}</a>
		            </li>	
        		@endif
        		
        	@elseif (($category->lastPage() - $category->currentPage()) <= 5)
        		
        		@if ($i == 3)
        			<li class="disabled"><span>...</span></li>
        		@endif
        		@if ($i > ($category->lastPage()/2) - 1 || $i == 1 || $i == 2)
        			<li class="{{ ($category->currentPage() == $i) ? ' active' : '' }}">
		                <a href="{{ $category->url($i) }}">{{ $i }}</a>
		            </li>	
        		@endif
        	@else
        		@if ($i == 3 || ($i == $category->lastPage()-2))
        			<li class="disabled"><span>...</span></li>
        		@endif
        		@if (($i >= $category->currentPage() - 3 && $i <= $category->currentPage() + 3) || $i == 1 || $i == 2 || $i == $category->lastPage() || $i == $category->lastPage() -1)
        			<li class="{{ ($category->currentPage() == $i) ? ' active' : '' }}">
		                <a href="{{ $category->url($i) }}">{{ $i }}</a>
		            </li>
        		@endif
        	@endif
            
    	@endfor
            <li class="{{ !$category->nextPageUrl() ? ' disabled' : '' }}">
                {!! $category->nextPageUrl() ? '<a href="'.$category->nextPageUrl().'">Next</a>' : '<span>Next</span>' !!}
            </li>
        <li class="{{ !$category->nextPageUrl() ? ' disabled' : '' }}">
        	<a href="{{ $category->currentPage() == $category->lastPage() ? '' : $category->url($category->lastPage())}}">Last</a>
        </li>
    </ul>
    @endif
    <?php var_dump($category->hasMorePages());?>
    {{ $category->nextPageUrl() }}
</section>
@endsection
