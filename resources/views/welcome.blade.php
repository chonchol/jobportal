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
                                <ul class="trends">
                                    <li><a href="#">Smartphone &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Watch &amp; Jewelry &nbsp;<span class="item-numbers">(2,342)</span></a>
                                    </li>
                                    <li><a href="#">Clothes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Shoes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Music &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Furniture &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Photography &nbsp;<span class="item-numbers">(242)</span></a></li>
                                    <li><a href="#">Web Development &nbsp;<span class="item-numbers">(2,342)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-header">
                                <h3>Job Type</h3>
                            </div>
                            <div class="widget-body">
                                <ul class="trends">
                                    <li><a href="#">Full Time &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Contructual &nbsp;<span class="item-numbers">(2,342)</span></a>
                                    </li>
                                    <li><a href="#">Part Time &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Freelance &nbsp;<span class="item-numbers">(2,342)</span></a></li>

                                </ul>
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
                                        <div class="job_listings">
                                            <h4><a href="">This is heading of Job posts</a></h4>
                                            <p>Job Type: Full Time | Salary: $4000 | Posted On: 12.12.12</p>
                                            <article>
                                                <p>I'm looking for a script/scraper that can extract all banner/ads from a given list of websites and shows them on a html/php page, I don't care about design as long as it works and displays them properly. I need to see banners which are displayed</p>
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
                                        <div class="job_listings">
                                            <h4><a href="">This is heading of Job posts</a></h4>
                                            <p>Job Type: Full Time | Salary: $4000 | Posted On: 12.12.12 | <span class="btn btn-info btn-xs"><a style="color: white" href="#">FEATURED</a></span></p>
                                            <article>
                                                <p>I'm looking for a script/scraper that can extract all banner/ads from a given list of websites and shows them on a html/php page, I don't care about design as long as it works and displays them properly. I need to see banners which are displayed</p>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-header">
                                    <h2>Featured</h2>
                                </div>
                                <div id="featured-products" class="owl-carousel owl-carousel-featured">
                                    <div class="item">
                                        <div class="item-ads-grid">
                                            <div class="item-badge-grid featured-ads">
                                                <a href="#">Featured Ads</a>
                                            </div>
                                            <div class="item-img-grid">
                                                <img alt="" src="assets/img/products/product-1.jpg"
                                                     class="img-responsive img-center">
                                            </div>
                                            <div class="item-title">
                                                <a href="detail.php"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am
                                                    </li>
                                                    <li class="item-cat"><i class="fa fa-bars"></i> <a
                                                                href="category.php">Electronics</a> , <a
                                                                href="category.php">Smartphone</a></li>
                                                    <li class="item-location"><a href="category.php"><i
                                                                    class="fa fa-map-marker"></i> Manchester</a></li>
                                                    <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                </ul>
                                            </div>
                                            <div class="product-footer">
                                                <div class="item-price-grid pull-left">
                                                    <h3>$ 100</h3>
                                                    <span>Negotiable</span>
                                                </div>
                                                <div class="item-action-grid pull-right">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Save Favorite" class="btn btn-default btn-sm"><i
                                                                        class="fa fa-heart"></i></a></li>
                                                        <li><a href="detail.php" data-toggle="tooltip"
                                                               data-placement="top" title="Show Details"
                                                               class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item-ads-grid">
                                            <div class="item-badge-grid premium-ads">
                                                <a href="#">Featured Ads</a>
                                            </div>
                                            <div class="item-img-grid">
                                                <img alt="" src="assets/img/products/product-6.jpg"
                                                     class="img-responsive img-center">
                                            </div>
                                            <div class="item-title">
                                                <a href="detail.php"><h4>Samsung Tab 3 V 116</h4></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am
                                                    </li>
                                                    <li class="item-cat"><i class="fa fa-bars"></i> <a
                                                                href="category.php">Electronics</a> , <a
                                                                href="category.php">Smartphone</a></li>
                                                    <li class="item-location"><a href="category.php"><i
                                                                    class="fa fa-map-marker"></i> Manchester</a></li>
                                                    <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                </ul>
                                            </div>
                                            <div class="product-footer">
                                                <div class="item-price-grid pull-left">
                                                    <h3>$ 100</h3>
                                                    <span>Negotiable</span>
                                                </div>
                                                <div class="item-action-grid pull-right">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Save Favorite" class="btn btn-default btn-sm"><i
                                                                        class="fa fa-heart"></i></a></li>
                                                        <li><a href="detail.php" data-toggle="tooltip"
                                                               data-placement="top" title="Show Details"
                                                               class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item-ads-grid highlight-ads">
                                            <div class="item-img-grid">
                                                <img alt="" src="assets/img/products/product-7.jpg"
                                                     class="img-responsive img-center">
                                            </div>
                                            <div class="item-title">
                                                <a href="detail.php"><h4>Sony Experia Z2 LTE</h4></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am
                                                    </li>
                                                    <li class="item-cat"><i class="fa fa-bars"></i> <a
                                                                href="category.php">Electronics</a> , <a
                                                                href="category.php">Smartphone</a></li>
                                                    <li class="item-location"><a href="category.php"><i
                                                                    class="fa fa-map-marker"></i> Manchester</a></li>
                                                    <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                </ul>
                                            </div>
                                            <div class="product-footer">
                                                <div class="item-price-grid pull-left">
                                                    <h3>$ 100</h3>
                                                    <span>Negotiable</span>
                                                </div>
                                                <div class="item-action-grid pull-right">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Save Favorite" class="btn btn-default btn-sm"><i
                                                                        class="fa fa-heart"></i></a></li>
                                                        <li><a href="detail.php" data-toggle="tooltip"
                                                               data-placement="top" title="Show Details"
                                                               class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item-ads-grid">
                                            <div class="item-badge-grid hot-ads">
                                                <a href="#">Featured Ads</a>
                                            </div>
                                            <div class="item-img-grid">
                                                <img alt="" src="assets/img/products/product-1.jpg"
                                                     class="img-responsive img-center">
                                            </div>
                                            <div class="item-title">
                                                <a href="detail.php"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am
                                                    </li>
                                                    <li class="item-cat"><i class="fa fa-bars"></i> <a
                                                                href="category.php">Electronics</a> , <a
                                                                href="category.php">Smartphone</a></li>
                                                    <li class="item-location"><a href="category.php"><i
                                                                    class="fa fa-map-marker"></i> Manchester</a></li>
                                                    <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                </ul>
                                            </div>
                                            <div class="product-footer">
                                                <div class="item-price-grid pull-left">
                                                    <h3>$ 100</h3>
                                                    <span>Negotiable</span>
                                                </div>
                                                <div class="item-action-grid pull-right">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Save Favorite" class="btn btn-default btn-sm"><i
                                                                        class="fa fa-heart"></i></a></li>
                                                        <li><a href="detail.php" data-toggle="tooltip"
                                                               data-placement="top" title="Show Details"
                                                               class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item-ads-grid">
                                            <div class="item-badge-grid featured-ads">
                                                <a href="#">Featured Ads</a>
                                            </div>
                                            <div class="item-img-grid">
                                                <img alt="" src="assets/img/products/product-1.jpg"
                                                     class="img-responsive img-center">
                                            </div>
                                            <div class="item-title">
                                                <a href="detail.php"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am
                                                    </li>
                                                    <li class="item-cat"><i class="fa fa-bars"></i> <a
                                                                href="category.php">Electronics</a> , <a
                                                                href="category.php">Smartphone</a></li>
                                                    <li class="item-location"><a href="category.php"><i
                                                                    class="fa fa-map-marker"></i> Manchester</a></li>
                                                    <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                </ul>
                                            </div>
                                            <div class="product-footer">
                                                <div class="item-price-grid pull-left">
                                                    <h3>$ 100</h3>
                                                    <span>Negotiable</span>
                                                </div>
                                                <div class="item-action-grid pull-right">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Save Favorite" class="btn btn-default btn-sm"><i
                                                                        class="fa fa-heart"></i></a></li>
                                                        <li><a href="detail.php" data-toggle="tooltip"
                                                               data-placement="top" title="Show Details"
                                                               class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
                        <h1 style="text-align: center;font-size: 50px">Employment opportunities for professionals</h1>
                        <h6 style="text-align: center;font-size:16px;font-weight: 500">Lorem ipsum dolor sit amet conse
                            ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum</h6>
                        <p style="text-align: center;"><a href="" title="Read More"
                                                          class="btn btn-success btn-normal btn-inline bigger btn-from-top"
                                                          target="_self">
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
                            <span class="item-info">Items</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-user-plus"></i></span>
                            <div data-refresh-interval="50" data-speed="5000" data-to="427" data-from="0"
                                 class="item-count">427
                            </div>
                            <span class="item-info">Sellers</span>
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
                            <span class="item-info">Members</span>
                        </div>
                    </div>
                </div>
            </div> <!-- / .counter -->
        </div>

    </div>
@endsection
