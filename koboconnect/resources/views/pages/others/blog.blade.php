
@extends('layouts.app')
@section('title','Koboconnect - Blog')
@section('content')	

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-item-single">
					{{-- <div class="featured-photo">
						<img src="url('{{asset(Voyager::image($posts->image))}}')">
					</div> --}}
					<div class="text">
						@foreach ( $posts as $posts )
						
							<h2 class="post-title">{{$posts->title}}</h2>
							<p class="post-meta userPay"> Posted On: {{$posts->created_at}}</p>
						<h5 class="post-subtitle">{{$posts->excerpt}}</h5>
						<a href="/blog/{{"$posts->slug"}}">
				    <button class="userPay2" style="float: right;">Read More...</button>
						</a>
						<br>
						{{-- {{ $posts->links('vendor.pagination.custom') }}	 --}}
						@endforeach
	
				


</div>


					
				</div>
			</div>

			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget">
						<h3>Categories</h3>
						<div class="type-1">
							@foreach (  $cate as $cate )
							<ul>
								<li><a href=""> {{$cate->name}}</a></li>
								{{-- <li><a href="#">Hotel Guide</a></li>
								<li><a href="#">Business Tour</a></li>
							<li><a href="#">Restaurant</a></li> --}}
						</ul>
						@endforeach
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


@endsection













