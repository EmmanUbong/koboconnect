@extends('layouts.app')
@section('title','Koboconnect - Pricing')
@section('content')	

	
		
<div class="page-banner">
	<h1>Pricing</h1>
	<nav>
		<ol class="breadcrumb justify-content-center">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Pricing</li>
		</ol>
	</nav>
</div>

<div class="page-content">
	<div class="container">
		<div class="row pricing">

						<div class="col-lg-4 mb_30">
				<div class="card mb-5 mb-lg-0">
					<div class="card-body">
						<h5 class="card-title text-muted text-uppercase text-center">Free</h5>
						<h6 class="card-price text-center">$0<span class="period">/1 Days</span></h6>
						<hr>
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fas fa-check"></i></span>1 Listing Allowed</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>1 Amenities per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>2 Photos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>2 Videos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>2 Social Items per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>2 Additional Features per Listing</li>
							<li>
																<span class="fa-li"><i class="fas fa-times"></i></span>
								Featured Listing Not Allowed
															</li>
						</ul>
						<a href="customer/login.html" class="btn btn-block btn-primary">
														Enroll Now
													</a>
					</div>
				</div>
			</div>
						<div class="col-lg-4 mb_30">
				<div class="card mb-5 mb-lg-0">
					<div class="card-body">
						<h5 class="card-title text-muted text-uppercase text-center">Standard</h5>
						<h6 class="card-price text-center">$10<span class="period">/30 Days</span></h6>
						<hr>
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Listing Allowed</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Amenities per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Photos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Videos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Social Items per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Additional Features per Listing</li>
							<li>
																<span class="fa-li"><i class="fas fa-check"></i></span>
								Featured Listing Allowed
															</li>
						</ul>
						<a href="customer/login.html" class="btn btn-block btn-primary">
														Buy Now
													</a>
					</div>
				</div>
			</div>
						<div class="col-lg-4 mb_30">
				<div class="card mb-5 mb-lg-0">
					<div class="card-body">
						<h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
						<h6 class="card-price text-center">$45<span class="period">/60 Days</span></h6>
						<hr>
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Listing Allowed</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Amenities per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Photos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Videos per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Social Items per Listing</li>
							<li><span class="fa-li"><i class="fas fa-check"></i></span>20 Additional Features per Listing</li>
							<li>
																<span class="fa-li"><i class="fas fa-check"></i></span>
								Featured Listing Allowed
															</li>
						</ul>
						<a href="customer/login.html" class="btn btn-block btn-primary">
														Buy Now
													</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection