

@extends('layouts.app')
@section('title','Koboconnect-search')
@section('content')	

<div class="page-content">
    <div class="container">
        <div class="row listing pb_0">
           



<div class="col-lg-8 col-md-6 col-sm-12">

    <div class="right-area">
        <div class="row">


                        
            
            @foreach ($r5UserIndexfron  as $user)


            <div class="col-md-6">
                     <div class="listing-item">

                        <div class="photo">
                            <a href="{{route('listing3',$user->id)}}"><img src="{{ asset( 'public/CompanyImagesfiles/'.$user->company_photo1 ) }}" alt=""></a>
                            <div class="category">
                                <a href="listing/category/restaurant.html">{{ $user->artisan_type}}</a>
                            </div>
                            {{-- <div class="wishlist">
                                <a href="listing-resultbc38.html"><i class="fas fa-heart"></i></a>
                            </div> --}}
                        {{-- <div class="featured-text">Featured</div> --}}
                        </div>
                        <div class="text">
                            <h3><a href="listing/ruby-tuesday.html">{{$user->company_name }}</a></h3>
                            <div class="location">
                                <a href="listing/location/london.html"><i class="fas fa-map-marker-alt"></i>  {{ $user->company_address}} | {{ $user->State}} |  {{ $user->nationality}}</a>
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

{{ $r5UserIndexfron->links('vendor.pagination.custom') }}
</div>
</div>



@endsection
