@extends('layouts.app')
@section('title','Koboconnect - Payment')
@section('content')
<link rel="stylesheet" href="../Country/css/countrySelect.css">
<link rel="stylesheet" href="../Country/css/demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!-- Dynamic State and LGA Filter -->
<script type="text/javascript" src="../locate/Dynamic_State_LGA.js"></script>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="user-select: auto;">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="user-select: auto;">
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="user-select: auto;"><i class="fas fa-bars" style="user-select: auto;"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block" style="user-select: auto;">
          <a href="index3.html" class="nav-link" style="user-select: auto;">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block" style="user-select: auto;">
          <a href="#" class="nav-link" style="user-select: auto;">Contact</a>
        </li> --}}
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto" style="user-select: auto;">
       

        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-expand-arrows-alt" style="user-select: auto;"></i>
          </a>
        </li> 
      </ul>
    </nav>



     <!-- Main Sidebar Container -->
        <aside class="main-sidebar user-nav elevation-4">
          <!-- Brand Logo -->
          <p  class="brand-link k">
            <img src="  {{ asset('../img/koboconnect1.png') }}" alt=""width="240px" height="90px"> 
            {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            {{-- <span class="brand-text font-weight-light">koboconnect</span> --}}
          </p>
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="info userbutton2">
              
                <div class="image">
                <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                  {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }} --}}
                </div>
            
                  </div>
              {{-- @foreach ($users as $user)
    
              @if ($user->Email == Auth::user()->email AND $user->company_photo1==$user->company_photo1)
              <div class="info userbutton2">
              
        
               
             
                    <img class="card-img-top"  width="40px" height="40px"  src="{{ asset( 'public/UserImagefiles/'.$user->company_photo1 ) }}" alt="image 1">  <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                  </div>
          
                @else --}}
                {{-- <i class="fas fa-circle iconuser"></i> {{ Auth::user()->name }} --}}
                {{-- <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                </div>
                @endif


                @endforeach --}}



           
            </div>
      
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="{{ route('home') }}"class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    <b>Dashboard</b>  
                      {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                  </a>
               
                </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                     <b>Profile</b> 
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right userPay">4</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('registerUser') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
                              <p>User Information</p>
                      </a>
                   
                    </li>
                    <li class="nav-item">
                    
                      <a  href="{{ route('adminview') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
                              <p>Artisan Registration</p>
                      </a>
                    </li>
                    <li class="nav-item">
                     
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Payment Details</p>
                      </a>
                    </li>
      
                    <li class="nav-item">
                     
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Employees</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  {{-- <h1 class="m-0">Dashboard</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                  
                  <ol class="breadcrumb float-sm-right">
                     
                      <li class="breadcrumb-item ">
                        <a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                                  
                                      <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                          <span class="userPay2"> <img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" /> {{ __('Logout') }}</span>
                                       </a>
                                      
                                      
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                    </li>
      
                    
                    {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->









































<div class="card card-primary" style="user-select: auto;">
    <div class="card user-nav" style="user-select: auto;">
      <h3 class="card-title userzB" style="user-select: auto;">Payment</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-group" style="user-select: auto;">
      <a href="{{ route('PaymentDetails') }}" class="nav-link"> <button  class="btn userbutton float-right" style="user-select: auto;">
        Payment Details
        </button>
        </a>
        
       
  </div>
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    
@endif 

<div class="reg-login-form">
  <div class="inner">
      <div class="card card-success" style="user-select: auto;">
          <div class="card-header" style="user-select: auto;">
            <h3 class="card-title" style="user-select: auto;"> 
               <img src="{{ asset('../storage/userdash/naira.png') }}" width="40px" height="30px" />
              </h3>
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

{{-- 

          @foreach ($users as $user)
          @if ($user->Email == Auth::user()->email)
          <div class="form-group" style="user-select: auto;">
          <label name="names" value="" style="user-select: auto;"><span class="userPay">Data Inputed</span></label><br>
          </div>
          @endif
           
      
      @endforeach
      <div class="form-group" style="user-select: auto;"> --}}
        {{-- <label name="names" value="{{ Auth::user()->name }}" style="user-select: auto;">Name: {{ Auth::user()->name }}</label><br>
        <label name="email" value="{{ Auth::user()->email}}" style="user-select: auto;">Email: {{ Auth::user()->email}}</label> --}}
        {{-- <input type="hidden" value="{{ Auth::user()->name }}" name="names" class="form-control" id="names" placeholder="Name" style="user-select: auto;"  required>
        <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="email" placeholder="email" style="user-select: auto;"  required>
        <input type="hidden" value="{{ Auth::id() }}" name="AuthID" class="form-control" id="AuthID" placeholder="AuthID" style="user-select: auto;"  required>
      
      
      </div> --}}





          <div class="form-group">
              {{-- <label for=""><b>email </b></label> --}}
              <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="email" placeholder="email" style="user-select: auto;"  required>
              {{-- <input type="text" name="email" placeholder="email" class="form-control" required> --}}
          </div>
          



          {{-- name="state" --}}
          
          <label  for=""><b>Artisan</b></label>
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


        
       
        

 
 


        




         

          

 
  




    {{-- @foreach ($users as $user)
    @if ($user->Email == Auth::user()->email )
    <script type="text/javascript">
      $(document).ready(function() {
          $('button').click(function() {
            $('#submitt').attr('disabled', 'disabled');
             
          });
      });
    </script>


  @endif
     

      @endforeach --}}


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
  @endsection