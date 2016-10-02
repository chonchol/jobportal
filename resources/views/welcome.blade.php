@extends('layouts.theme')

@section('content')
<div class="wrapper">
    <section class="hero">
        <div class="container text-center">
            <h2 class="hero-title">Find Your Deaming Job Here!</h2>
            <p class="hero-description hidden-xs">Lorem ipsum dolor sit amet, est wisi tantas nostrum no.</p>
            <div class="row hero-search-box">
                <form>
                    <div class="col-md-6 col-sm-6 search-input">
                        <input type="text" class="form-control input-lg search-first"
                               placeholder="I'm feeling lucky...">
                    </div>
                    <div class="col-md-6 col-sm-6 search-input">
                        <select class="form-control input-lg search-second">
                            <option selected="">All Location</option>
                            <option>New York</option>
                            <option>Washington</option>
                            <option>California</option>

                            @foreach($jobs as $job)
                            <ul class="trends">
                                <li><a href="#">{{ $job->jobLocation}} &nbsp;<span class="item-numbers">
</span></a></li>
                            </ul>
                            @endforeach


                        </select>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Job Category</h3>
                        </div>
                        <div class="widget-body">
                            @foreach($categories as $category)
                            <ul class="trends">
                                <li><a href="#">{{ $category->categoryName}} &nbsp;<span class="item-numbers">

                                    <?php
                                    $db = mysqli_connect("localhost", "root", "", "amarjobs");
                                    $query = mysqli_query($db,"select count(categoryName) as total from categories");
                                    $result = mysqli_fetch_array($query);
                                    echo $result['total'];
                                    ?>
</span></a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Job Type</h3>
                        </div>
                        <div class="widget-body">
                            @foreach($jobs as $job)
                            <ul class="trends">
                                <li><a href="#">{{ $job->jobType }} &nbsp;<span class="item-numbers">                 
                                <?php
                               // $db = mysqli_connect("localhost", "root", "", "amarjobs");
                                $query = mysqli_query($db,"select count(jobType) as total from jobs");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                                ?>
                                </span></a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="banner-widget">
                        <img src="http://placehold.it/600x275" alt="banner" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2>Recent Jobs</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    @foreach($jobs as $job)
                                    <div class="job_listings">
                                        <h4>
                                            <a href="">{{$job->jobTitle}}</a> 
                                            @if($job->featuredJob)
                                            |
                                            <a class="btn btn-info btn-xs" href="#"> Featured</a>
                                            @endif

                                            <a style="margin-left:1%" href="#" class="btn btn-success btn-xs pull-right"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-heart"></i></a>
                                        </h4>
                                        <p>Job Type: {{$job->jobType}} | Salary: {{$job->salary}} | Posted On: {{$job->created_at->format('Y-m-d')}}</p>
                                        <article>
                                            <p>{{$job->jobSummary}}</p>
                                        </article>
                                        <div class="skills">

                                            <ul>
                                                <li class="btn"><a href="#">Skills: </a></li>
                                                <li class="btn btn-default btn-xs"><a href="#">PHP</a></li>
                                                <li class="btn btn-default btn-xs"><a href="#">JAVA</a></li>
                                                <li class="btn btn-default btn-xs"><a href="#">MySQL</a></li>
                                                <li class="btn btn-default btn-xs"><a href="#">HTML</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <div class="infobox">
        <div class="container">
            <div class="sixteen columns">
                Start Building Your Own Job Board Now <a href="#">Get started</a></div>
        </div>
    </div>
    <section class="" data-source-url="{{URL::asset('img/parallax.jpg')}}" data-source-width="2050"
             data-source-height="1379"
             style="color: white;padding: 150px 0px;left: 50%; background-image: url(&quot;http://livedemo00.template-help.com/wordpress_52112/wp-content/uploads/2014/10/parallax-1.jpg&quot;); background-attachment: fixed; background-position: 50% 35.7143%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hero-title" style="text-align: center;font-size: 30px">Employment opportunities for professionals</h2>
                    <h6 style="text-align: center;font-size:16px;font-weight: 500">Lorem ipsum dolor sit amet conse
                        ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum</h6>
                    <p style="text-align: center;">
                        <a href="" title="Read More" class="btn btn-success btn-normal btn-inline bigger btn-from-top" target="_self">
                        <span data-hover="Read More">Read More</span></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item-counter">
                        <span class="item-icon"><i class="fa fa-database"></i></span>
                        <div data-refresh-interval="100" data-speed="3000" data-to="7803" data-from="0"
                             class="item-count">7803
                        </div>
                        <span class="item-info">Jobs</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-counter">
                        <span class="item-icon"><i class="fa fa-user-plus"></i></span>
                        <div data-refresh-interval="50" data-speed="5000" data-to="427" data-from="0"
                             class="item-count">427
                        </div>
                        <span class="item-info">Company</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-counter">
                        <span class="item-icon"><i class="fa fa-map-marker"></i></span>
                        <div data-refresh-interval="80" data-speed="5000" data-to="639" data-from="0"
                             class="item-count">639
                        </div>
                        <span class="item-info">Locations</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-counter">
                        <span class="item-icon"><i class="fa fa-users"></i></span>
                        <div data-refresh-interval="80" data-speed="5000" data-to="1548" data-from="0"
                             class="item-count">1548
                        </div>
                        <span class="item-info">Job Seeker</span>
                    </div>
                </div>
            </div>
        </div> <!-- / .counter -->
    </div>

</div>
@endsection
