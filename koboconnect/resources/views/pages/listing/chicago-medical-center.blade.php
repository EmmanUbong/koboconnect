@extends('layouts.app')
@section('title','Koboconnect -Artisan details')
@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<link rel="stylesheet" type="text/css" href="jquery.rateyo.min.css">


<style>



  .leftcolumn {   
	float: left;
	width: 75%;
  }
   
  /* Right column */
  .rightcolumn {
	float: left;
	width: 25%;
	padding-left: 20px;
  }
   
  /* Fake image */
  .fakeimg {
	background-color: #aaa;
	width: 100%;
	padding: 20px;
  }
   
  /* Add a card effect for articles */
  .card {
	 background-color: white;
	 padding: 20px;
	 margin-top: 20px;
  }
   
  /* Clear floats after the columns */
  .row:after {
	content: "";
	display: table;
	clear: both;
  }
   
  </style>
		
<script type='text/javascript' src='../../../../platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons' async='async'></script>

{{-- ../uploads/listing_featured_photos/5b3f69db1e4d8800b0fca61fe676d676.jpg --}}
<div class="listing-single-banner" style="background-image: url('../carosuelimage/gallery/thumbs/GARDENER.jpg');">
	<div class="bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
		
				@foreach ($users as $user)
				{{-- <h1>{{$user->company_name }}</h1> --}}
				<input type="hidden" name="Rmail" value="{{$user->email}}" class="form-control">
				<input type="hidden" name="Rid" value="{{$user->id}}" class="form-control">
				<div class="location">
					{{-- <i class="fas fa-map-marker-alt"></i> --}}
					<b>Company Name:</b> 	{{$user->company_name }}
				</div>
				<div class="review">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
						<span>(Best Reviews)</span>
						@foreach ($r5 as $r5s)
					
						<span>({{$r5s->rate}} Out of 5)</span>
					@endforeach
                    	{{-- <span>(0 Reviews)</span> --}}
				</div>
				<div class="call">
					{{-- <i class="fas fa-phone-volume"></i> --}}
					{{-- <i class="fas fa-map-marker-alt"></i> --}}
					<b>Address:</b>  {{ $user->company_address}}
				</div>
				<div class="listing-items">
					<a href="#">
						{{-- <i class="far fa-edit"></i> --}}
						<b>Artisan Type:</b> {{ $user->artisan_type}}
					</a>
					{{-- <a href="chicago-medical-center.html">
						<i class="fas fa-heart"></i> Add to Wishlist
					</a> --}}
					<a href="#" data-toggle="modal" data-target="#send_message_modal">
						<i class="far fa-envelope"></i> Report Artisan
					</a>
					@endforeach
                    <!-- Send Message Modal -->
                    <div class="modal fade modal_listing_detail" id="send_message_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
									@if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message') }}
											</div>
												@endif
												<form action="{{ route('send.usersreport') }}" method="post">
													@csrf
										<div class="form-group">
                                            <label for="">Name</label>
                                            <div>
                                                <input type="text" name="visitorname" class="form-control" required>
												@error('visitorname')
												<span class="text-danger"> {{ $message }} </span>
											  @enderror
											</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <div>
                                                <input type="email" name="email" class="form-control" required>
												
											
											  @error('email')
											  <span class="text-danger"> {{ $message }} </span>
											@enderror
											 </div>
											</div>

                                      
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <div>
                                                <input type="text" name="Phn" class="form-control">
                                           
											</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <div>
												@foreach ($users as $user)
												<input type="hidden" value="{{ $user->id}} | {{$user->company_name }} | {{ $user->company_address}} |{{ $user->artisan_type}} |{{ $user->company_phone_number}} | {{ $user->State}} |  {{ $user->nationality}}" name="artisanName" class="form-control">
												@endforeach
                                                <textarea name="content" class="form-control h-100" cols="30" rows="10" required></textarea>
												@error('content')
												<span class="text-danger"> {{ $message }} </span>
											  @enderror
											</div>
                                        </div>
                                                                                
										<div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success userPay">Send </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
                        </div>
                    </div>
                    <!-- // Send Message Modal -->

{{-- 
					<a href="#" data-toggle="modal" data-target="#report_modal">
						<i class="far fa-flag"></i> Report
					</a> --}}

				
                    <!-- Report Modal -->
                    {{-- <div class="modal fade modal_listing_detail" id="report_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
									@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
								</div>
									@endif
                                    <form action="{{ route('send.usersreport') }}" method="post">
										@csrf
                                       <div class="form-group">
                                            <label for="">Name</label>
                                            <div>
                                                <input type="text" name="visitorname" class="form-control" required>
												@error('visitorname')
												<span class="text-danger"> {{ $message }} </span>
											  @enderror
											</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <div>
                                                <input type="email" name="email" class="form-control" required>
                                          
												@error('email')
							<span class="text-danger"> {{ $message }} </span>
						  @enderror
											</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <div>
                                                <input type="text" name="Phn" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <div>
                                                <textarea name="content" class="form-control h-100" cols="30" rows="10" required></textarea>
												@error('content')
												<span class="text-danger"> {{ $message }} </span>
											  @enderror
											</div>
                                        </div>
                                                                               
										<div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success userPay">Submit </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Report Modal --> --}}


			

		<div class="social">
					<ul>
						@foreach ($users as $user)					                    	
                    	<li>
							<a href="{{ $user->facebook}}">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
												                    	
                    		<li>
							<a href="{{ $user->twiter}}">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
												                    	
                    	{{-- <li>
							<a href="#">
								<i class="fab fa-google-plus-g"> {{ $user->twiter}}</i>
							</a>
						</li>
												                    	 --}}
                    	<li>
							<a href="{{ $user->whatsapp}}">
								<i class="fab fa-whatsapp"></i>
							</a>
						</li>
						@endforeach					
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>



<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-12">
				<div class="listing-page">
					<h2><i class="fas fa-folder"></i> Description</h2>
					<p>
						
						@foreach ($users as $user)
<p><span style="font-size:1rem;">{{ $user->business_description}}</span><br></p>

	</p>
	@endforeach
					<div class="sep"></div>
					<h2><i class="fas fa-image"></i> Photos</h2>
					<div class="photo-all">
						<div class="row">
							@foreach ($users as $user)
							<div class="col-md-6 col-lg-4">
								<div class="item">
									<a href="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo1 ) }}" class="magnific">
										<img src="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo1 ) }}" alt="">
										<div class="icon">
											<i class="fas fa-plus"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="item">
									<a href="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo2 ) }}" class="magnific">
										<img src="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo2 ) }}" alt="">
										<div class="icon">
											<i class="fas fa-plus"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div>
							
							<div class="col-md-6 col-lg-4">
								<div class="item">
									<a href=".{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo3 ) }}" class="magnific">
										<img src="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo3 ) }}" alt="">
										<div class="icon">
											<i class="fas fa-plus"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div>
							
							{{-- <div class="col-md-6 col-lg-4">
								<div class="item">
									<a href="../public/uploads/listing_photos/edd4bda88ee13da3ef89a11c2cc78b33.jpg" class="magnific">
										<img src="../public/uploads/listing_photos/edd4bda88ee13da3ef89a11c2cc78b33.jpg" alt="">
										<div class="icon">
											<i class="fas fa-plus"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div> --}}
							
							{{-- <div class="col-md-6 col-lg-4">
								<div class="item">
									<a href="../public/uploads/listing_photos/06a5ed1c3398f394bc51e7398007bfe4.jpg" class="magnific">
										<img src="../public/uploads/listing_photos/06a5ed1c3398f394bc51e7398007bfe4.jpg" alt="">
										<div class="icon">
											<i class="fas fa-plus"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div> --}}
							@endforeach
						</div>
					</div>
					

										
					<div class="sep"></div>
					<h2><i class="fas fa-video"></i> Videos</h2>
					<div class="video-all">
						<div class="row">
							
							<div class="col-md-6 col-lg-4">
								{{-- item --}}
								<div class="">

									<video  width="320" height="240" autoplay >
										<source class="video-button" src="{{ asset( 'public/Videouploads/'.$user->video ) }}" type="video/mp4">
									  </video>
									{{-- <a class="video-button" href="http://www.youtube.com/watch?v=Xz2y4Wd7l1g"> --}}
										{{-- <img src="../../../../img.youtube.com/vi/Xz2y4Wd7l1g/0.jpg" alt="">
										<div class="icon">
											<i class="far fa-play-circle"></i>
										</div> --}}
										<div class="bg"></div>
									{{-- </a> --}}
								</div>
							</div>
							
							{{-- <div class="col-md-6 col-lg-4">
								<div class="item">
									<a class="video-button" href="http://www.youtube.com/watch?v=EKHQCDYuHqA">
										<img src="../../../../img.youtube.com/vi/EKHQCDYuHqA/0.jpg" alt="">
										<div class="icon">
											<i class="far fa-play-circle"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div> --}}
							
							{{-- <div class="col-md-6 col-lg-4">
								<div class="item">
									<a class="video-button" href="http://www.youtube.com/watch?v=xSTUoWYCmdo">
										<img src="../../../../img.youtube.com/vi/xSTUoWYCmdo/0.jpg" alt="">
										<div class="icon">
											<i class="far fa-play-circle"></i>
										</div>
										<div class="bg"></div>
									</a>
								</div>
							</div> --}}
						</div>
					</div>
					

					<div class="sep"></div>
					<h2>
						<i class="fas fa-map"></i> Location Map</h2>
						@foreach ($users as $user)
						
								<div class="map">
							{{-- <iframe
							width="600"
							height="450"
							style="border:0"
							loading="lazy"
							allowfullscreen
							referrerpolicy="no-referrer-when-downgrade"
							src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDxj0vTmWlWMY2OeEtFcGLGZQ9-8V8cmug
							  &q=Elibrary+Akwa Ibom+Nigeria"> --}}
							 
							<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDxj0vTmWlWMY2OeEtFcGLGZQ9-8V8cmug
						
							&q={{ $user->company_address}}+{{ $user->State}}+{{ $user->nationality}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							{{-- $user->company_address --}}
							
					
						</div>
						@endforeach

						<div class="sep"></div>
					<h2><i class="fas fa-bullhorn"></i> Services Provided</h2>
					<div class="amenities">
						<ul>
							@foreach ($users as $user)
								<li><i class="fas fa-check-square"></i> {{$user->business_services1}}</li>
								<li><i class="fas fa-check-square"></i> {{$user->business_services2}}</li>
								<li><i class="fas fa-check-square"></i> {{$user->business_services3}}</li>
								<li><i class="fas fa-check-square"></i> {{$user->business_services4}}</li>
								@endforeach
						
							</ul>
					</div>
					

					{{-- <div class="sep"></div> --}}
					{{-- <h2><i class="far fa-id-card"></i> Additional Features</h2>
					<div class="contact">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<td class="w-300">Patient Outdoor</td>
									<td>Yes</td>
								</tr>
								<tr>
									<td class="w-300">Emergency Exit</td>
									<td>Yes</td>
								</tr>
									<tr>
									<td class="w-300">Cafe Facility</td>
									<td>No</td>
								</tr>
								</table>
						</div>
					</div> --}}
					

					<div class="sep"></div>
					<h2><i class="far fa-id-card"></i> Contact Information</h2>
					<div class="contact">
						<div class="table-responsive">
							<table class="table table-bordered">
								@foreach ($users as $user)
								<tr>
									<td class="w-200">Address</td>
									<td>
										<p>{{ $user->company_address}}</p>
									</td>
								</tr>
								
								<tr>
									<td>Phone Number</td>
									<td>
										<p>{{ $user->company_phone_number}}</p>
									</td>
								</tr>
									<tr>
									<td>Email Address</td>
									<td>
										<p>{{ $user->email}}</p>
									</td>
								</tr>
								@endforeach
									{{-- <tr>
									<td>Website</td>
									<td class="website">
										<a href="http://www.chicagomedicalcenter.com/" target="_blank">http://www.chicagomedicalcenter.com</a>
									</td>
									</tr> --}}
								
							</table>
						</div>
					</div>
				
					<div class="sep"></div>
					<h2>Reviews</h2>

					<div class="review-overall">
						<div class="row">
						
						<div class="review">
                                <i class="far fa-star"></i>
                               </div>
						<div class="total">

							@foreach ($r1 as $r1s)
					
							(Overall {{$r1s->rate}} Out of 1)
							@endforeach


						
						</div>
						</div>
					</div>
					<div class="review-overall">
					<div class="row">
						<div class="review">
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							
					</div>
					<div class="total">
						@foreach ($r2 as $r2s)
					
						(Overall {{$r2s->rate}} Out of 2)
						@endforeach


					
					</div>
				</div>
					</div>

					<div class="review-overall">
				<div class="row">
					<div class="review">
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
				</div>
				<div class="total">
					@foreach ($r3 as $r3s)
					
					(Overall {{$r3s->rate}} Out of 3)
					@endforeach
				
				</div>
			</div>
					</div>

					<div class="review-overall">	
			<div class="row">
				<div class="review">
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
			</div>
			<div class="total">
				@foreach ($r4 as $r4s)
					
				(Overall {{$r4s->rate}} Out of 4)
				@endforeach

			
			</div>
		</div>
					</div>	
					<div class="review-overall">
		<div class="row">
			<div class="review">
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
				<i class="far fa-star"></i>
		</div>
		<div class="total">
			@foreach ($r5 as $r5s)
					
					(Overall {{$r5s->rate}} Out of 5)
					@endforeach
	
		</div>
	</div>


					</div>




					<div class="sep"></div>
					<h2>Write a Review</h2>
					<div class="review-form">
						<div class="container">
							<div class="row contact-form">
							  <div class="col">
								@if(Session::has('success'))
								<div class="alert alert-success text-center">
									{{Session::get('success')}}
								</div>
								
							@endif 
<form id="contact-frm" action="{{route('ratingDetailStore')}}" method="post">
	
	@foreach ($users as $user)
	{{-- <h1>{{$user->company_name }}</h1> --}}
	<input type="hidden" id="Rmail" name="Rmail" value="{{$user->email}}" class="form-control">
	<input type="hidden"  id="Rid" name="Rid" value="{{$user->id}}" class="form-control">
	@endforeach
	@csrf
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label>name</label>
				<input type="text" class="form-control" id="name" name="name" required>
				<span class="text-danger" id="name-error"></span>
			</div>
		
		<br>
			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control" id="email" name="email" required>
				<span class="text-danger" id="email-error"></span>
			</div>
			<br>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="number" class="form-control" id="phn" name="phn" required>
				<span class="text-danger" id="mobile-number-error"></span>
			</div>

			

			<br>
			<div class="form-group">
				
				<input type="hidden" class="form-control" value="0" id="rating" name="rating" required>
				<span class="text-danger" id="subject-error"></span>
			</div>
		

		</div>
		
	
	</div>

	{{-- <div id="rateYo"></div>		 --}}
	 <!--star raintg-->
	 <div id="" data-rating="3"   data-rateyo-read-only="false" class="rateYo bookrating" required></div>  
	
	 <br>
	<!-- to show selected star value-->                   
	<input type="hidden" id="starvalue" value="0" required>
	{{-- <input type="text" class="bookrating">  --}}
	<br>
<!--to store rating name and language -->             
  <input type="hidden" class="bookId" value="17" required>
  <br>						
<button type="submit" id="setText"  class="btn btn-primary mt_10">Send </button>

</form>
 </div>
</div>
</div>
<script type="text/javascript" 
		src="jquery.min.js"></script>
<script type="text/javascript" 
		src="jquery.rateyo.min.js"></script>
<script>
	// $("#rateYo").rateYo({

	// 	rating: 1.5,
	// 	spacing: "10px",
	// 	numStars: 5,
	// 	minValue: 0,
	// 	maxValue: 5,
	// 	normalFill: 'black',
	// 	ratedFill: '#E00445',

	// })

	 // star rating init
	 $(".rateYo").each(function (e) {
    
    var ChngRatevaluesEn = {1:'bad',2:'poor',3:'ok',4:'good',5:'super'};
    var ChngRatevaluesAr = {1:'bad-Ar',2:'poor-Ar',3:'ok-Ar',4:'good-Ar',5:'super-Ar'};
    var language = "english";
    var rating = $(this).attr("data-rating");
	//  $('#rating').prop('required',true);
    $(this).rateYo({
        onSet: function (rating) {
            if(language === "arabic") {
                $(this).next().val(ChngRatevaluesAr[rating]);
            }else
            {
                $(this).next().val(ChngRatevaluesEn[rating]);
            }
			// $(this).attr("data-rating").prop('required',true);
			// $(this).attr("rating").prop('required',true);
            ratingFunc(rating, $(this).next().next().val());

        },
        rating: rating,
        starWidth: "20px",
        numStars: 5,
        fullStar: true,
        // normalFill: "#A0A0A0",
		normalFill: 'black',
		ratedFill: '#E00445',
        spacing: "5px",
        precision: 2,
        // rtl: true,
        // readOnly: true,
    });
});



function onRating(rating){
	document.getElementById("rating").value  = rating;
}



 function ratingFunc(rating, bookid, lang){
                debugger;
                if(lang != null){
                language = lang;
				
            };

			document.getElementById("rating").value  = rating;
			// alert("selected star Rate is " + rating );
                // alert("selected star Rate is " + rating + " And Book id is "+ bookid);
                // database call goes here!!!
            } 



</script>






{{-- ajax --}}






          {{-- <a href="../customer/login.html" class="login-to-review">Login to Review</a>
						 --}}

						 {{-- <script type="text/javascript">

							$('#contactForm').on('setText',function(e){
								e.preventDefault();
						
								let name = $('#name').val();
								let email = $('#email').val();
								let mobile_number = $('#phn').val();
								let subject = $('rating').val();
								
						
								$.ajax({
								  url: "{{route('ratingDetailStore')}}",
								  type:"POST",
								  data:{
									"_token": "{{ csrf_token() }}",
									name:name,
									usersemail:email,
									phone:mobile_number,
									star_rating:subject,
									
								  },
								  success:function(response){
									console.log(response);
									if (response) {
									  $('#success-message').text(response.success); 
									  $("#contactForm")[0].reset(); 
									}
								  },
								  error: function(response) {
									$('#name-error').text(response.responseJSON.errors.name);
									$('#email-error').text(response.responseJSON.errors.email);
									$('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
									$('#subject-error').text(response.responseJSON.errors.subject);
									$('#message-error').text(response.responseJSON.errors.message);
								   }
								 });
								});
							  </script> --}}







					</div>


				</div>
			</div>



















			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="listing-sidebar">

					<div class="ls-widget">
						<h2>Artisan Bio-Data</h2>
						<div class="agent">
							<div class="photo">
								@foreach ($combineAll as $combineAll)
								<img class="card-img-top"  width="40px" height="40px"  src="{{ asset( 'public/UserImagefiles/'.$combineAll->company_photo1 ) }}" alt="image 1">
							{{-- <img src="../public/uploads/user_photos/39953cc10c2b3ca7b26a64a3d53a3527.jpg" alt="">
							 --}}
							
							
							</div>
							<div class="text ">

								<p><b>Name:</b> {{$combineAll->Name}} </p>
								<p><b>Gender:</b> {{$combineAll->Gender}} </p>
								<p><b>Qualification:</b> {{$combineAll->Qualification}} </p>
								{{-- <p><b>Nationality:</b> {{$combineAll->Religion}} </p>
							    --}}
								<p><b>State:</b> {{$combineAll->State}} </p>
								<p><b>Nationality:</b> {{$combineAll->Nationality}} </p>

								{{-- @foreach ($combineAll as $combineAll)
					
								  <p><b>Name:</b> {{$combineAll->Name}} </p>
								  <p><b>Gender:</b> {{$combineAll->Gender}} </p>
								  <p><b>Qualification:</b> {{$combineAll->Qualification}} </p>
								  <p><b>Nationality:</b> {{$combineAll->Religion}} </p>
								 
								  <p><b>State:</b> {{$combineAll->State}} </p>
								  <p><b>Nationality:</b> {{$combineAll->Nationality}} </p>
								 
								  @endforeach --}}
								{{-- @foreach ($combineAll as $combineAlls)
					
							
								                                                                                                     
								<h3><a href="../agent/user/3.html">	(Overall {{$combineAlls->Name}} Out of 3)</a></h3>
								@endforeach  --}}
								
							</div>
							@endforeach
						</div>
						{{-- <div class="agent-contact">
							<ul>
								<li><i class="fas fa-map-marker-alt"></i> 23, PK Road, NYC 45</li>
								<li><i class="fas fa-phone-volume"></i> 111-222-4569</li>
								<li><i class="fas fa-envelope"></i> customer@gmail.com</li>
								<li><a href="https://www.testwebsite.com/" target="_blank"><i class="fas fa-globe"></i> https://www.testwebsite.com</a></li>
							</ul>
						</div> --}}

{{-- 
								<div class="agent-social">
							<ul>
									<li><a href="https://www.facebook.com/sabbir" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								
									<li><a href="https://www.twitter.com/sabbir" target="_blank"><i class="fab fa-twitter"></i></a></li>
								
								
								
							</ul>
						</div> --}}
						
						{{-- <a href="../agent/user/3.html" class="btn btn-primary btn-block agent-view-profile">View Profile</a> --}}
					</div>

                    	<div class="ls-widget">
						<h2>Opening Hours</h2>
						<div class="openning-hour">
							<div class="table-responsive">
								<table class="table table-bordered">
									@foreach ($users as $user)
									<tr>
										<td>Monday</td>
										<td>{{ $user->monday}}</td>
									</tr>
									<tr>
										<td>Tuesday</td>
										<td>{{ $user->tuesday}}</td>
									</tr>
									<tr>
										<td>Wednesday</td>
										<td>{{ $user->wedsday}}</td>
									</tr>
									<tr>
										<td>Thursday</td>
										<td>{{ $user->thursday}}</td>
									</tr>
									<tr>
										<td>Friday</td>
										<td>{{ $user->friday}}</td>
									</tr>
									<tr>
										<td>Saturday</td>
										<td>{{ $user->saturday}}</td>
									</tr>
									<tr>
										<td>Sunday</td>
										<td>{{ $user->sunday}}</td>
									</tr>
									@endforeach
								</table>
							</div>
						</div>
					</div>
                    
					<div class="ls-widget">
						<h2>Categories</h2>
						<div class="category">
							<ul>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>AutoMechanic</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Electrician</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Panel beater</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Vulcanizer</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Plumber</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Bricklayer</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Builder</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Household painter</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Vehicle spray painter</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Interior decorator</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Tiler</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Welder</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Carpenter</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Nursemaid</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Tutors</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Dry cleaner</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Makeup Artist</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Baker</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Cobbler</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Fashion designer</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Sculptors</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Photographer</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Gardener</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Butcher</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Herb doctor</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i> Kiosk owner</a></li>
							<li><a href=" {{ route('searchList') }}"><i class="fas fa-angle-right"></i>Petty trader </a></li>
						</ul>
						</div>
					</div>

					<div class="ls-widget">
						<h2>Locations</h2>
						<div class="category">
							<ul class="arros">
							<li><i class="fas fa-angle-right"></i>Akwa Ibom, Nigeria</li>
							<li><i class="fas fa-angle-right"></i>Cross River, Nigeria</li>
							<li><i class="fas fa-angle-right"></i>Rivers, Nigeria</li>
							
							{{-- <li><a href="location/Khulna.html"><i class="fas fa-angle-right"></i> Khulna, Bangladesh</a></li>
							<li><a href="location/london.html"><i class="fas fa-angle-right"></i> London, UK</a></li>
							<li><a href="location/newyork.html"><i class="fas fa-angle-right"></i> NewYork, USA</a></li>
							<li><a href="location/paris.html"><i class="fas fa-angle-right"></i> Paris, France</a></li>
							<li><a href="location/tokyo.html"><i class="fas fa-angle-right"></i> Tokyo, Japan</a></li> --}}
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
		$("#contact-frm").submit(function(e){
			e.preventDefault();
			let url = $(this).attr('action');
			// $("#setText").attr('disabled', true);
			$.post(url, 
			{ 
				name: $("#name").val(),
				usersemail: $("#email").val(),
				
				phone: $("#Phn").val(),
				star_rating: $("#rating").val(),
				Authusersemail: $("#Rmail").val(),
				Authusersid: $("#Rid").val(),
				
				
			}, 
			   
			   
			   
							   
			  
			function (response) {
				if(response.code == 400){
					document.log('error');
					// $("#setText").attr('disabled', false);
					// let error = '<span class="alert alert-danger">'+response.msg+'</span>';
					// $("#res").html(error);
				}else if(response.code == 200){
					document.log('good');
					// $("#setText").attr('disabled', false);
					// let success = '<span class="alert alert-success">'+response.msg+'</span>';
					// $("#res").html(success);
				}
			});
			
			
		})
	})
  </script> --}}



@endsection