
@extends('layouts.app')
@section('title','Koboconnect - Blog')
@section('content')	

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-item-single">
					<div class="featured-photo">
						<img src="url('{{asset(Voyager::image($posts->image))}}')">
					</div>
					<div class="text">
					
						<h2 class="post-title">{{$posts->title}}</h2>
						<p class="post-meta userPay"> Posted On: {{$posts->created_at}}</p>
							<p class="post-meta userPay2">  {!! $posts->body !!}</p>
		
	
				


</div>


										<div class="comment mt_40">

						<h2 class="mb_25">0 Comments</h2>

						                            <div class="text-danger">No Comment Found</div>
                        

						<h2 class="mt_50 mb_20">Post Comment</h2>
						<form action="{{route('BlogUsercommentDetailStore')}}" method="post">
							@csrf  
							<div class="row mb_20">
								<div class="col">
									<input  name="authors_slug" value="{{$posts->slug}}" type="hidden" class="form-control" required>
									<input  name="authors_id" value="{{$posts->id}}"type="hidden" class="form-control" required>
								</div>
								<div class="col">
									<label for="">Name</label>
									<input name="names" type="text" class="form-control" required>
								</div>
								<div class="col">
									<label for="">Email</label>
									<input  name="email" type="email" class="form-control" required>
								</div>
							</div>
							<div class="row mb_20">
								<div class="col">
									<label for="">Comment</label>
									<textarea name="comments" class="form-control h-200" cols="30" rows="10" required></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>

					</div>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget">
						<h3>Categories</h3>
						<div class="type-1">
							<ul>
								{{-- <li><a href="#">{{$cate->slug}}</a></li> --}}
								{{-- <li><a href="#">Hotel Guide</a></li>
								<li><a href="#">Business Tour</a></li>
							<li><a href="#">Restaurant</a></li> --}}
						
						
						</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


@endsection













