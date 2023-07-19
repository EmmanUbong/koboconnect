@extends('layouts.app')
@section('title','Koboconnect - companydetails')
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
   --}}
        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown" style="user-select: auto;">
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
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown" style="user-select: auto;">
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
          

                {{-- <i class="fas fa-circle iconuser"></i> {{ Auth::user()->name }} --}}
                


            </div>
      
           
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
                     
                      <li class="breadcrumb-item "><a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                                  
                                      <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <span class="userPay2">  <img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" />  {{ __('Logout') }}</span>
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
      <h3 class="card-title userzB" style="user-select: auto;">Company Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

  <div>      <a href="{{ route('adminindexview') }}"><span class="userPay2 float-sm-right">Create</span></a> <br><br></div>
    			
    <table class="table table-bordered">
      <tr>

          <th >S/N</th>
          <th >email</th>
          <th >company_name</th>
          <th >artisan_type</th>
          <th >business_description</th>
          <th >business_services1</th>
          <th >business_services2</th>
          <th >business_services3</th>
          <th >business_services4</th>
          <th >company_address</th>
          <th >lga</th>
          <th >State</th>
          <th >nationality</th>
          <th >company_phone_number</th>
          <th >Sunday</th>
          <th >Monday</th>
          <th >Tuesday</th>
          <th>Wednesday</th>
          <th >Thursday</th>
          <th >Friday</th>
          <th >Saturday</th>
          <th >Sunday</th>
          <th >First Company Image</th>
          <th >Second Company Image</th>
          <th >Third Company Image</th>
          <th >Video</th>
          <th>	facebook</th>
          <th >	twiter</th>
          <th >instagram</th>
          <th>whatsapp</th>
          <th >auth_user_id</th>
          <th>deleted_at</th>
          <th >created_at</th>
          <th >updated_at</th>


          <th >Action</th>
      </tr>
 
      @foreach ($users as $user)
    
    
        <tr>
          <td >{{ $user->id}}</td>
          <td >{{ $user->email}}</td>
          <td >{{ $user->company_name}}</td>
          <td >{{ $user->artisan_type}}</td>
          <td >{{ $user->business_description}}</td>
          <td >{{ $user->business_services1}}</td>
          <td >{{ $user->business_services2}}</td>
          <td >{{ $user->business_services3}}</td>
          <td >{{ $user->business_services4}}</td>
          <td >{{ $user->company_address}}</td>
          <td >{{ $user->lga}}</td>
          <td >{{ $user->State}}</td>
          <td >{{ $user->nationality}}</td>
          <td >{{ $user->company_phone_number}}</td>
    
          <td >{{ $user->monday}}</td>
          <td >{{ $user->tuesday}}</td>
          <td >{{ $user->wedsday}}</td>
          <td >{{ $user->thursday}}</td>
          <td >{{ $user->friday}}</td>
          <td >{{ $user->saturday}}</td>
          <td >{{ $user->sunday}}</td>
          <td>{{ $user->company_photo1}}</th>
          <td >{{ $user->company_photo2}}</td>
          <td >{{ $user->company_photo3}}</td>
          <td >{{ $user->video}}</td>
          <td >{{ $user->facebook}}</td>
          <td >{{ $user->twiter}}</td>
          <td>{{ $user->instagram}}</td>
          <td >{{ $user->whatsapp}}</td>
          <td >{{ $user->auth_user_id}}</td>
          <td >{{ $user->deleted_at}}</td>
          <td >{{ $user->created_at}}</td>
          <td >{{ $user->updated_at}}</td>
          <td><form action="{{ route('admindelete',$user->id) }}" method="POST">
   
            <a class="btn btn-info" href="{{ route('adminshow',$user->id) }}"> <img src="  {{ asset('../img/eye.png') }}" alt="" width="30px" height="30px"></a>

            <a class="btn btn-primary" href="{{ route('adminedit',$user->id) }}"><img src="  {{ asset('../img/writing.png') }}" alt="" width="30px" height="30px"></a>

            @csrf
            @method('DELETE')

            <button id="deletebtn"   type="submit" class="btn btn-danger"> <img src="  {{ asset('../img/delete.png') }}" alt="" width="30px" height="30px"></button>

  
          </form>
        </td>
        </tr>
 
     

        @endforeach 
    </table>
</div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



</body>
  @endsection