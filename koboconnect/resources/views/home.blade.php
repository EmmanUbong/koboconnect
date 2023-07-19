@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}



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


  <!-- /.navbar -->

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
                {{-- <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right userPay">3</span>
              --}}

@role('marketer')
  <i class="fas fa-angle-left right"></i>
<span class="badge badge-info right userPay">2</span>
@endrole


@role('user')
   <i class="fas fa-angle-left right"></i>
   <span class="badge badge-info right userPay">3</span>
 @endrole


@role('admin')
  <i class="fas fa-angle-left right"></i>
  <span class="badge badge-info right userPay">4</span>
 @endrole
              </p>
            </a>
            <ul class="nav nav-treeview">
{{-- marketers --}}
@role('marketer')

<li class="nav-item">
  <a  href="{{ route('WorkerDetails') }}" class="nav-link menus">
    <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
    <p>User</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('WorkerUserTokenDetailStore') }}"  class="nav-link menus">
    <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
   
    <p>Registration</p>
  </a>
</li>
@endrole

@role('user')
              <li class="nav-item">

        
              
                <a href="{{ route('registerUser') }}" class="nav-link menus">
                  <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
                        <p>User</p>
                </a>
             
              </li>
              <li class="nav-item">
              
                <a  href="{{ route('registerDetails') }}" class="nav-link menus">
                  <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
                        <p>Registration</p>
                </a>
              </li>
              <li class="nav-item">
               
                {{-- PaymentDetails --}}
                <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                  <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                  <p>Payment</p>
                </a>
              </li>
              @endrole


@role('admin')
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
               
                {{-- PaymentDetails --}}
                <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                  <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                  <p>Payment Details</p>
                </a>
              </li>

              <li class="nav-item">
               
                {{-- PaymentDetails --}}
                <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                  <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                  <p>Employees</p>
                </a>
              </li>
              @endrole
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
            <ol class="breadcrumb float-sm-right">
               
                <li class="breadcrumb-item "><a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                            
                                <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                         <span class="userPay2"><img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" /> {{ __('Logout') }}</span>
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

    <!-- Main content -->
    <section class="content mov">
      <div class="container-fluid">




        
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
            
          <div class="col">
            <!-- small box -->
            {{-- <center><h1 style="color:red;">Highcharts in Laravel 8 Example</h1></center>
    --}}
            <div id="container"></div>
          </div>
          <!-- ./col -->
        </div>
      

<div class="row">



</div>


<div class="card userPaycalender2">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title userPay">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                
                  <button type="button" class="btn userPay btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  {{-- <button type="button" class="btn userPay2 btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> --}}
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead>
                  <tr><th class="prev" data-action="previous">
                    <span class="fa fa-chevron-left" title="Previous Month">
                      </span></th>
                      <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">August 2022</th><th class="next" data-action="next">
                        <span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th>
                          <th class="dow">Tu</th>
                          <th class="dow">We</th>
                          <th class="dow">Th</th>
                          <th class="dow">Fr</th>
                          <th class="dow">Sa</th></tr></thead>
                          <tbody><tr><td data-action="selectDay" data-day="07/31/2022" class="day old weekend">31</td><td data-action="selectDay" data-day="08/01/2022" class="day">1</td><td data-action="selectDay userPaycalender3" data-day="08/02/2022" class="day k">2</td><td data-action="selectDay" data-day="08/03/2022" class="day">3</td><td data-action="selectDay userPaycalender3" data-day="08/04/2022" class="day">4</td><td data-action="selectDay" data-day="08/05/2022" class="day">5</td><td data-action="selectDay" data-day="08/06/2022" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="08/07/2022" class="day weekend">7</td><td data-action="selectDay" data-day="08/08/2022" class="day active today userPaycalender3">8</td><td data-action="selectDay" data-day="08/09/2022" class="day">9</td><td data-action="selectDay" data-day="08/10/2022" class="day">10</td><td data-action="selectDay" data-day="08/11/2022" class="day">11</td><td data-action="selectDay" data-day="08/12/2022" class="day">12</td><td data-action="selectDay" data-day="08/13/2022" class="day weekend">13</td></tr><tr><td data-action="selectDay" data-day="08/14/2022" class="day weekend">14</td><td data-action="selectDay" data-day="08/15/2022" class="day">15</td><td data-action="selectDay" data-day="08/16/2022" class="day">16</td><td data-action="selectDay" data-day="08/17/2022" class="day">17</td><td data-action="selectDay" data-day="08/18/2022" class="day">18</td><td data-action="selectDay" data-day="08/19/2022" class="day">19</td><td data-action="selectDay" data-day="08/20/2022" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="08/21/2022" class="day weekend">21</td><td data-action="selectDay" data-day="08/22/2022" class="day">22</td><td data-action="selectDay" data-day="08/23/2022" class="day">23</td><td data-action="selectDay" data-day="08/24/2022" class="day">24</td><td data-action="selectDay" data-day="08/25/2022" class="day">25</td><td data-action="selectDay" data-day="08/26/2022" class="day">26</td><td data-action="selectDay" data-day="08/27/2022" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="08/28/2022" class="day weekend">28</td><td data-action="selectDay" data-day="08/29/2022" class="day">29</td><td data-action="selectDay" data-day="08/30/2022" class="day">30</td><td data-action="selectDay" data-day="08/31/2022" class="day">31</td><td data-action="selectDay" data-day="09/01/2022" class="day new">1</td><td data-action="selectDay" data-day="09/02/2022" class="day new">2</td><td data-action="selectDay" data-day="09/03/2022" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="09/04/2022" class="day new weekend">4</td><td data-action="selectDay" data-day="09/05/2022" class="day new">5</td><td data-action="selectDay" data-day="09/06/2022" class="day new">6</td><td data-action="selectDay" data-day="09/07/2022" class="day new">7</td><td data-action="selectDay" data-day="09/08/2022" class="day new">8</td><td data-action="selectDay" data-day="09/09/2022" class="day new">9</td><td data-action="selectDay" data-day="09/10/2022" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month active">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle">
                  
                
                </li>
              </ul>
            </div>
          </div>
              </div>
              <!-- /.card-body -->
            </div>


        
            <!-- /.card -->
          </section>
        

      </div>
    </div>
        
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;

    Highcharts.chart('container', {
        title: {
            text: 'Artisan General Rating 2022'
        },
        // subtitle: {
        //     text: 'Customers Rating'
        // },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Rating Point'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Customer',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>





</body>
















@endsection
