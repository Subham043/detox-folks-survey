
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="{{route('image_view')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/logo-sm.png')}}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/logo.png') }}" alt="" height="20">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="{{route('image_view')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/logo-sm.png')}}" alt="" style="height: 30px; object-fit:contain;">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/logo.png') }}" alt="" style="height: 60px; object-fit:contain;">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            @if(Auth::user() &&  Auth::user()->userType == 1)
                            <li class="nav-item">
                                <a class="nav-link menu-link {{strpos(url()->current(),'user') !== false ? 'active' : ''}}" href="{{route('subadmin_view')}}">
                                    <i class="ri-admin-fill"></i> <span data-key="t-widgets">Users</span>
                                </a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link menu-link {{strpos(url()->current(),'survey') !== false ? 'active' : ''}}" href="{{route('image_view')}}">
                                    <i class="ri-survey-fill"></i> <span data-key="t-widgets">Surveys</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
