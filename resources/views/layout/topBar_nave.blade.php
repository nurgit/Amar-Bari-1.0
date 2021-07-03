@section('topBar')
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
  
@endsection