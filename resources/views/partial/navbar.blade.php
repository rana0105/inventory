<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                {{ $name[0] }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if (Auth::check())
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Category <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('category') }}">
                                      Parent Category
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('subcategory') }}">
                                      Sub Category
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('customer') }}">
                                      Customer
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Inventory <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('shelfs') }}">
                                     Shelf
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('levels') }}">
                                      Level
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('warehouse') }}">
                                      Warehouse
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('item') }}">
                                      Item
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('barcode') }}">
                                      Show Barcode
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('purchase') }}">
                                      Purchase
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('sale/create') }}">
                                      Sale
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('stock') }}">
                                      Stock
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('payment') }}">
                                      Payment
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Report <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('purchase-report') }}">
                                      Purchase Report
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('sale-report') }}">
                                      Sale Report
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('stock-report') }}">
                                      Stock Report
                                  </a>
                              </li>
                          </ul>
                      </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                 @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Settings <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @can('view_users')
                                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                         Users
                                    </a>
                                </li>
                            @endcan
                            @can('view_roles')
                              <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                                  <a href="{{ route('roles.index') }}">
                                       Roles
                                  </a>
                              </li>
                            @endcan
                            <li>
                                <a href="{{ url('gsetting') }}">
                                    General Setting
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                    

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-align: center;">
                        <span><img src="{{asset('images/user.png')}}" class="img-responsive" alt="" height="30" width="30" ></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                            <a href="#">
                              {{ Auth::user()->name }}</br>
                            <span class="label label-default">{{ Auth::user()->roles->pluck('name')->first() }}</span>
                            </a>
                              
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="glyphicon glyphicon-log-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
