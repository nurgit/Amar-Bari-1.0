{{-- This secction using ---dashboard --}}

@yield('header')

 <!--   nav     --left dashboard            -->
 <div class="left dashboard">
    <div class="brand">
      <label for="nav-toggle" class="nav-close-btn">
        <img src="{{asset('users/icon/cross.svg')}}" alt="" />
      </label>
      <img src="{{asset('users/icon/brand.svg')}}" alt="" />
      <h4>amar bari</h4>
    </div>

    <div class="link-wrapper">
      <a href="{{route('owner.dashboard')}}" class="link active">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Dashboard-active.svg')}}" alt="" />
        </div>

        <span>dashboard</span>
      </a>

      <a href="{{route('owner.account')}}" class="link ">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Accounts.svg')}}" alt="" />
        </div>

        <span>accounts </span>
      </a>

      <a href="{{route('owner.building')}}" class="link ">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Buildings.svg')}}" alt="" />
        </div>

        <span> buildings</span>
      </a>

      <a href="{{route('owner.flat')}}" class="link">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Flats.svg')}}" alt="" />
        </div>

        <span>flats</span>
      </a>

      <a href="{{route('owner.flat')}}" class="link">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Flats.svg')}}" alt="" />
        </div>

        <span>renter</span>
      </a>

      <a href="{{route('owner.rent')}}" class="link">
        <div class="svg-bg">
            <img src="{{asset('users/icon/Taka.svg')}}" alt="">
          </svg>
        </div>

        <span> rent collection</span>
      </a>

      
    </div>
    <a href="index.html" class="btn-log mobile-btn-log"
      >logout

    <img src="{{asset('users/icon/logout.svg')}}" class="log-icon" alt="">
    </a>
    <div class="credit">
      Powered By
      <a
        href="https://citsbd.com/?fbclid=IwAR2NtqYvbOZWAENAAKMCI7aIFLvJG7C_PO7UlvUL4-bnswRSAUt27kkrxfE"
        target="_blank"
        >Chowdhury It Solutions pvt Ltd.</a
      >
    </div>
  </div>

  <!--              nav   end  --left dashboard            -->




        <!--              top bar          -->
        <div class="right">
          <div class="top-bar">
            <div class="bar-content">
              <!--             dropdown      -->
              <div class="dropdown">
                <button
                  class="btn dropdown-toggle text-capitalize"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <a>
                  <img src="{{asset('users/icon/Uk Flag.svg')}}" alt="" class="uk-flag" >
  
                    english
  
                  <img src="{{asset('users/icon/dropdown.svg')}}" alt=""  class="down-arrow')}}">
                  </a>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-capitalize" href="#">
                  <img src="{{asset('users/icon/BD Flag.svg')}}" alt="" class="bd-flag">
  
                    bangla</a
                  >
                </div>
              </div>
  
              <a href="{{route('/logout')}}" class="btn-log"
                >logout
  
                <img src="{{asset('users/icon/logout.svg')}}" alt="" class="log-icon"  >
              </a>
            </div>
          </div>

  @yield('content')