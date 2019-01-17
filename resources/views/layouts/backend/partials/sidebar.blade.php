        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{Storage::url(Auth::user()->image)}}" width="48" height="48" alt="{{Auth::user()->id}}" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            @if (Auth::user()->role_id == 1)
                            <li><a href="{{route('admin.profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            @else
                            <li><a href="{{route('admin.profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            @endif
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    @if (Request::is('admin*'))
                        <li class="{{ Request::is('admin/dashboard') ? 'active' : ''}}">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="material-icons">home</i>
                                <span>Dahsboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/property*')?'active' : ''}}">
                            <a href="{{ route('admin.property.index') }}">
                                <i class="material-icons">apps</i>
                                <span>Property</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/allsubscriber')?'active' : ''}}">
                            <a href="{{ route('admin.property.subscriber') }}">
                                <i class="material-icons">subscriptions</i>
                                <span>Subscriber</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/alluser*')?'active' : ''}}">
                            <a href="{{route('admin.our.user')}}">
                                <i class="material-icons">supervisor_account</i>
                                <span>All Users</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/profile*')?'active' : ''}}">
                            <a href="{{ route('admin.profile') }}">
                                <i class="material-icons">person</i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/sitetitle*')?'active' : ''}}">
                            <a href="{{ route('admin.sitetitle') }}">
                                <i class="material-icons">brush</i>
                                <span>Site Title</span>
                            </a>
                        </li>
                    @elseif(Request::is('user*'))
                        <li class="{{ Request::is('user/dashboard') ? 'active' : ''}}">
                            <a href="{{ route('user.dashboard') }}">
                                <i class="material-icons">home</i>
                                <span>Dahsboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('user/property*')?'active' : ''}}">
                            <a href="{{ route('user.property.index') }}">
                                <i class="material-icons">apps</i>
                                <span>Property</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('user/profile*')?'active' : ''}}">
                            <a href="{{ route('user.profile') }}">
                                <i class="material-icons">person</i>
                                <span>Profile</span>
                            </a>
                        </li>

                    @endif

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);">Developer House Solution</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>