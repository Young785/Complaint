<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="/conadmin" class="logo">
            <img src="/admin/images/logo.png" alt="">
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search" disabled>
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle icon-user" href="#">
                    <!--<img alt="" src="images/avatar1_small.jpg">-->
                    <i class="fa fa-user"></i>
                    <span class="username">{{ $user->name}}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="/conadmin/account"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="/logout"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <div class="nav notify-row" id="" style="margin: 0;">
                <!--  notification start -->
                {{-- <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle toggle-right-box" href="#">
                            <i class="fa fa-envelope-o" style="padding: 8px;"></i>
                            <span class="badge bg-important">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have 4 Mails</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hello, this is an example msg.
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="/complaint">See all complaints</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    
                    
                    
                </ul> --}}
                <!--  notification end -->
            </div>
        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="/conadmin">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/conadmin/complaint">
                        <i class="fa fa-envelope"></i>
                        <span>Complaints</span>
                    </a>
                </li>
                <li>
                    <a href="/conadmin/account">
                        <i class="fa fa-laptop"></i>
                        <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <i class="fa fa-key"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>        
    </div>
</aside>
    <!--sidebar end-->