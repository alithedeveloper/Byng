<!-- Navigation -->
<nav class="navbar navbar-default site-navigation" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#fantastic-media-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">ABC Studios</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="fantastic-media-navbar">
        <ul class="nav navbar-nav navbar-right">
            <!-- Check whether user is a guest then show login form-->
            @if (Auth::guest())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle menu-form-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Login</a>
                    <ul class="dropdown-menu menu-login">
                       @include ('partials/login_errors')
                        <li class="dropdown">
                            <div class="dropdown login-form__wrapper">
                               @include( 'partials.login' )
                            </div>
                        </li>
                    </ul>
                </li><!-- dropdown -->
                @else
                        <!-- User is actually verified and logged in so changed navigation -->
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/articles"><i class="fa fa-file-text"></i> Articles</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="true">
                         <i class="fa fa-chevron-down"></i> My Profile</a> 
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#"><i class="fa fa-user"></i> Profile Overview</a></li>
                            <li><a tabindex="-1" href="#"><i class="fa fa-th-list"></i> Operating Standards</a></li>
                            <li><a tabindex="-1" href="#"><i class="fa fa-calendar"></i> Events</a></li>
                            <li><a tabindex="-1" href="#"><i class="fa fa-star"></i> Opportunities</a></li>
                            <li><a tabindex="-1" href="#"><i class="fa fa-file-o"></i> Qualifications</a></li>
                        </ul>
                </li>
                <li><a href="#"><i class="fa fa-chevron-down"></i> My Account</a></li>
                <li><a href="{{ route('logout_path')}}"><i class="fa fa-unlock-alt"></i> Logout </a></li>

            @endif

        </ul>
        <!-- navbar-right-->
    </div>
    <!-- /.navbar-collapse -->
    <!-- /.container -->
</nav>
