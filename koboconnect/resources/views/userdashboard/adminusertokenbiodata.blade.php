@extends('layouts.app')
@section('title','Koboconnect - Bio-Data')
@section('content')
<link rel="stylesheet" href="../Country/css/countrySelect.css">
<link rel="stylesheet" href="../Country/css/demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="user-select: auto;">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="user-select: auto;">
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="user-select: auto;"><i class="fas fa-bars" style="user-select: auto;"></i></a>
        </li>
       
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
                  <a href="{{ route('WorkerDashboard') }}"class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    <b>Workers Dashboard</b> 
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
                    {{-- <li class="nav-item">
                      <a href="{{ route('PaymentDetails') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        
                        <p>Payment Details</p>
                      </a>
                    </li> --}}
                   
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
      <h3 class="card-title userzB" style="user-select: auto;">Bio-Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    {{-- <div class="form-group" style="user-select: auto;">
      <a href="{{ route('Viewbio') }}" class="nav-link"> <button  class="btn userbutton float-right" style="user-select: auto;">
View
        </button>
        </a>
        
       
  </div> --}}
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    
@endif 




    <form id="contact-frm" action="{{route('WorkerUserTokenDetailStore')}}" method="POST" style="user-select: auto;" role="form" enctype="multipart/form-data" >
     
      @csrf  

      <div class="card-body" style="user-select: auto;">
        
       
        

    @foreach ($users as $user)
    @if ($user->Email == Auth::user()->email)
    <div class="form-group" style="user-select: auto;">
    <label name="names" value="" style="user-select: auto;"><span class="userPay">Data Inputed</span></label><br>
    </div>
    @endif
     

@endforeach
<div class="form-group" style="user-select: auto;">
  {{-- <label name="names" value="{{ Auth::user()->name }}" style="user-select: auto;">Name: {{ Auth::user()->name }}</label><br>
  <label name="email" value="{{ Auth::user()->email}}" style="user-select: auto;">Email: {{ Auth::user()->email}}</label> --}}
  {{-- <input type="hidden" value="{{ Auth::user()->name }}" name="names" class="form-control" id="names" placeholder="Name" style="user-select: auto;"  required> --}}
  <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="email" placeholder="email" style="user-select: auto;"  required>
  <input type="hidden" value="{{ Auth::id() }}" name="AuthID" class="form-control" id="AuthID" placeholder="AuthID" style="user-select: auto;"  required>


</div>
 

    







          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">Address</label>
            <input type="text" value="{{ old('Address') }}" name="Address" class="form-control" id="Address" placeholder="Address" style="user-select: auto;"  required>
          </div>


  


  

 


{{-- 
    @foreach ($users as $user)
    @if ($user->Email == Auth::user()->email )
    <script type="text/javascript">
      $(document).ready(function() {
          $('button').click(function() {
            $('#submitt').attr('disabled', 'disabled');
             
          });
      });
    </script>


  @endif
     

      @endforeach
      
      
      
    
    <script>
      $(document).ready(function(){
          $("#contact-frm").submit(function(e){
              e.preventDefault();
              let url = $(this).attr('action');
              $("#submitt").attr('disabled', true);
              $.post(url, 
              {
                 
                  Email: $("#email").val(),
                  Address: $("#Address").val(),
                  auth_user_id: $("#AuthID").val(),
                
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

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
  @endsection