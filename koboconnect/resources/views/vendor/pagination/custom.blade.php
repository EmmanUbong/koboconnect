<!DOCTYPE html>
<html>

<head>
	<title>koboconnect</title>
</head>

<body>


</body>
<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center ">
		@if ($paginator->onFirstPage())
		<li class="page-item disabled">
			<a class="prevc " href="#"
			tabindex="-1">Previous</a>
		</li>
		@else
		<li class="page-item"><a class=" conti "
			href="{{ $paginator->previousPageUrl() }}">
				Previous</a>
		</li>
		@endif

		@foreach ($elements as $element)
		@if (is_string($element))
		<li class="page-item disabled">{{ $element }}</li>
		@endif

		@if (is_array($element))
		@foreach ($element as $page => $url)
		@if ($page == $paginator->currentPage())
		<li class="page-item ">
			<a class=" conti">{{ $page }}</a>
		</li>
		@else
		<li class="page-item">
			{{-- page-link --}}
			<a class=" prevc"
			href="{{ $url }}">{{ $page }}</a>
		</li>
		@endif
		@endforeach
		@endif
		@endforeach

		@if ($paginator->hasMorePages())
		<li class="page-item">
			<a class="conti "
			href="{{ $paginator->nextPageUrl() }}"
			rel="next">Next</a>
		</li>
		@else
		<li class="page-item disabled">
			<a class=" prevc" href="#">Next</a>
		</li>
		@endif
	</ul>
</nav>
	@endif

</html>
