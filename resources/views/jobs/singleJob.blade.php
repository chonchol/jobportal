@extends('layouts.theme')

@section('content')
    <div class="wrapper">
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
                                    <li><a href="#">{{ $category->categoryName}} &nbsp;<span class="item-numbers">(2,342)</span></a></li>
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
                                    <li><a href="#">{{ $job->jobType }} &nbsp;<span class="item-numbers">(2,342)</span></a></li>
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

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
