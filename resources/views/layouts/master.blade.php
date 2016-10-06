<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amar Jobs</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{URL::asset('css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}">
    <link href="{{URL::asset('css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>

  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AJB</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Amar</b>Jobs</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                  <span class="hidden-xs">{{ Auth::user()->userName }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                   
                   
                    <p>
                      {{ Auth::user()->userName }} - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->profilePic }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o text-red"></i>
                <span>Info Setup</span>
                <i class="fa fa-angle-left pull-right text-red"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('allCategory')}}"><i class="fa fa-tags"></i> Category</a></li>
                <li><a href="{{route('allSkill')}}"><i class="fa fa-asterisk"></i> Skill</a></li>
                <li><a href="{{route('allDegree')}}"><i class="fa fa-mortar-board"></i> Degree</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o text-yellow"></i>
                <span>Access Control List</span>
                <i class="fa fa-angle-left pull-right text-yellow"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('allRole')}}"><i class="fa fa-tasks"></i>Roles</a></li>
                <li><a href="{{route('allUser')}}"><i class="fa fa-user"></i> Users</a></li>
                <li><a href="{{route('allAction')}}"><i class="fa fa-bell"></i> Permission</a></li>
              </ul>
            </li>

            <li class="header">JOB INFO</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                <span>Jobs</span>
                <i class="fa fa-angle-left pull-right text-aqua"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('allProfile')}}"><i class="fa fa-line-chart"></i> Profile</a></li>
                <li><a href="{{route('allCompany')}}"><i class="fa fa-building-o"></i> Company</a></li>
                <li><a href="{{route('allJob')}}"><i class="fa fa-suitcase"></i>Job Lists</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">@yield('title')</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                @if(Session::has('flash_message'))
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="alert alert-success">
                        {{Session::get('flash_message')}}
                    </div>
                @endif
              @yield('content')
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Amar</b>Jobs
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="#">Chonchol Mahmud</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{URL::asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- SlimScroll -->
    <script src="{{URL::asset('js/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('js/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset('js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset('js/demo.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('js/select2.min.js')}}"></script>
        <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
    <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".js-example-basic-single").select2();
  });
  </script>
  <script>
    document.querySelector('.btn').onclick = function(){
      swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    },
    function(){
      swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
    };
  </script>

  </body>
</html>
