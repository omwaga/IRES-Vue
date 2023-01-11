<div class="ires-header">
    <!-- top bar -->
    <div class="ires-topbar">
        <div class="row">
            <!-- country selector -->
            <div class="col-sm-2" style="width:50%;">

                <div class="cselector dropdown">

                     @if ( request()->getHttpHost() == config('domains.rwanda') )

                        <a class="btn dropdown-toggle" href="#" role="button" id="country-selector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('front/assets/img/flags/rw.png') }}" alt="Kenyan Flag" width="20px"> Rwanda
                        </a>

                     @else

                        <a class="btn dropdown-toggle" href="#" role="button" id="country-selector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('front/assets/img/flags/ke.png') }}" alt="Kenyan Flag" width="20px"> Kenya
                        </a>

                    @endif

                    <div class="dropdown-menu" aria-labelledby="country-selector">

                        @if ( request()->getHttpHost() == config('domains.rwanda') )

                            <a class="dropdown-item" href="https://www.indepthresearch.org">
                                <img src="{{ asset('front/assets/img/flags/ke.png') }}" alt="Kenyan Flag" width="20px"> Kenya
                            </a>

                        @else

                            <a class="dropdown-item" href="https://www.indepthresearch.co.rw">
                                <img src="{{ asset('front/assets/img/flags/rw.png') }}" alt="Kenyan Flag" width="20px"> Rwanda
                            </a>

                        @endif

                        <!--<a class="dropdown-item" href="#"><img src="{{ asset('front/assets/img/flags/ug.png') }}" alt="Kenyan Flag" width="20px"> Uganda</a>-->
                    </div>
                </div>

            </div>
            <!-- home menu -->
            <div class="col-sm-8 d-none d-sm-block">
                <nav class="navbar-expand-lg">
                    <div class="collapse navbar-collapse home-menu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://blog.indepthresearch.org/">Insights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Become a Consultant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://webinars.indepthresearch.org/">Webinars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Hotel Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown" style="font-size: 13.5px;">
                                @auth
                                    <a class="nav-link" href="#"  id="tourLearn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Account<span class="has-child fa fa-chevron-down"></span></a>
                                    <!-- tour and learn menu -->
                                    <div class="dropdown-menu simple-menu" aria-labelledby="tourLearn">
                                        <a class="dropdown-item" href="{{ route(Auth::user()->role == 'customer' ? 'customer.account.profile.show' : 'backoffice.profile.edit') }}">
                                            My Profile
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                        confirm('Are you sure to logout') ? document.getElementById('logout-form').submit() : NaN">
                                            Logout
                                        </a>
                                    </div>

                                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                                        @csrf
                                    </form>
                                @endauth

                                @guest
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white">
                                        Login / Register
                                    </a>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- social icons -->
            <div class="col-sm-2" style="width:50%;">
                <!--<div class="tb-social">
                    <a class="fb" href="https://www.facebook.com/indepthresearch" target="_blank" title="Follow us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a class="tw" href="https://twitter.com/Indepthresearch" target="_blank" title="Follow us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="in" href="https://www.linkedin.com/company/indepth-research-services" target="_blank" title="Follow us on LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="fl" href="https://www.flickr.com/photos/indepthresearch" target="_blank" title="Follow us on Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                </div>-->

                <div class="tb-social-tel">

                    @if ( request()->getHttpHost() == config('domains.rwanda') )

                        <span class="fa fa-phone"></span>
                        <a href="tel:+250789621067">(+250) 789 621 067</a>

                    @else

                        <span class="fa fa-phone"></span>
                        <a href="tel:+254715077817">(+254) 715 077 817</a>

                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- END top bar -->

    <!-- navbar -->
    <div class="main-nav">

        <nav class="navbar main-navbar navbar-expand-lg" id="stickyMainNav">
            <a class="navbar-brand mn-logo" href="">
                <img src="{{ asset('front/assets/img/logo/ires.png') }}">
            </a>

            <div class="hh-search">
                <a class="search-collapse collapsed" data-toggle="collapse" href="#searchCollapse">
                    <span class="fa fa-search mn-search"></span>
                    <span class="fa fa-close mnm-close"></span>
                </a>
            </div>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-close nt-close"></span>
                <span class="fa fa-bars nt-open"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown mega-menu-li-4c">
                        <a class="nav-link" href="" id="trainingCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Executive Short Courses<span class="has-child fa fa-chevron-down"></span></a>
                        <!-- training calendar menu -->
                        <div class="dropdown-menu mega-menu mega-menu-4c" aria-labelledby="trainingCategories">
                            <div class="row">

                                    <div class="mn-col col-sm-3">
                                        <span class="mm-title">
                                            <a href="">
                                                Category
                                            </a>
                                        </span>

                                            <a class="dropdown-item" href="">
                                                Sub category
                                            </a>

                                    </div>


                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#"  id="trainingCalendar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Training Calendar<span class="has-child fa fa-chevron-down"></span></a>

                        <div class="dropdown-menu simple-menu" aria-labelledby="trainingCalendar">
                            <a class="dropdown-item" href="{{route('calendar')}}">
                                Training Calendar Year
                            </a>
                            <a class="dropdown-item" href="">
                                Training Calendar Year + 1
                            </a>
                            <a class="dropdown-item" href="">
                                5-Day Training Courses
                            </a>
                            <a class="dropdown-item" href="">
                                10-Day Training Courses
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mega-menu-li-4c">
                        <a class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Professional Certifications<span class="has-child fa fa-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu mega-menu mega-menu-4c">
                            <div class="row">
                                    <div class="mn-col col-sm-3">
                                        <span class="mm-title">
                                            <a href="">
                                                Category
                                            </a>
                                        </span>

                                            <a class="dropdown-item" href="">
                                                Sub category
                                            </a>

                                    </div>


                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Tour & Learn</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Enterprise Software</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://datalab.indepthresearch.org/" id="consultancyServices">Data Science Lab</a>
                    </li>

                    <!--<li class="nav-item dropdown mega-menu-li-4c">-->
                    <!--    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultancy Services<span class="has-child fa fa-chevron-down"></span></a>-->
                        <!-- consultancy services menu -->
                    <!--    <div class="dropdown-menu mega-menu mega-menu-4c" aria-labelledby="consultancyServices">-->
                    <!--        <div class="row">-->
                    <!--            <div class="mn-col col-sm-6">-->
                    <!--                <span class="mm-title">Services & Capabilities</span>-->
                    <!--                <a class="dropdown-item" href="#">Market Research</a>-->
                    <!--                <a class="dropdown-item" href="#">Software and App development</a>-->
                    <!--                <a class="dropdown-item" href="#">Survey Research & Data collection</a>-->
                    <!--                <a class="dropdown-item" href="#">Environment Impact Assessment</a>-->
                    <!--                <a class="dropdown-item" href="#">GIS mapping & Analysis</a>-->
                    <!--                <a class="dropdown-item" href="#">M & E</a>-->
                    <!--                <a class="dropdown-item" href="#">Agriculture surveys</a>-->
                    <!--                <a class="dropdown-item" href="#">Occupational Health and Safety</a>-->
                    <!--                <a class="dropdown-item" href="#">Energy Audit</a>-->
                    <!--                <a class="dropdown-item" href="#">Risk Management</a>-->
                    <!--                <a class="dropdown-item" href="#">Project Management</a>-->
                    <!--                <a class="dropdown-item" href="#">Digital Communication</a>-->
                    <!--                <a class="dropdown-item" href="#">Data Science & Business Analytics</a>-->
                    <!--            </div>-->
                    <!--            <div class="mn-col col-sm-6">-->
                    <!--                <span class="mm-title">Practice Areas</span>-->
                    <!--                <a class="dropdown-item" href="#">Education</a>-->
                    <!--                <a class="dropdown-item" href="#">Agriculture</a>-->
                    <!--                <a class="dropdown-item" href="#">Health Policy & Epidomology</a>-->
                    <!--                <a class="dropdown-item" href="#">Manufacturing</a>-->
                    <!--                <a class="dropdown-item" href="#">Humanitarian & International development</a>-->
                    <!--                <a class="dropdown-item" href="#">Social Policy & Economics</a>-->
                    <!--                <a class="dropdown-item" href="#">Transport</a>-->
                    <!--                <a class="dropdown-item" href="#">Food Security & Agriculture</a>-->
                    <!--                <a class="dropdown-item" href="#">Energy Research</a>-->
                    <!--                <a class="dropdown-item" href="#">Governance, Social & Justice policy</a>-->
                    <!--                <a class="dropdown-item" href="#">Environmental Sciences</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</li>-->

                    <!-- menu section visible on handheld devices (a duplicate of home menu)-->
                    <span class="hh-home-menu">
                        <hr/>
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item dropdown mega-menu-li-h2c">
                            <a class="nav-link" href="#" id="consultancyServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultancy Services<span class="has-child fa fa-chevron-down"></span></a>
                            <!-- consultancy services menu -->
                            <div class="dropdown-menu mega-menu mega-menu-h2c" aria-labelledby="consultancyServices">
                                <div class="row">
                                    <div class="mn-col col-sm-6">
                                        <span class="mm-title">Services & Capabilities</span>
                                        <a class="dropdown-item" href="#">Market Research</a>
                                        <a class="dropdown-item" href="#">Software and App development</a>
                                        <a class="dropdown-item" href="#">Survey Research & Data collection</a>
                                        <a class="dropdown-item" href="#">Environment Impact Assessment</a>
                                        <a class="dropdown-item" href="#">GIS mapping & Analysis</a>
                                        <a class="dropdown-item" href="#">M & E</a>
                                        <a class="dropdown-item" href="#">Agriculture surveys</a>
                                        <a class="dropdown-item" href="#">Occupational Health and Safety</a>
                                        <a class="dropdown-item" href="#">Energy Audit</a>
                                        <a class="dropdown-item" href="#">Risk Management</a>
                                        <a class="dropdown-item" href="#">Project Management</a>
                                        <a class="dropdown-item" href="#">Digital Communication</a>
                                        <a class="dropdown-item" href="#">Data Science & Business Analytics</a>
                                    </div>
                                    <div class="mn-col col-sm-6">
                                        <span class="mm-title">Practice Areas</span>
                                        <a class="dropdown-item" href="#">Education</a>
                                        <a class="dropdown-item" href="#">Agriculture</a>
                                        <a class="dropdown-item" href="#">Health Policy & Epidomology</a>
                                        <a class="dropdown-item" href="#">Manufacturing</a>
                                        <a class="dropdown-item" href="#">Humanitarian & International development</a>
                                        <a class="dropdown-item" href="#">Social Policy & Economics</a>
                                        <a class="dropdown-item" href="#">Transport</a>
                                        <a class="dropdown-item" href="#">Food Security & Agriculture</a>
                                        <a class="dropdown-item" href="#">Energy Research</a>
                                        <a class="dropdown-item" href="#">Governance, Social & Justice policy</a>
                                        <a class="dropdown-item" href="#">Environmental Sciences</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </span>
                </ul>
                <div class="ml-3 my-lg-0 d-none d-lg-block mn-searchdiv">
                    <a class="search-collapse collapsed" data-toggle="collapse" href="#searchCollapse">
                        <span class="fa fa-2x fa-search mnd-search" title="Search"></span>
                        <span class="fa fa-close mnd-close" title="Close"></span>
                    </a>
                </div>
            </div>
        </nav>

    </div>

    <!-- END navbar -->

    <!-- search form -->
    <form action="" method="get" class="collapse mn-searchsec" id="searchCollapse">

        <div class="container input-group">
            <input type="text" class="form-control drop-search" placeholder="Search..." autofocus name="search" value="">
            <div class="input-group-append">
                <button class="mn-fs fa fa-2x fa-search" type="submit"></button>
            </div>
        </div>

    </form>
    <!-- END search form -->
</div>
