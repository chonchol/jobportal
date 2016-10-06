@extends('layouts.theme')

@section('content')
<div class="wrapper">
    <section class="hero">
        <div class="container text-center">
            <h2 class="hero-title">Find Your Deaming Job Here!</h2>
            <p class="hero-description hidden-xs">Lorem ipsum dolor sit amet, est wisi tantas nostrum no.</p>
            <div class="row hero-search-box">

            {!! Form::open(array('route' => 'searchJob', 'class'=>'form navbar-form navbar-right searchform')) !!}
            {!! Form::text('search', null, array('required', 'class'=>'form-control input-lg search-first', 'placeholder'=>'Search for a tutorial...')) !!}
            {!! Form::submit('Search', array('class'=>'btn btn-default')) !!}
            {!! Form::close() !!}



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
                            <h3>Job Type</h3>
                        </div>
                        <div class="widget-body">
                            @foreach($jobs as $job)
                            <ul class="trends">
                                <li><a href="#">{{ $job->jobType }} &nbsp;<span class="item-numbers">                 
                                <?php
                                $db = mysqli_connect("localhost", "root", "", "amarjobs");
                                $query = mysqli_query($db,"select count(jobType) as total from jobs where jobType = 'FullTime' ");
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


                                    @if (count($jobs) === 0)
                                    <?php echo "dont know"; ?>
                                    @elseif (count($jobs) >= 1)

                                        @foreach($jobs as $job)
                                        <article>
                                            <p>{{$job->jobSummary}}</p>
                                        </article>
                                        @endforeach
                                    @endif




                                    @foreach($jobs as $job)
                                    <div class="job_listings">
                                        <h4>
                                            <a href="">{{$job->jobTitle}}</a> 
                                            @if($job->featuredJob)
                                            |
                                            <a class="btn btn-info btn-xs" href="#"> Featured</a>
                                            @endif

                                            <a style="margin-left:1%" href="#" class="btn btn-success btn-xs pull-right"><i class="fa fa-eye"></i></a>
                                            <a href="" class="btn btn-default btn-xs pull-right"><i class="fa fa-heart"><input type="hidden" name="featuredJob" value="1" ></i></a>
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
</div>
@endsection
