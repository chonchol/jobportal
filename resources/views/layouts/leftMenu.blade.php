@extends('layouts.theme')
@section('title', 'Amar Jobs | Add Institute')

@section('content')

<section class="main no-padding">
    <div class="account-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <!-- User avatar -->
                    <div class="profile_avatar">
                        <img src="#" alt="avatar" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <div class="profile_summary">
                        <!-- User name --> 
                        <h3 class="profile_name">{{ Auth::user()->userName }}</h3>
                        <!-- User status -->
                        <p>Hello.. I'am a frontend developer.</p>
                        <!-- Contact -->
                        <a href="{{ url('/logout') }}" class="btn btn-primary btn-warning btn-sm"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </div> <!-- / .profile__summary -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <div class="widget-header">
                        <h3>Author Menus</h3>
                    </div>
                    <div class="widget-body">
                        <ul class="author-menus">

                            <li><a href="{{ url('/profiles/add')}}">My Profile</a></li>
                            <li><a href="{{ url('/companies/add')}}">Company</a></li>
                            <li><a href="{{ url('/institiutes/add')}}">Institiutes</a></li>
                            <li><a href="{{ url('/coverletters/add')}}">Cover Letters</a></li>
                            <li><a href="#">Signout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> New Ads </a> </h4>
                    </div>
                    @yield('form')
                  </div>
            </div>  
        </div>
    </div>
</section>

@endsection