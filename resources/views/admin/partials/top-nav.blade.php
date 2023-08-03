<header class="main-header">

    <!-- Logo -->
    <a href="dashboard.aspx" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{{ env('APP_NAME') }}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="text-decoration-line:none;">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                        style="color: #333;text-transform: uppercase;font-weight: 600; font-family: 'IBM Plex Sans', sans-serif;">
                        <span id="spn_username" class="hidden-xs"
                            style="text-transform: capitalize; padding-top: 20px">Welcome Hi,
                            {{ Auth()->user()->username }} &nbsp;</span>
                        <img src="{{ asset('images/user.jpg') }}" style="width: 30px">
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Menu Footer-->
                        <li>
                            <a href="{{ route('change.password') }}" style="padding:7px 8px;"><i class="bx bx-lock"
                                    style="vertical-align:bottom;font-size:22px;color:#7fd0ff"></i> <span
                                    style="margin-left:9px;">Change Password</span></a>
                        </li>
                        <li>
                            <hr style="margin-top:0px;margin-bottom:0px;">
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#myModal" id="btn_logout"
                                href="javascript:__doPostBack(&#39;ctl00$btn_logout&#39;,&#39;&#39;)"
                                style="padding:8px 9px;"><i class="bx bx-power-off"
                                    style="color:red;vertical-align:bottom;font-size:20px;"></i> <span
                                    style="margin-left:10px;">Logout</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>
