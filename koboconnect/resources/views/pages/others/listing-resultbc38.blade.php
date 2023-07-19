@extends('layouts.app')
@section('title','Koboconnect - Listing')
@section('content')
 

<div class="page-content ">
    <div class="container">
        <div class="row listing pb_0">
            <div class="col-lg-4 col-md-6 col-sm-12">


                <form action="{{route('search')}}" method="POST">
                                @csrf
                    <div class="listing-filter">

                        <div class="lf-heading">
                           koboconnect 
                        </div>

                        <div class="form-group">
                            <input type="text" name="BusinessName" class="form-control" placeholder="Business Name" required >
                        </div>


                        {{-- <label style="user-select: auto;"><b>Artisan</b></label> --}}
                      
                      
                      
                      <div class="form-group" style="user-select: auto;">
  {{-- <label style="user-select: auto;">Artisan Type</label> --}}
   
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
                      
                      
               

                      
                      
                      
                      
                      
                      
                      
                      
                        {{-- <div class="form-group">
                            
                        <select class="js-example-basic-single form-control"     name="artisantypeamount" id="artisantypeamount"  style="user-select: auto;" required>
                        <option  value="" style="user-select: auto;">Artisan</option>

                        <optgroup label="Auto Repairs">
                          <option value="CakeBaker" style="user-select: auto;">Car & Auto Repair</option>
                          <option value="transport" style="user-select: auto;">Motorcycle Repair</option>
                        </optgroup>


                        <optgroup label="Beauty and Fashion">
                            <option value="CakeBaker" style="user-select: auto;">Men Salon & Barber</option>
                            <option value="transport" style="user-select: auto;">Women Salon & Hair Stylist</option>
                          </optgroup>

                         </select> --}}
                        </div>
                          {{-- // In your Javascript (external .js resource or <script> tag) --}}
                            {{-- <script> 
                             $(document).ready(function() {
                                $('.js-example-basic-single').select2();
                            });

                            </script> --}}

{{-- 

                        <div class="lf-widget">
                            <select name="category" class="form-control select2">
                                <option value="">Categories</option>
                                <option value="3">Automobile</option>
                                <option value="8">Health and Medical</option>
                                <option value="1">Hotel</option>
                                <option value="6">Real Estate</option>
                                <option value="2">church</option>
                                <option value="9">Local Shops</option>
                                <option value="10">Care giver(Ngo's)</option>
                                <option value="11">Restaurant</option>
                                <option value="12">Schools</option>
                                                          
                                                                </select>
                        </div> --}}

                        <div class="form-group">
                            <select name="location" id="location" class="form-control select2" required>
                                <option value="">Locations</option>
                                <option value="Akwa Ibom">Akwa Ibom, Nigeria</option>
                                <option value="Cross River">Cross River, Nigeria</option>
                                <option value="Rivers">Rivers, Nigeria</option>
                             </select>
                        </div>

                        <!-- <div class="lf-widget">
                            <select name="amenity" class="form-control select2">
                                <option value="">Amenities</option>
                                                                    <option value="1" >Free Wifi</option>
                                                                    <option value="2" >Swimming Pool</option>
                                                                    <option value="3" >Car Parking Lot</option>
                                                                    <option value="4" >Breakfast and Dinner</option>
                                                                    <option value="5" >Currency Exchange</option>
                                                                    <option value="6" >Television</option>
                                                                    <option value="7" >Fitness Center</option>
                                                                    <option value="8" >Gaming Corner</option>
                                                            </select>
                        </div> -->

                        <div class="form-group">
                            <input type="submit" class="form-control filter-button" value="Search">
                        </div>
                    </div>
                </form>
            </div>


            {{-- @if($posts->isNotEmpty()) --}}
            {{-- @foreach ($articles as $articles)
                <div class="post-list">
                    <p>{{ $articles->company_name }}</p>
                    <p>{{ $articles->artisan_type }}</p>
                    <p>{{ $articles->company_address}}</p> --}}
                    {{-- <img src="{{ $post->image }}"> --}}
                {{-- </div>
            @endforeach --}}
        {{-- @else
            <div>
                <h2>No posts found</h2>
            </div>
        @endif --}}
       


            <div class="col-lg-8 col-md-6 col-sm-12">

                <div class="right-area">
                    <div class="row">

           
                                    
                        
                        @foreach ($users as $user)


                        <div class="col-md-6">
                                 <div class="listing-item">

                                    <div class="photo">
                                        <a href="{{route('listing3',$user->id)}}"><img src="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo1 ) }}" alt=""></a>
                                        <div class="category">
                                            <a href="{{route('listing3',$user->id)}}">{{ $user->artisan_type}}</a>
                                        </div>
                                        {{-- <div class="wishlist">
                                            <a href="listing-resultbc38.html"><i class="fas fa-heart"></i></a>
                                        </div> --}}
                                    {{-- <div class="featured-text">Featured</div> --}}
                                    </div>
                                    <div class="text">
                                        <h3><a href="{{route('listing3',$user->id)}}">{{$user->company_name }}</a></h3>
                                        <div class="location">
                                            <a href="{{route('listing3',$user->id)}}"><i class="fas fa-map-marker-alt"></i>  {{ $user->company_address}} | {{ $user->State}} |  {{ $user->nationality}}</a>
                                        </div>
                                        <div class="review">
                                            <b>Phone Number:</b>{{ $user->company_phone_number}}
                                            {{-- <i class="fas fa-star"></i>
                                           
                                            <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                               <span>(2 Reviews)</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                                    @endforeach

                                  
       
                   
                </div>

            </div>

        </div>
        
        {{ $users->links('vendor.pagination.custom') }}
    </div>
</div>


@endsection