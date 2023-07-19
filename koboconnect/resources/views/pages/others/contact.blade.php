
@extends('layouts.app')
@section('title','Koboconnect - Contact Us')
@section('content')	
<link rel="stylesheet" href="{{ asset('../frontend/css/style.css') }}">
        

<div class="page-content pt_0">


	<div class="container">
		<div class="row contact-form">
		  <div class="col">
			@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@endif
			<h4 class="contact-form-title mt_50 mb_20">Contact Form</h4>
			<div class=" loginRc">
			<form id="contact-frm" action="{{ route('send.email') }}" method="post">
				@csrf
				{{-- <input type="hidden" name="_token" value="lWcTeb4KMY1O5MBGx0RAfarClcmxCk3FRQ98nH2b">			
				 --}}
				<div class="row">
					<div class="col">
				
						<div class="form-group">
							{{-- <label>Name *</label> --}}
							<input placeholder="Name *"  type="text" class="form-control"  id="visitorname" name="visitorname">
							@error('visitorname')
							<span class="text-danger"> {{ $message }} </span>
						  @enderror
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							{{-- <label>Email Address *</label> --}}
							<input placeholder="Email Address *"   type="email" class="form-control"  id="email" name="email">
						
							@error('email')
							<span class="text-danger"> {{ $message }} </span>
						  @enderror
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							{{-- <label>Phone Number</label> --}}

							<input  placeholder="Phone Number" type="number" class="form-control" id="Phn"   name="Phn">
						</div>
					</div>
				</div>
				<div class="form-group">
					{{-- <label>Message *</label> --}}
					<textarea  placeholder="Message *" name="content"  id="content" class="form-control h-200" cols="30" rows="10"></textarea>
				
					@error('content')
					<span class="text-danger"> {{ $message }} </span>
				  @enderror
				</div>
									
				<button type="submit" class="btn btn-primary mt_10">Send </button>

			</form>
			</div>
		  </div>
		  <div class="col">
			<div class="contact-page-map">
				{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
			
			
				<iframe
				width="600"
				height="450"
				style="border:0"
				loading="lazy"
				allowfullscreen
				referrerpolicy="no-referrer-when-downgrade"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDxj0vTmWlWMY2OeEtFcGLGZQ9-8V8cmug
				  &q=Elibrary+Akwa Ibom+Nigeria">
			  </iframe>
			</div>
		  </div>
	


		</div>
	  </div>


	
{{-- 







	  <script>
		$(document).ready(function(){
			$("#contact-frm").submit(function(e){
				e.preventDefault();
				let url = $(this).attr('action');
				$("#submitt").attr('disabled', true);
				$.post(url, 
				{ 
					email: $("#visitorname").val(),
					company_name: $("#email").val(),
					artisan_type: $("#Phn").val(),
					business_description : $("#content").val(),
					
				}, 
				   
				   
				   
				                   
				  
				function (response) {
					if(response.code == 400){
						$("#submitt").attr('disabled', false);
						let error = '<span class="alert alert-danger">'+response.msg+'</span>';
						$("#res").html(error);
					}else if(response.code == 200){
						$("#submitt").attr('disabled', false);
						let success = '<span class="alert alert-success">'+response.msg+'</span>';
						$("#res").html(success);
					}
				});
				
				
			})
		})
	  </script> --}}
















	<div class="container">
		
		<div class="row ">
			<div class="col-md-12">
			
				
			</div>

			
		</div>
	</div>
</div>

@endsection