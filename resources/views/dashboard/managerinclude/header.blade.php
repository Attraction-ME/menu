<!-- BEGIN: Header-->


<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto pb-3"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="{{ url('/manager/dashboard') }}"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item pb-3 move-up-li"><a class="navbar-brand" href="{{ url('/manager/dashboard') }}"><img class="brand-logo" style="width: 40px" alt="stack admin logo" src="{{ url('dashboard/app-assets/images/logo/logo.png') }}">
                        <h3 class="brand-text">{{ auth()->user()->name }}</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span id="orderCountt"  class="badge badge-pill badge-danger badge-up"></span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span id="orderCount"  class="notification-tag badge badge-danger float-right m-0">New</span></h6>
                            </li>
                            <audio id="notificationSound">
                                <source src="{{ url('sound/notifaction.mp3') }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            <li id="noti" class="scrollable-container media-list">
                                {{-- <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                        </div>
                                    </div>
                                </a> --}}
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="{{ url('/dashboard/orders') }}">Read all notifications</a></li>
                        </ul>
                    </li>



                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online"><img  src="{{ url('dashboard/app-assets/images/logo/logo.png') }}" alt="avatar"><i></i></div><span class="user-name">{{ auth()->user()->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            @if(auth()->user()->type == 'super-admin')

                            <a class="dropdown-item" href="{{ route('shop.edit', $userShop->id) }}">
                                Profile

                                <i class="feather icon-user"></i>
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <i class="feather icon-power"></i></a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
