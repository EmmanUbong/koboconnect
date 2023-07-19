@extends('layouts.app')
@section('title','Koboconnect - Bio-Data')
@section('content')

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
        <!-- Navbar Search -->
        {{-- <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-search" style="user-select: auto;"></i>
          </a>
          <div class="navbar-search-block" style="user-select: auto;">
            <form class="form-inline" style="user-select: auto;">
              <div class="input-group input-group-sm" style="user-select: auto;">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="user-select: auto;">
                <div class="input-group-append" style="user-select: auto;">
                  <button class="btn btn-navbar" type="submit" style="user-select: auto;">
                    <i class="fas fa-search" style="user-select: auto;"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search" style="user-select: auto;">
                    <i class="fas fa-times" style="user-select: auto;"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
  
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link" data-toggle="dropdown" href="#" style="user-select: auto;">
            <i class="far fa-comments" style="user-select: auto;"></i>
            <span class="badge badge-danger navbar-badge" style="user-select: auto;">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="user-select: auto;">
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    Brad Diesel
                    <span class="float-right text-sm text-danger" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">Call me whenever you can...</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    John Pierce
                    <span class="float-right text-sm text-muted" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">I got your message bro</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    Nora Silvester
                    <span class="float-right text-sm text-warning" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">The subject goes here</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item dropdown-footer" style="user-select: auto;">See All Messages</a>
          </div>
        </li> --}}
        <!-- Notifications Dropdown Menu -->
        {{-- <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link" data-toggle="dropdown" href="#" style="user-select: auto;">
            <i class="far fa-bell" style="user-select: auto;"></i>
            <span class="badge badge-warning navbar-badge" style="user-select: auto;">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="user-select: auto;">
            <span class="dropdown-item dropdown-header" style="user-select: auto;">15 Notifications</span>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-envelope mr-2" style="user-select: auto;"></i> 4 new messages
              <span class="float-right text-muted text-sm" style="user-select: auto;">3 mins</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-users mr-2" style="user-select: auto;"></i> 8 friend requests
              <span class="float-right text-muted text-sm" style="user-select: auto;">12 hours</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-file mr-2" style="user-select: auto;"></i> 3 new reports
              <span class="float-right text-muted text-sm" style="user-select: auto;">2 days</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item dropdown-footer" style="user-select: auto;">See All Notifications</a>
          </div>
        </li> --}}
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-expand-arrows-alt" style="user-select: auto;"></i>
          </a>
        </li>
        {{-- <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-th-large" style="user-select: auto;"></i>
          </a>
        </li> --}}
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
      
            <!-- SidebarSearch Form -->
           
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="{{ route('home') }}" class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    <b>Dashboard</b>  
                      {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                  </a>
               
                </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link pro">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      <b>Profile</b>
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right userPay">3</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a  href="{{ route('registerUser') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
                       <p>User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('registerDetails') }}"  class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
                        <p>Registration</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Payment</p>
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
                     
                      <li class="breadcrumb-item "><a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                                  
                                      <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                         <span class="userPay2">  <img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" /> {{ __('Logout') }}</span>
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form></li>
      
                    
                    {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->



<div class="card card-primary" style="user-select: auto;">
    <div class="card user-nav" style="user-select: auto;">
      <h3 class="card-title userzB" style="user-select: auto;">Bio-Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

        @foreach ($users as $user)
    
        @if ($user->Email == Auth::user()->email)
        <div class="card-body" style="user-select: auto;">
        <div class="form-group" style="user-select: auto;">

          <div class="row">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"  width="150px" height="150px"  src="{{ asset( 'public/UserImagefiles/'.$user->company_photo1 ) }}" alt="image 1">
              
              <div class="card-body">
                <p class="card-text"> <h3>Profile Photo</h3></p>
              </div>
            </div>
        
           
            
        
          </div>
        



        <label name="names"  style="user-select: auto;"><span class="userPay">Name:</span>   {{ $user->Name}} </label><br><br>
        <label name="email"  style="user-select: auto;"><span class="userPay2">Email:</span>  {{ $user->Email }}</label> <br><br>
        <label name="Gender"  style="user-select: auto;"><span class="userPay">Gender:</span>  {{$user->Gender }}</label><br><br>
        <label name="Address" style="user-select: auto;"><span class="userPay2">Address:</span>  {{ $user->Address}}</label><br><br>
        <label name="LGA"  style="user-select: auto;"><span class="userPay">LGA: </span>   {{ $user->LGA}}</label><br><br>
        <label name="State"  style="user-select: auto;"><span class="userPay2">State:</span>   {{ $user->State}}</label><br><br>
        <label name="Nationality"  style="user-select: auto;"><span class="userPay">Nationality:</span>  {{ $user->Nationality }}</label><br><br>
        <label name="Religion"  style="user-select: auto;"><span class="userPay2">Religion:</span>  {{ $user->Religion}}</label><br><br>
        <label name="Qualification"  style="user-select: auto;"><span class="userPay">Qualification: </span>   {{ $user->Qualification }}</label><br><br>
        <label name="NextOfKin"  style="user-select: auto;"><span class="userPay2">Next Of Kin:</span> {{ $user->Next_Of_Kin}}</label><br><br>
        <label name="AddressNextOfKin"  style="user-select: auto;"><span class="userPay">Address Next Of Kin:</span>  {{ $user->Address_Next_Of_Kin}}</label><br><br>
        <label name="PhoneNumberNextOfKin"  style="user-select: auto;"><span class="userPay2">Phone Number Next Of Kin:</span>  {{$user->Phone_Number_Next_Of_Kin}}</label><br><br>
        <label name="Relationship"  style="user-select: auto;"><span class="userPay">Relationship: </span>   {{ $user->Relationship }}</label><br>   <br>   
        <label name="Status"  style="user-select: auto;"><span class="userPay2">Status:</span>     {{ $user->Status }}</label><br>   <br>   
    </div>
        </div>
           @endif
     

  @endforeach
   
        {{-- <input type="hidden" value="{{ Auth::user()->name }}" name="names" class="form-control" id="exampleInputEmail1" placeholder="Name" style="user-select: auto;"  required>
      
        <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="exampleInputEmail1" placeholder="email" style="user-select: auto;"  required>
      
       --}}
    


</div>

 





  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
  @endsection