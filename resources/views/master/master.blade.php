<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>{{$title}}</title>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/colors/green.css')}}">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="wrapper">


            <!-- Header
            ================================================== -->
            <header class="transparent sticky-header">
                <div class="container">
                    <div class="sixteen columns">

                        <!-- Logo -->
                        <div id="logo">
                            <h1><a href="index.html"><img src="images/logo2.png" alt="Work Scout" /></a></h1>
                        </div>

                        <!-- Menu -->
                        <nav id="navigation" class="menu">
                            <ul id="responsive">
                                <li><a href="index.html" id="current">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home #1</a></li>
                                        <li><a href="index-2.html">Home #2</a></li>
                                        <li><a href="index-3.html">Home #3</a></li>
                                        <li><a href="index-4.html">Home #4</a></li>
                                        <li><a href="index-5.html">Home #5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="job-page.html">Job Page</a></li>
                                        <li><a href="job-page-alt.html">Job Page Alternative</a></li>
                                        <li><a href="resume-page.html">Resume Page</a></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">For Candidates</a>
                                    <ul>
                                        <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                        <li><a href="browse-categories.html">Browse Categories</a></li>
                                        <li><a href="add-resume.html">Add Resume</a></li>
                                        <li><a href="manage-resumes.html">Manage Resumes</a></li>
                                        <li><a href="job-alerts.html">Job Alerts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">For Employers</a>
                                    <ul>
                                        <li><a href="add-job.html">Add Job</a></li>
                                        <li><a href="manage-jobs.html">Manage Jobs</a></li>
                                        <li><a href="manage-applications.html">Manage Applications</a></li>
                                        <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                            <ul class="float-right">
                                <li><a href="my-account.html#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
                                <li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
                            </ul>
                        </nav>
                        <!-- Navigation -->
                        <div id="mobile-navigation">
                            <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                        </div>
                    </div>
                </div>
            </header>
            @yield('main_content');
            <!-- Back To Top Button -->
            <div id="backtotop"><a href="#"></a></div>

        </div>
        <!-- Wrapper / End -->
        <!-- Scripts
        ================================================== -->
        <script src="{{asset('public/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{asset('public/js/custom.js')}}"></script>
        <script src="{{asset('public/js/jquery.superfish.js')}}"></script>
        <script src="{{asset('public/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.themepunch.showbizpro.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('public/js/chosen.jquery.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/js/waypoints.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.jpanelmenu.js')}}"></script>
        <script src="{{asset('public/js/stacktable.js')}}"></script>
        <script src="{{asset('public/js/slick.min.js')}}"></script>
        <script src="{{asset('public/js/headroom.min.js')}}"></script>
    </body>

</html>