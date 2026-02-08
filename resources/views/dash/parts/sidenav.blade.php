<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dash') }}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <h4>DIGITAL CARE WEEK</h4>
                <img src="/assets/images/logo-wr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">

                <li class="nxl-item ">
                    <a href="{{ route('dash') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>

                </li>

                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'reception')
                <li class="nxl-item ">
                    <a href="{{url('/reception')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file"></i></span>
                        <span class="nxl-mtext">Reception</span>
                    </a>

                </li>
                @endif

                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'hardware')
                <li class="nxl-item ">
                    <a href="{{url('/hardware')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-settings"></i></span>
                        <span class="nxl-mtext">Hardware</span>
                    </a>

                </li>
                @endif

                @if(Auth::user()->type == 'admin' || Auth::user()->type == 'software')
                <li class="nxl-item ">
                    <a href="{{url('/software')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Software</span>
                    </a>

                </li>
                @endif

                @if(Auth::user()->type == 'admin')
                <li class="nxl-item ">
                    <a href="{{url('/payments')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                        <span class="nxl-mtext">Payment</span>
                    </a>

                </li>
                @endif

                @if(Auth::user()->type == 'admin')
                <li class="nxl-item ">
                    <a href="{{url('/users')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Users</span>
                    </a>

                </li>
                @endif


                <li class="nxl-item ">
                    <a href="{{ route('logout') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-log-out"></i></span>
                        <span class="nxl-mtext">Logout</span>
                    </a>

                </li>

            </ul>

        </div>
    </div>
</nav>