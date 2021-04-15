@yield('header')

        <!-- ===== nav bar ===== -->
        <nav class="navbar navbar-light navbar-expand-md">
          <a href="{{route('/')}}"  class="text-capitalize navbar-brand" >
            <img src="users/icon/brand.svg" alt="" />
            Accumulator
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#link"
          >
            <img src="users/icon/hamburger.svg" alt="" />
          </button>

          <div class="navbar-collapse collapse justify-content-end" id="link">
            <ul class="navbar-nav text-uppercase">
              <li class="nav-item mt-3 mt-md-0">
                <a href="{{route('/')}}" class="link active">
                  <p>home</p>
                  <span></span>
                </a>
              </li>

              <li class="nav-item mt-3 mt-md-0">
                <a href="{{route('/contact')}}" class="link active1">
                  <p>contact</p>
                  <span></span>
                </a>
              </li>

              <li class="nav-item mt-3 mt-md-0">
                <a href="{{route('/login')}}" class="link active2">
                  <p>
                    login
                    <img class="logout-icon" src="users/icon/logout.svg" alt="" />
                  </p>
                  <span></span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

@yield('content')
