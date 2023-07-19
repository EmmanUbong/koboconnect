<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koboconnect-MakePayment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=
    "https://code.jquery.com/jquery-1.12.4.min.js">
        </script>

		<!-- All CSS -->
<link rel="stylesheet" href="../frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="../frontend/css/jquery-ui.css">
<link rel="stylesheet" href="../frontend/css/animate.min.css">
<link rel="stylesheet" href="../frontend/css/magnific-popup.css">
<link rel="stylesheet" href="../frontend/css/owl.carousel.min.css">
<link rel="stylesheet" href="../frontend/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../frontend/css/select2.min.css">
<link rel="stylesheet" href="../frontend/css/select2-bootstrap.min.css">
<link rel="stylesheet" href="../frontend/css/meanmenu.css">
<link rel="stylesheet" href="../frontend/css/spacing.css">
<link rel="stylesheet" href="../frontend/css/summernote-bs4.min.css">
<link rel="stylesheet" href="../frontend/css/jquery.timepicker.css">
<link rel="stylesheet" href="../frontend/css/toastr.min.css">
<link rel="stylesheet" href="../frontend/css/sweetalert2.min.css">
<link rel="stylesheet" href="../frontend/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../frontend/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

		<!-- All Javascripts -->
<script src="../frontend/js/jquery-3.6.0.min.js"></script>
<script src="../frontend/js/bootstrap.min.js"></script>
<script src="../frontend/js/jquery-ui.js"></script>
<script src="../frontend/js/jquery.magnific-popup.min.js"></script>
<script src="../frontend/js/owl.carousel.min.js"></script>
<script src="../frontend/js/wow.min.js"></script>
<script src="../frontend/js/jquery.meanmenu.js"></script>
<script src="../frontend/js/jquery.dataTables.min.js"></script>
<script src="../frontend/js/dataTables.bootstrap4.min.js"></script>
<script src="../frontend/js/select2.full.js"></script>
<script src="../frontend/js/jquery.timepicker.js"></script>
<script src="../frontend/js/summernote-bs4.min.js"></script>
<script src="../frontend/js/fontawesome-iconpicker.js"></script>
<script src="../frontend/js/toastr.min.js"></script>
<script src="../frontend/js/sweetalert2.min.js"></script>
<script src="../../../../www.paypalobjects.com/api/checkout.js"></script>
<script src='../../../../www.google.com/recaptcha/api.js'></script>
				</style>

                    <script src="../../../../cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#50BF20","text":"#F8FFED","border":"#b3d0e4"},"button":{"background":"#FFFFFF","text":"#000000"}},"position":"bottom","padding":"large","margin":"none","content":{"message":"This website uses cookies to ensure you get the best experience on our website.","button":"ACCEPT"}})});</script>
        

        

        <style>
            .mobile-nav.mean-container .mean-nav ul li a.active,
            .main-nav nav .navbar-nav .nav-item a:hover,
            .main-nav nav .navbar-nav .nav-item a:focus,
            .main-nav nav .navbar-nav .nav-item a.active,
            .main-nav nav .navbar-nav .nav-item:hover a,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:focus,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a.active,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover a,
            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
            .listing .listing-item .text .location,
            .listing .listing-item .text h3 a:hover,
            .footer-item h2,
            .footer-item ul li a:hover,
            .listing-filter .lf-heading,
            .listing .listing-item .text .location a,
            .listing-single-banner .listing-items a,
            .listing-page h2 i,
            .listing-page .amenities li i,
            .listing-page .contact a,
            .listing-page .review-overall .total,
            .listing-sidebar .ls-widget .agent-contact li,
            .listing-sidebar .ls-widget .agent-contact li a,
            .listing-sidebar .ls-widget .category ul li a,
            .faq h4.panel-title a,
            .sidebar .widget .type-1 ul li:before,
            .sidebar .widget .type-1 ul li a:hover,
            .contact-icon i,
            .reg-login-form .link,
            .reg-login-form .new-user a {
                color:#B22222;
            }

            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover {
                color: #B22222!important;
            }

            .search-section .input-group-append button,
            .listing .listing-item .photo .category a,
            .popular-city-carousel .owl-nav .owl-prev,
            .popular-city-carousel .owl-nav .owl-next,
            .footer-social-link ul li a,
            .scroll-top,
            .page-banner,
            .filter-button,
            .listing-sidebar .ls-widget .agent-social ul li a,
            .listing-sidebar .ls-widget a.agent-view-profile,
            .pricing .btn,
            .contact-form .btn,
            .listing .owl-nav .owl-prev, 
            .listing .owl-nav .owl-next,
            .reg-login-form button {
                background: #B22222;
            }

            .footer-social-link ul li a,
            .contact-form .btn {
                border-color: #B22222;
            }

            .listing-filter .lf-heading {
                border-bottom-color: #B22222;
            }

            .footer-social-link ul li a:hover {
                color: #fff!important;
            }
        </style>







</head>
<body class="testifylogin">
 
  
   

    <div class="page-content pt_50 pb_60 ">
       
        <div class="container">
            <div class="row cart">
             
                <div class="col-md-12">
                    
                    <div class="reg-login-form">
                        <div class="inner">
                            <div class="card card-success" style="user-select: auto;">
                                <div class="card-header" style="user-select: auto;">
                                  <h3 class="card-title" style="user-select: auto;"> 
                                     <img src="{{ asset('../storage/userdash/cashless-payment.png') }}" width="20px" height="20px" />
                                    <b>PAYMENT </b></h3>
                                </div>
                                <div class="card-body" style="user-select: auto;">
                            
                            <form action="{{route('pay')}}" method="POST">
                                @csrf  
                                {{-- <input type="hidden" name="_token" value="lWcTeb4KMY1O5MBGx0RAfarClcmxCk3FRQ98nH2b">						
                                 --}}
                                 <div class="form-group">
                                    @if(session()->has('error'))

                                    <div class="alert alert-danger" role="alert">
                                        {{session()->get('error')}}
                                      </div>
                                    
                                     
                                     @endif
                                    {{-- <label for=""><h1>PAYMENT</h1></label> --}}
                                    {{-- <input type="" class="form-control" name="password"> --}}
                                </div>
                                <div class="form-group">
                                    {{-- <label for=""><b>email </b></label> --}}
                                    <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="email" placeholder="email" style="user-select: auto;"  required>
                                    {{-- <input type="text" name="email" placeholder="email" class="form-control" required> --}}
                                </div>
                                

                                {{-- <div class="form-group">
                                <label style="user-select: auto;">Artisan</label>
                                <select name="artisantypeamount" id="artisantypeamount"  class="form-control" style="user-select: auto;" required>
                                  <option  value="" style="user-select: auto;">-----</option>
                                  <option value="CakeBaker" style="user-select: auto;">Cake Baker</option>
                                  <option value="transport" style="user-select: auto;">transport</option>
                                </select>
                                </div> --}}

                                {{-- name="state" --}}
                                
                                <label  for=""><b>artisan</b></label>
                                 <div class="form-group">

                                <select class="form-control" name="artisantypeamount" id="artisantypeamount"  style="user-select: auto;" required>
                                <option  value="" style="user-select: auto;">------</option>

                                <optgroup label="AutoMechanic">
                                {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
                                  <option value="Japanese" style="user-select: auto;">Japanese</option>
                                  <option value="Germans" style="user-select: auto;">Germans</option>
                                  <option value="Tricycle" style="user-select: auto;">Tricycle</option>
                                </optgroup>

                                <optgroup label="Carpenter">
                                    {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
                                      <option value="Roughcarpenter" style="user-select: auto;">Rough carpenter</option>
                                      <option value="Trimcarpenter" style="user-select: auto;">Trim carpenter</option>
                                      <option value="Cabinetmaker" style="user-select: auto;">Cabinet maker</option>
                                      <option value="Framer" style="user-select: auto;">Framer</option>
                                      <option value="Roofer" style="user-select: auto;">Roofer</option>
                                      <option value="Shipscarpenters" style="user-select: auto;">Ship's carpenter</option>
                                      <option value="Joister" style="user-select: auto;">Joister and Merchandise</option>
                                    </optgroup>


                                <optgroup label="Electrician">
                                    {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
                                      <option value="ElectJapanese" style="user-select: auto;">Japanese</option>
                                      <option value="ElectGermans" style="user-select: auto;">Germans</option>
                                      <option value="ElectTricycle" style="user-select: auto;">Tricycle</option>
                                      <option value="ElectHousehold" style="user-select: auto;">Household</option>
                                    </optgroup>

                                    <optgroup label="Panel beater">
                                        {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
                                          <option value="PanelJapanese" style="user-select: auto;">Japanese</option>
                                          <option value="PanelGermans" style="user-select: auto;">Germans</option>
                                          <option value="PanelTricycle" style="user-select: auto;">Tricycle</option>
                                     </optgroup>

                                    <option value="Vulcanizer" style="user-select: auto;">Vulcanizer</option>
                                    <option value="HVAC" style="user-select: auto;">HVAC(Heating, Ventilation, and Air Conditioning) technician</option>
                               
                                    <option value="Plumber" style="user-select: auto;">Plumber</option>
                                    <option value="Bricklayer" style="user-select: auto;">Bricklayer</option>
                                    <option value="Builder" style="user-select: auto;">Builder</option>
                                    <option value="Householdpainter" style="user-select: auto;">Household painter</option>

                                    <option value="Vehiclespraypainter" style="user-select: auto;">Vehicle spray painter</option>
                                    <option value="Interiordecorator" style="user-select: auto;">Interior decorator</option>
                                    <option value="Tiler" style="user-select: auto;">Tiler</option>
                                    <option value="Welder" style="user-select: auto;">Welder</option>
                                     <option value="Tutors" style="user-select: auto;">Tutors</option>
                                    <option value="Drycleaner" style="user-select: auto;">Dry cleaner</option>
                                    <option value="MakeupArtist" style="user-select: auto;">Makeup Artist</option>
                                    <option value="Baker" style="user-select: auto;">Baker</option>
                                    <option value="Cobbler" style="user-select: auto;">Cobbler</option>
                                    <option value="Fashiondesigner" style="user-select: auto;">Fashion designer</option>
                                    <option value="Sculptors" style="user-select: auto;">Sculptors</option>
                                    <option value="Photographer" style="user-select: auto;">Photographer</option>
                                    <option value="Butcher" style="user-select: auto;">Butcher</option>
                                    <option value="Herbdoctor" style="user-select: auto;">Herb doctor</option>
                                    <option value="Kioskowner" style="user-select: auto;">Kiosk owner</option>
                                    <option value="Pettytrader" style="user-select: auto;">Petty trader</option>
                                 </select>
                                </div>
                                  {{-- // In your Javascript (external .js resource or <script> tag) --}}
                                    <script> 
                                     $(document).ready(function() {
                                        $('.js-example-basic-single').select2();
                                    });

                                    </script>
                                  





























                                

                                

                                <div class="form-group">
                                    {{-- @foreach($data as $data) --}}
                                    {{-- <label for="">Amount:</label> --}}
                                    {{-- @endforeach --}}
                                    {{-- <input type="" class="form-control" name="password"> --}}
                                </div>
                                <button type="submit" class="btn userPay">Submit</button>
                         
                                
                            </form>
                        </div>
                        <!-- /.card-body -->
                      </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    




























{{-- 
    <form action="{{route('pay')}}" method="POST">
        @csrf 
        <input type="text" name="email" placeholder="Email Address" required> <br><br>
        <input type="number" name="amount" placeholder="Enter amount" required> <br><br>
       
        <button type="submit">Submit</button>
    </form> --}}
</body>
</html>