@extends('layouts.app')
@section('title','Koboconnect - we connect')
@section('content')	



<script>(()=>{const d=document.documentElement;d.classList.remove("Noscript"),d.classList.add("Script")})();</script><link rel="stylesheet" href="../indexcarousel/style.css">

<div class="search-section" style="background-image:url('../uploads/site_photos/442ef4f690ab9805f1d50978ab1e9db6.jpg');">
	<div class="bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Do you realize how many services you may access from the convenience of your home ?</h4>
				<p>
					You can get your desired business listing here by category or location
				</p>
				<div class="box">
					<form action="{{route('search')}}" method="POST">
						@csrf
					
						<div class="input-group input-box mb-3">
							{{-- <input type="text" class="form-control" placeholder="Bussiness Name " name="text">
							 --}}
							{{-- <input type="hidden" name="anemity" value=""> --}}


							<select  name="artisan_type" id="artisan" class="form-control" style="user-select: auto;" required>
								<option  value="" style="user-select: auto;">Artisan Type</option>
							
								<optgroup label="AutoMechanic">
								{{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
								  <option value="Japanese AutoMechanic" style="user-select: auto;">Japanese</option>
								  <option value="Germans AutoMechanic" style="user-select: auto;">Germans</option>
								  <option value="Tricycle AutoMechanic" style="user-select: auto;">Tricycle</option>
								</optgroup>
							
								<optgroup label="Carpenter">
									{{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
									  <option value="Rough carpenter" style="user-select: auto;">Rough carpenter</option>
									  <option value="Trim carpenter" style="user-select: auto;">Trim carpenter</option>
									  <option value="Cabinet maker" style="user-select: auto;">Cabinet maker</option>
									  <option value="Framer" style="user-select: auto;">Framer</option>
									  <option value="Roofer" style="user-select: auto;">Roofer</option>
									  <option value="Ships carpenters" style="user-select: auto;">Ship's carpenter</option>
									  <option value="Joister" style="user-select: auto;">Joister and Merchandise</option>
									</optgroup>
							
							
								<optgroup label="Electrician">
									{{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
									  <option value="Japanese Electrician" style="user-select: auto;">Japanese</option>
									  <option value="Germans Electrician" style="user-select: auto;">Germans</option>
									  <option value="Tricycle Electrician" style="user-select: auto;">Tricycle</option>
									  <option value="Household Electrician" style="user-select: auto;">Household</option>
									</optgroup>
							
									<optgroup label="Panel beater">
										{{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
										  <option value="Japanese Panel beater " style="user-select: auto;">Japanese</option>
										  <option value="Germans Panel beater" style="user-select: auto;">Germans</option>
										  <option value="Tricycle Panel beater" style="user-select: auto;">Tricycle</option>
									 </optgroup>
							
									<option value="Vulcanizer" style="user-select: auto;">Vulcanizer</option>
									<option value="HVAC" style="user-select: auto;">HVAC(Heating, Ventilation, and Air Conditioning) technician</option>
							   
									<option value="Plumber" style="user-select: auto;">Plumber</option>
									<option value="Brick layer" style="user-select: auto;">Bricklayer</option>
									<option value="Builder" style="user-select: auto;">Builder</option>
									<option value="Household painter" style="user-select: auto;">Household painter</option>
							
									<option value="Vehicle spray painter" style="user-select: auto;">Vehicle spray painter</option>
									<option value="Interior decorator" style="user-select: auto;">Interior decorator</option>
									<option value="Tiler" style="user-select: auto;">Tiler</option>
									<option value="Welder" style="user-select: auto;">Welder</option>
									 <option value="Tutors" style="user-select: auto;">Tutors</option>
									<option value="Dry cleaner" style="user-select: auto;">Dry cleaner</option>
									<option value="Makeup Artist" style="user-select: auto;">Makeup Artist</option>
									<option value="Baker" style="user-select: auto;">Baker</option>
									<option value="Cobbler" style="user-select: auto;">Cobbler</option>
									<option value="Fashion designer" style="user-select: auto;">Fashion designer</option>
									<option value="Sculptors" style="user-select: auto;">Sculptors</option>
									<option value="Photographer" style="user-select: auto;">Photographer</option>
									<option value="Butcher" style="user-select: auto;">Butcher</option>
									<option value="Herb doctor" style="user-select: auto;">Herb doctor</option>
									<option value="Kiosk owner" style="user-select: auto;">Kiosk owner</option>
									<option value="Petty trader" style="user-select: auto;">Petty trader</option>
								
							 
							 
							  </select>
							  <select name="location" id="location" class="form-control select2" required>
                                <option value="">Locations</option>
                                <option value="Akwa Ibom">Akwa Ibom, Nigeria</option>
                                <option value="Cross River">Cross River, Nigeria</option>
                                <option value="Rivers">Rivers, Nigeria</option>
                             </select>
						
							<div class="input-group-append">
								<button type="submit"><i class="fa fa-search"></i> Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


{{-- 
<div id="wrapper">
	
	 --}}


  

	 <div class="popular-category">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading">
						<h2>Categories</h2>
						<h3>See all listing categories here</h3>
					</div>
				</div>
			</div>
			<div class="row">	
				
				<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/BAKER.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>BAKER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							<!-- this should take to listed categories -->
							{{-- <a href="#"></a> --}}
						</div>
					</div>
																				<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/BRICKLAYER.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>BRICKLAYER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							{{-- <a href="#"></a> --}}
						</div>
					</div>
																				<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/BUILDER.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>BUILDER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							{{-- <a href="#"></a> --}}
						</div>
					</div>
																				<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/BUTCHER1.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>BUTCHER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							{{-- <a href="listing/category/real-estate.html"></a> --}}
						</div>
					</div>
																				<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/CARPENTER.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>CARPENTER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							{{-- <a href="listing/category/shopping.html"></a> --}}
						</div>
					</div>
																				
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="popular-category-item" style="background-image: url(../carosuelimage/gallery/thumbs/COBBLER.jpg);">
							<div class="bg"></div>
							<div class="text">
								<h4>COBBLER</h4>
								{{-- <p>1 Listings</p> --}}
							</div>
							{{-- <a href="listing/category/health-and-medical.html"></a> --}}
						</div>
					</div>
							</div>
							
							<button type="button" class="btn btn-primary userPay mt_10" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-arrow-circle-right"></i> More </button>
						</div>
		</div>
	</div>
	

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Categories</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		 
			<div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/BAKER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">BAKER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/BRICKLAYER.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">BRICKLAYER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/BUTCHER1.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">BUTCHER</p>
					  </div>
					
				  </div>
				</div>
			  </div>



			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/CARPENTER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">CARPENTER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/COBBLER.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">COBBLER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/ELECTRICIAN.jpeg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">ELECTRICIAN</p>
					  </div>
					
				  </div>
				</div>
			  </div>




			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/GARDENER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">GARDENER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/HERBALIST.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">HERBALIST</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/HOUSEHOLD PAINTER.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">HOUSEHOLD PAINTER</p>
					  </div>
					
				  </div>
				</div>
			  </div>



			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/HVAC TECHNICIAN.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">HVAC TECHNICIAN</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/INTERIOR DECORATOR.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">INTERIOR DECORATOR</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/KIOSK OWNER 1.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">KIOSK OWNER</p>
					  </div>
					
				  </div>
				</div>
			  </div>



			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/MAKEUP ARTIST.jfif" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">MAKEUP ARTIST</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/MAKEUP.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">MAKEUP</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/MECHANIC.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">MECHANIC</p>
					  </div>
					
				  </div>
				</div>
			  </div>



			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/mistywoods.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">MISTYWOODS</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/NURSEMAID.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">NURSEMAID</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/PAINTERS.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">PAINTERS</p>
					  </div>
					
				  </div>
				</div>
			  </div>


			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/PANEL BEATER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">PANEL BEATER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/PLUMBER.jpg" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">PLUMBER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/SCULPTOR.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">SCULPTOR</p>
					  </div>
					
				  </div>
				</div>
			  </div>




			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/TILER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">TILER</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/TUTORS.png" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">TUTORS</p>
					  </div>
					
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/VULCANIZER.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">VULCANIZER</p>
					  </div>
					
				  </div>
				</div>
			  </div>


			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail" id="aimg" >
					
					  <img src="../carosuelimage/gallery/thumbs/WELDER.jpg" alt="Lights" >
					  <div class="caption">
						<p class="userPay2">WELDER</p>
					  </div>
					
				  </div>
				</div>
				{{-- <div class="col-md-4">
				  <div class="thumbnail"  id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/TUTORS.png" alt="Nature"  >
					  <div class="caption">
						<p class="userPay2">TUTORS</p>
					  </div>
					
				  </div>
				</div> --}}
				{{-- <div class="col-md-4">
				  <div class="thumbnail" id="aimg">
					
					  <img src="../carosuelimage/gallery/thumbs/VULCANIZER.jpg" alt="Fjords" style="width:100%">
					  <div class="caption">
						<p class="userPay2">VULCANIZER</p>
					  </div>
					
				  </div>
				</div> --}}
			  </div>


			
		</div>
		{{-- <div class="modal-footer">
		  <button type="button" class="btn userPay2" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		
		
		</div> --}}
	  </div>
	</div>
  </div>


{{-- </div> --}}

<!-- javascript -->
{{-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../carosuelimage/js/jquery.jfollow.js"></script>
<script type="text/javascript" src="../carosuelimage/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="../carosuelimage/js/jquery.ImageGallery.js"></script>
<script type="text/javascript">
	// set up the gallery
	$('#gallery').gallery({
		'rows': 1,
		'cols': 7
	});
	
	// some extra interface stuff... pay no attention to the man behind the curtain
	var gallery = $('#gallery-wrapper'), setup = $('#setup-wrapper');
	setup.hide();
	$('#show-setup').click(function(){
		gallery.fadeOut(400,function(){
			setup.fadeIn();
		});
		return false;
	});
	$('#show-gallery').click(function(){
		setup.fadeOut(400,function(){
			gallery.fadeIn();
		});
		return false;
	});

	


	$('#nav-wrapper').jfollow('#followbox', 20);
</script>  --}}






















{{-- 

<div class="popular-category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2>Categories</h2>
					<h3> See all listing categories here</h3>
				</div>
			</div>
		</div>
		<div class="row">	                                								
			<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/f3732842a26a08ea66bf0a597f439531.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>Hotel</h4>
							<p>1 Listings</p>
						</div>
						<!-- this should take to listed categories -->
						<a href="#"></a>
					</div>
				</div>
			                                								
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/1d4dca1a2427173c1a4ebbf52577f791.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>Restaurant</h4>
							<p>1 Listings</p>
						</div>
						<a href="#"></a>
					</div>
				</div>
			                                								
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/000ff0e54ed1e1613b671ca69b372d16.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>School</h4>
							<p>1 Listings</p>
						</div>
						<a href="#"></a>
					</div>
				</div>
			                                								
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/ff164db33e1470ce369fe9e5252eb680.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>Real Estate</h4>
							<p>1 Listings</p>
						</div>
						<a href="listing/category/real-estate.html"></a>
					</div>
				</div>
			                                								
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/e5098068687cfb1e68b31d06057985b9.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>Local Shops</h4>
							<p>1 Listings</p>
						</div>
						<a href="listing/category/shopping.html"></a>
					</div>
				</div>
			                                								
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="popular-category-item" style="background-image: url(../uploads/listing_category_photos/0a2d2dec01b808da3aae794cbc7baf1f.jpg);">
						<div class="bg"></div>
						<div class="text">
							<h4>Health and Medical</h4>
							<p>1 Listings</p>
						</div>
						<a href="listing/category/health-and-medical.html"></a>
					</div>
				</div>
					</div>
	</div>
</div> --}}
{{-- @foreach ($r5UserIndexfron as $r5s)
{{$r5s->company_name}}
{{$r5s->artisan_type}}
{{$r5s->email}}
{{$r5s->company_phone_number}}
{{$r5s->company_address}}
(Overall {{$r5s->rate}} Out of 5)
					
	@endforeach --}}

{{-- payed for ads --}}
<div class="listing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2>Featured Listings</h2>
					<h3>See all popular listings below</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="listing-carousel owl-carousel ">
{{-- 					
			
						<div class="listing-item">
						
						<div class="photo">
							<a href="#">
								<img src="../uploads/listing_featured_photos/bc605cbd5029dd3efb0bdcdff79e7be6.jpg" alt=""></a>
							<div class="category">
								<a href="#">Local Shops</a>
							</div>
							<div class="wishlist">
								<a href="#"><i class="fas fa-heart"></i></a>
							</div>
                            <div class="featured-text">Featured</div>
						</div>
						<div class="text">
							<h3><a href="#">Local Shops</a></h3>
							<div class="location">
								<i class="fas fa-map-marker-alt"></i> Akwa Ibom, Nigeria
							</div>

                    
							<div class="review">
                                 <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                	<span>(1 Reviews)</span>
							</div>
						</div>
					</div> --}}
				

					@foreach ($r5UserIndexfron as $r5s)

					<div class="listing-item">
					
						
						<div class="photo">
									
							{{-- {{ asset( 'public/CompanyImagesfiles/'.$user->company_photo2 ) }}--}}
							<a href="{{route('listing3',$r5s->id)}}"><img src="{{ asset( 'public/CompanyImagesfiles/'.$r5s->company_photo1 ) }}" alt=""></a>
							<div class="category">
							<a href="{{route('listing3',$r5s->id)}}"><img src="{{ asset( 'public/CompanyImagesfiles/'.$r5s->company_photo1 ) }}" alt=""></a>
								<a href="{{route('listing3',$r5s->id)}}"> {{$r5s->company_name}}</a>
							</div>
							<div class="wishlist">
								<a href="{{route('listing3',$r5s->id)}}"><i class="fas fa-heart"></i></a>
							</div>
                            <div class="featured-text">Featured</div>
						</div>
						<div class="text">
							<h3><a href="{{route('listing3',$r5s->id)}}">{{$r5s->artisan_type}}</a></h3>
							<div class="location">
								<i class="fas fa-map-marker-alt"></i> {{$r5s->company_address}}
							</div>
                            
							<div class="review">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
									{{-- Out of 5 --}}
                                 	<span>(Overall {{$r5s->star_rating}} )</span>
							</div>
						</div>
					</div>
				
				@endforeach

{{-- 
					<div class="listing-item">
						
					<div class="photo">
							<a href="#"><img src="../uploads/listing_featured_photos/126f23d72c2d6009d7b47a548af73f48.jpg" alt=""></a>
							<div class="category">
								<a href="#">Restaurant</a>
							</div>
							<div class="wishlist">
								<a href="#"><i class="fas fa-heart"></i></a>
							</div>
                            <div class="featured-text">Featured</div>
						</div>
						<div class="text">
							<h3><a href="#">Restaurant</a></h3>
							<div class="location">
								<i class="fas fa-map-marker-alt"></i> Akwa Ibom, Nigeria
							</div>

							<div class="review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                	<span>(2 Reviews)</span>
							</div>
						</div>
					</div> --}}

					{{-- <div class="listing-item">
						<div class="photo">
							<a href="#"><img src="../uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg" alt=""></a>
							<div class="category">
								<a href="#">Hotel</a>
							</div>
							<div class="wishlist">
								<a href="#"><i class="fas fa-heart"></i></a>
							</div>
                            <div class="featured-text">Featured</div>
						</div>
						<div class="text">
							<h3><a href="#">Hotel</a></h3>
							<div class="location">
								<i class="fas fa-map-marker-alt"></i> Calabar, Nigeria
							</div>
                                                                                                                       
							<div class="review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                	<span>(2 Reviews)</span>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		</div>
		</div>
	



<div class="popular-city">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2> Our Services</h2>
					{{-- <h3>Please see all the listing locations from here</h3> --}}
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-sm">
				<div class="card a" style="width: 18rem;">
					<img class="card-img-top " src="../img/connect.jpg"   width="50px" height="150px"  alt="Card image cap">
					<div class="card-body ">
					  <p class="card-text "><h3>Artisan connection</h3></p>
					</div>
				  </div>
			</div>
			<div class="col-sm">
				<div class="card b" style="width: 19rem;">
					<img class="card-img-top " src="../img/job.jpg" width="50px" height="150px"   alt="Card image cap">
					<div class="card-body ">
					  <p class="card-text"><h3>Job placement</h3></p>
					</div>
				  </div>
			</div>
			<div class="col-sm">
				<div class="card c" style="width: 20rem;">
					<img class="card-img-top " src="../img/sme.jpg"  width="50px" height="150px" alt="Card image cap">
					<div class="card-body ">
					  <p class="card-text"><h3>SME connection</h3></p>
					</div>
				  </div>
			</div>


	</div>
</div>

</div>

{{-- 
location
<div class="popular-city">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					<h2>Locations</h2>
					<h3>Please see all the listing locations from here</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="popular-city-carousel owl-carousel owl-loaded owl-drag">
                    					                                        										
				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1440px, 0px, 0px); transition: all 1.5s ease 0s; width: 2160px;"><div class="owl-item" style="width: 330px; margin-right: 30px;"><div class="popular-city-item" style="background-image: url('public/uploads/listing_location_photos/4d79a723380e7495b8a0d0a77c09691d.jpg');">
						<div class="bg"></div>
						<div class="text">
							<h4>Akwa Ibom, Nigeria</h4>
							<p>3 Listings</p>
						</div>
						<a href="#"></a>
					</div></div><div class="owl-item" style="width: 330px; margin-right: 30px;"><div class="popular-city-item" style="background-image: url('../uploads/listing_location_photos/7f2a3cc598783d96c6cb38822f297c4e.jpg');">
						<div class="bg"></div>
						<div class="text">
							<h4>Calabar, Nigeria</h4>
							<p>2 Listings</p>
						</div>
						<a href="#"></a>
					</div></div><div class="owl-item" style="width: 330px; margin-right: 30px;"><div class="popular-city-item" style="background-image: url('../uploads/listing_location_photos/33fd259bec2e92c1c7cd245700dfc2d0.jpg');">
						<div class="bg"></div>
						<div class="text">
							<h4>PH, Nigeria</h4>
							<p>1 Listings</p>
						</div>
						<a href="#"></a>
					</div>
				</div>
				<div class="owl-item" style="width: 330px; margin-right: 30px;">
					<div class="popular-city-item" style="background-image: url('../uploads/listing_location_photos/36116d11827f34adb99a661bc7890882.jpg');">
						<div class="bg"></div>
						<div class="text">
							<h4>Paris, France</h4>
							<p>0 Listings</p>
						</div>
						<a href="#"></a>
					</div></div><div class="owl-item active" style="width: 330px; margin-right: 30px;"><div class="popular-city-item" style="background-image: url('../uploads/listing_location_photos/15f7c09ace5d9dde86c025758b88e3e0.jpg');">
						 <div class="bg"></div>
						<div class="text">
							<h4>NewYork, USA</h4>
							<p>0 Listings</p>
						</div>
						<a href="#"></a> 
					</div></div><div class="owl-item active" style="width: 330px; margin-right: 30px;"><div class="popular-city-item" style="background-image: url('../uploads/listing_location_photos/d3c826869a1d7fa59cf8e91239b010cd.jpg');">
						<div class="bg"></div>
						<div class="text">
							<h4>Khulna, Bangladesh</h4>
							<p>0 Listings</p>
						</div>
						<a href="#"></a> 
					</div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fas fa-angle-left"></i></div><div class="owl-next disabled"><i class="fas fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
			</div>

		</div>
	</div>
</div> --}}






<div class="listing">

	<div class="popular-city">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading">
						<h2 class="font-weight-bold mb-4"> Connecting </h2>
		
	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="scd">
						<ul class="myUL">
							<li class="d  scroll-number-0"></li>
							<li class=" d scroll-number-1"></li>
						</ul>
					  </div>

					

				</div>
			</div>
		</div>
	</div>
	
	</div>
	




<div class="">
<div class="container-fluid px-2 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
            <div class=" border-0 text-center ">
				
					<h2 class="font-weight-bold mb-4">Testimonials</h2>
	
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="{{ asset('../uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg') }}" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2 people">Emmanuel Ubong</h6>
                                    <i class="people">Backend Developer</i>
                                </div>
                                <!-- <img class="img-fluid open-quotes" src="public/uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg" width="20" height="20"> -->
                                <p class="content mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <!-- <img class="img-fluid close-quotes ml-auto" src="public/uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg" width="20" height="20"> -->
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="{{ asset('../uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg') }}" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2 people">Ximena Vegara</h6>
                                    <i class="people">UI/UX Designer</i>
                                </div>
                                <!-- <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20"> -->
                                <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</p>
                                <!-- <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20"> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="{{ asset('../uploads/listing_featured_photos/e1f9ef65722d3a382150b23824ee2131.jpg') }}" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2 people">John Paul</h6>
                                    <i class="people">UI/UX Designer</i>
                                </div>
								
                                <!-- <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20"> -->
                                <p class="content mb-0" >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <!-- <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20"> -->
							
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

</div>

</div>



{{-- 

<script type="text/javascript">
	$(document).ready(function(e) {
	   
		// live handler
		lc_lightbox('.elem', {
			wrap_class: 'lcl_fade_oc',
			gallery : true,	
			thumb_attr: 'data-lcl-thumb', 
			
			skin: 'minimal',
			radius: 0,
			padding	: 0,
			border_w: 0,
		});	
	
	});
	</script> --}}

	{{-- https://github.com/InfyOmLabs/laravel-generator --}}

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     --}}
    <script>

        var scrollNumber0 = new gScrollNumber(".scroll-number-0", {
           width: 60,
           color: "white",
           fontSize: 60,
           autoSizeContainerWidth: true
        });
        var scrollNumber1 = new gScrollNumber(".scroll-number-1", {
            width: 60,
            color: "white",
            fontSize: 60,
            autoSizeContainerWidth: true
        });
        var value0,value1;
        value0 = 0;
        value1 = 0;
        setInterval(function () {
            scrollNumber0.run(value0++);
            scrollNumber1.run(value1 += 2);
        }, 1000);
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
@endsection