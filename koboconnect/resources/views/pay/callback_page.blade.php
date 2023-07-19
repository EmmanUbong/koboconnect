<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback page</title>



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
 /* body {
     background-color: #D32F2F;
     font-family: 'Calibri', sans-serif !important
 } */

 /* .mt-100 {
     margin-top: 100px
 } */

 /* .container {
     margin-top: 200px
 } */

 .card {
     /* position: relative; */
     /* display: flex; */
     width: 450px;
     /* flex-direction: column; */
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 4px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .card .card-body {
     padding: 1rem 1rem
 }

 .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }

 p {
     font-size: 14px
 }

 h4 {
     margin-top: 18px
 }

 .cross {
     padding: 10px;
     color:  #E00445;
     cursor: pointer
 }

 .continue:focus {
     outline: none;
     text-decoration: none;
 }

 .continue {
     border-radius: 5px;
     text-transform: capitalize;
     font-size: 13px;
     padding: 8px 19px; 
     cursor: pointer;
     color: #fff;
     background-color: #E00445;
 }

 .continue:hover {
     background-color: #2F4F4F !important;
     color: #fff !important;
 }
 a:hover {
	text-decoration: none;
}



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
                        color:  #E00445;
                    }
        
                    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover {
                        color:  #E00445!important;
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
                        background:  #E00445;
                    }
        
                    .footer-social-link ul li a,
                    .contact-form .btn {
                        border-color:  #E00445;
                    }
        
                    .listing-filter .lf-heading {
                        border-bottom-color:  #E00445;
                    }
        
                    .footer-social-link ul li a:hover {
                        color: #fff!important;
                    }
                </style>
{{--         
        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
          
          
          
          
          
            });

          



        </script> --}}
        

</head>
<body class="testifylogin">


    <div class="page-content pt_50 pb_60 ">
       
        <div class="container">
            <div class="row ">
             
                <div class="col">
                    <div class="reg-login-form">
                        <div class="inner">
                <div class="card">
        
        <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
            <h4>CONGRATULATIONS!</h4>
            {{-- <p>You have been personally selected to take part in our 2017 annual visitors survey!</p> 
             --}}
             <p> You can now register to<span><b> koboconnect </b></span> to get your space. click on the button below. 
             </p>
              {{-- New User ?  <a class="link" href="{{ route('pay') }}">{{ __('Register') }} Now</a> --}}  
                   <button class="btn btn-out btn-square userPay"><a   class="alnk " href="{{route('home')}}">Register</a></button>   
           
              {{-- <button class="btn btn-out btn-square userPay"><a   class="alnk " href="{{route('register')}}">Register</a></button>    --}}
            {{-- <button class="btn btn-out btn-square continue">CONTINUE</button> --}}
       
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



    {{-- <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6">
                 <button type="button" class="btn btn-out btn-square continue" data-toggle="modal" data-target="#myModal">Koboconnect</button> 
                <br>
                <br>
                 <div class="progress">
                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                  </div> 
            </div>
            
        </div>
    </div> --}}
    {{-- <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="card">
                <div class="text-right cross"> <i class="fa fa-times"></i> </div>
                <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                    <h4>CONGRATULATIONS!</h4>
                   
                     <p> You can now register to koboconnect to get your space. click on the button below. 
                     </p>  
                     <button class="btn btn-out btn-square continue"><a   class="alnk li-modal" href="{{route('register')}}">Register</a></button>   
                   
                </div>
            </div>
            <div class="modal-content">
            </div>
        </div>
    </div> --}}










{{--     
    <div class="page-content pt_50 pb_60 ">
       
        <div class="container">
            <div class="row cart">
             
                <div class="col-md-12">
                    <div class="reg-login-form"> --}}
                        {{-- <div class="inner"> --}}
    {{-- <table class="table">
       
        <tbody>
            
             
            <tr><td><b>Email:</b></td><td>{{$data->customer->email}}</td></tr>
            <tr><td><b>Status:</b></td><td>{{$data->status}}</td></tr>
            <tr><td><b>Reference:</b></td><td>{{$data->reference}}</td></tr>
            <tr><td><b>Amount:</b></td><td>{{$data->amount}}</td></tr>
            <tr><td><b>Fees:</b></td><td>{{$data->fees}}</td></tr>
        </tbody>
    </table> --}}
   {{-- <p> <h4>congratulations !!! you can now register to koboconnect to get your space. click on the button below. </h4> 
   </p>     --}}
          

{{-- </div> --}}
{{-- <button class="btn btn-primary"><a class="alnk" href="{{route('register')}}">Register</a></button>        

                    </div>
                </div>
</div>
</div>
</div> --}}

    {{-- <a href="{{route('pay')}}">Back home</a> --}}
</body>
</html>