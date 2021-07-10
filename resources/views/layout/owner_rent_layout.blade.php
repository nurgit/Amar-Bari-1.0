

@yield('header')

     
<div class="left dashboard">
    <div class="brand">
      <label for="nav-toggle" class="nav-close-btn">
        <img src="{{asset('users/icon/cross.svg')}}" alt="" />
      </label>
      <img src="{{asset('users/icon/brand.svg')}}" alt="" />
      <h4>amar bari</h4>
    </div>

    <div class="link-wrapper">
      <a href="{{route('owner.dashboard')}}" class="link">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Dashboard.svg')}}" alt="" />
        </div>

        <span>dashboard</span>
      </a>

      <a href="{{route('owner.account')}}" class="link">
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

      <a href="{{route('owner.flat')}}" class="link ">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Flats.svg')}}" alt="" />
        </div>

        <span>flats</span>
      </a>

      <a href="{{route('owner.renter')}}" class="link">
        <div class="svg-bg">
          <img src="{{asset('users/icon/Flats.svg')}}" alt="" />
        </div>

        <span>renter</span>
      </a>

      <a href="{{route('owner.rent')}}"class="link active">
        <div class="svg-bg">
            <img src="{{asset('users/icon/Taka-active.svg')}}" alt="">
          </svg>
        </div>

        <span> rent collection</span>
      </a>
    </div>
    <a href="{{route('/logout')}}" class="btn-log mobile-btn-log"
      >logout

    <img src="{{asset('users/icon/logout.svg" class="log-icon')}}" alt="">
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

  <!--============ to here ==============-->


  <!--              nav   end              -->
  <!--              top bar          -->

  <div class="right">
    <div class="top-bar">
      <!--         calendar      -->
      <div class="calendar text-capitalize">
        <div class="calendar-btn">
          <h5 class="cal-month"></h5>
          <img src="{{asset('users/icon/calendar.svg')}}" class="cal-svg" alt="" />
        </div>
  
        <div class="calendar-dropdown">
          <div class="year">
            <img class="left-arrow" src="{{asset('users/icon/calendar-left-arrow.svg')}}" alt="" srcset="" />
            <p></p>
            <img
              src="{{asset('users/icon/calendar-right-arrow.svg')}}"
              class="right-arrow"
              alt=""
            />
          </div>
  
          <div class="month-container row">
            <div class="col-4 dropdown-months">jan</div>
            <div class="col-4 dropdown-months">feb</div>
            <div class="col-4 dropdown-months">mar</div>
            <div class="col-4 dropdown-months">apr</div>
            <div class="col-4 dropdown-months">may</div>
            <div class="col-4 dropdown-months">jun</div>
            <div class="col-4 dropdown-months">jul</div>
            <div class="col-4 dropdown-months">aug</div>
            <div class="col-4 dropdown-months">sep</div>
            <div class="col-4 dropdown-months">oct</div>
            <div class="col-4 dropdown-months">nov</div>
            <div class="col-4 dropdown-months">dec</div>
          </div>
        </div>
      </div>
      <div class="top-bar-content">
        <!--             dropdown      -->
        <div class="dropdown">
          <button
            class="btn dropdown-toggle  "
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <a>
            <img src="{{asset('users/icon/Uk Flag.svg')}}" alt="" class="uk-flag')}}" >

              english

            <img src="{{asset('users/icon/dropdown.svg')}}" alt=""  class="down-arrow')}}">
            </a>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item  " href="#">
            <img src="{{asset('users/icon/BD Flag.svg')}}" alt="" class="bd-flag')}}">

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
    <div class="tab-bar">
        <div class="tab-container">
            <button class="tab-btn text-uppercase tab-btn-active" data-target="tab1-1">bo1</button>
            <button class="tab-btn text-uppercase" data-target="tab2-2">bo2</button>
        </div>

        <div class="tab-container">
          <div class="paid-btn  ">paid</div>
          <div class="paid-btn  ">due</div>
        </div>
    </div>
              @yield('content')