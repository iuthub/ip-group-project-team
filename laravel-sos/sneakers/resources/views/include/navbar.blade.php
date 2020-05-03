<nav class="nav-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="/" class="logo" send="#logo">
              {{ config('app.name', 'Laravel') }}
            </a>
          </div>
          <div class="col-md-8 ml-0  col-12 d-flex align-items-center justify-content-center justify-content-md-start">
            <div class="navigation">
              <a href="/men" class="navigation-link">Men</a>
              <a href="/women" class="navigation-link">Women</a>
              <a href="/posts" class="navigation-link">Blog</a>
              <a href="/contact" class="navigation-link" send="#contact">Contact us</a>
            </div>
          </div>
          <div class="col-md-2 col-12 ml-3 mt-2 mt-md-0 ml-md-0 d-flex justify-content-center">
            <div class="cart">
            <ul class="nav d-flex align-itmes-center justify-content-center">
              @guest
                     <a class=" navigation-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  @if (Route::has('register'))
                     <a class="navigation-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  @endif
              @else
                  <div class="dropdown">
                    <a href="#" class="icon" class="dropbtn">
                       <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-content">
                      <a href="#">{{ Auth::user()->name }}</a>
                      <a href="#">My Bag</a>
                      <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                      </a>
                      @if(Auth::user()->email == 'jasur.khakimov9@gmail.com')
                        <a href="/dashboard">Dashboard</a>
                      @endif
                    </div>
                </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                      </form>
                   </div>
              @endguest
              </ul>
              {{-- 
              <div class="dropdown">
                <a href="#" class="icon" class="dropbtn">
                  <i class="fas fa-user-circle"></i>
                </a>

                <div class="dropdown-content">
                  <a href="#">My account</a>
                  <a href="#">Log out</a>
                </div>
              </div>
              <a href="#" class="icon"><i class="fas fa-shopping-cart"></i></a>
              <br>
              <a href="#" class="btn btn-primary">Login</a>
              <a href="#" class="btn btn-success">Register</a> --}}

            </div>
          </div>
        </div>
      </div>
    </nav>