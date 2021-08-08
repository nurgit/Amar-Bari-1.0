@extends('layout.owner_nave')
@section('header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Renter</title>
    <link rel="icon" href="{{asset('users/icon/brand.svg')}}" />
    <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('users/css/flats.css')}}" />
  </head>

  <body>
    <script src="{{asset('users/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('users/js/bootstrap.bundle.min.js')}}"></script>

    <div class="glass-bg"></div>

    <div class="body-con">
      <div class="object-1"></div>
      <div class="object-2"></div>
      <div class="object-3"></div>

      <!-- don't touch this code from here -->
      <input type="checkbox" name="" id="nav-toggle" />
      <div class="toggle-con">
        <label for="nav-toggle" class="toggler">
          <img src="{{asset('users/icon/brand.svg')}}" alt="" />
        </label>
      </div>
@endsection



@section('content')

        <!--              top bar              -->
        <div class="tab-bar">

        <form action="">

          <select class="form-control">
            <option> Select House & flat</option>
          </select>

        </form>
          
          {{-- <div class="tab-container">
            <button class="tab-btn text-uppercase tab-btn-active" data-target="B-all">All</button>
            @if (count($houses)>0)
              @foreach ($houses as $house)
                @if ($house->dlt==1)
                  <button class="tab-btn text-uppercase" data-target="H-{{$house->id}}">{{$house->name}}</button>   
                @endif
              @endforeach     
            @endif
        </div>
        </div> --}}

{{-- <div class="card-section row">
    <div class="first-row col-12">
      <p class="caption text-capitalize col-12">Renter</p>
      
              <p>
                @if (Session::get('successCreateOne'))
                <div style="margin-right: 17%" class="alert alert-success">
                  {{Session::get('successCreateOne')}}
                </div>
                @endif
        
                @if (Session::get('faillCreateOne'))
                <div class="alert alert-danger">
                  {{Session::get('faillCreateOne')}}
                </div>
                @endif
            </p> --}}
      
      {{-- <div class="cards row active-tab" id="B-all">
        @if (count($renters)>0)
          @foreach ($renters as $renter)
            @if ( $renter->dlt==1)
                <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
                  <div class="top-section">
                    <h1 class="flat-no">Renter: - </h1>
                    <p class="rent">Name:{{$renter->name}}</p>
                    <p class="rent">Phone:{{$renter->phone}}</p>
                  </div>
  
                  <div class="mid-section">
                    <p class="size">Flat: {{$renter->flat_no}}</p>
                    <p class="number">House Name:{{$house->name}}</p>
                    <p class="name">Holding No:{{$renter->holding_no}}</p>
                   
                  </div>

                  <div class="bottom-card-section">
                  <button class="edit text-capitalize" data-toggle="modal" data-target="#update-modal-{{$renter->id}}">
                    edit
                    <img src="{{asset('users/icon/edit-pen.svg')}}" alt="">
                  </button>
                  </div>

                  <img src="{{asset('users/icon/Flat 3D.svg')}}" alt="" class="card-building">

                  <div
                    class="delete-con"
                    data-toggle="modal"
                    data-target="#del-modal-{{$renter->id}}"
                  ></div>
                  <svg
                    class="delete-svg"
                    width="14"
                    height="19"
                    viewBox="0 0 14 19"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1 16.8889C1 18.05 1.9 19 3 19H11C12.1 19 13 18.05 13 16.8889V4.22222H1V16.8889ZM3.46 9.37333L4.87 7.885L7 10.1228L9.12 7.885L10.53 9.37333L8.41 11.6111L10.53 13.8489L9.12 15.3372L7 13.0994L4.88 15.3372L3.47 13.8489L5.59 11.6111L3.46 9.37333ZM10.5 1.05556L9.5 0H4.5L3.5 1.05556H0V3.16667H14V1.05556H10.5Z"
                    />
                    <defs>
                      <linearGradient
                        id="paintLinear"
                        x1="0"
                        y1="0"
                        x2="36"
                        y2="32"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#5EC5FF" />
                        <stop offset="1" stop-color="#285AD8" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                
            @endif
          @endforeach
            
        @endif

  
      </div> --}}

{{-- -=====================Get Renter sort by building================= --}}
    {{-- @foreach ($houses as $house)
    <div class="cards row " id="H-{{$house->id}}">
      @if (count($renters)>0)
        @foreach ($renters as $renter)
          @if ( $renter->dlt==1 && $renter->house_id==$house->id)
              <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
                <div class="top-section">
                  <h1 class="flat-no">Renter: - </h1>
                  <p class="rent">Name:{{$renter->name}}</p>
                  <p class="rent">Phone:{{$renter->phone}}</p>
                </div>

                <div class="mid-section">
                  <p class="size">Flat: {{$renter->flat_no}}</p>
                  <p class="number">House Name:{{$house->name}}</p>
                  <p class="name">Holding No:{{$renter->holding_no}}</p>
                 
                </div>

                <div class="bottom-card-section">
                <button class="edit text-capitalize" data-toggle="modal" data-target="#update-modal-{{$renter->id}}">
                  edit
                  <img src="{{asset('users/icon/edit-pen.svg')}}" alt="">
                </button>
                </div>

                <img src="{{asset('users/icon/Flat 3D.svg')}}" alt="" class="card-building">

                <div
                  class="delete-con"
                  data-toggle="modal"
                  data-target="#del-modal-{{$renter->id}}"
                ></div>
                <svg
                  class="delete-svg"
                  width="14"
                  height="19"
                  viewBox="0 0 14 19"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1 16.8889C1 18.05 1.9 19 3 19H11C12.1 19 13 18.05 13 16.8889V4.22222H1V16.8889ZM3.46 9.37333L4.87 7.885L7 10.1228L9.12 7.885L10.53 9.37333L8.41 11.6111L10.53 13.8489L9.12 15.3372L7 13.0994L4.88 15.3372L3.47 13.8489L5.59 11.6111L3.46 9.37333ZM10.5 1.05556L9.5 0H4.5L3.5 1.05556H0V3.16667H14V1.05556H10.5Z"
                  />
                  <defs>
                    <linearGradient
                      id="paintLinear"
                      x1="0"
                      y1="0"
                      x2="36"
                      y2="32"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#5EC5FF" />
                      <stop offset="1" stop-color="#285AD8" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              
          @endif
        @endforeach
          
      @endif

      <div class="add mr-4 mr-xl-5 mb-sm-5 mb-4">
        <div
          class="add-btn"
          data-toggle="modal"
          data-target="#add-{{$house->id}}"
        >
        
        <img src="{{asset('users/icon/Union.svg')}}" alt=""class="add-icon">
        </div>
      </div>
    </div>
        
    @endforeach


    </div> --}}







<!--===============  delete modal ===============  -->


<script >
  /////// tab functions
        const tabs = document.querySelectorAll('.cards');
        const tabBtn = document.querySelectorAll('.tab-btn');
        
        tabBtn.forEach(function (btn) {
          btn.addEventListener('click',function (e) {
            
            for (let j = 0; j < tabs.length; j++) {
              tabs[j].classList.remove('active-tab');
            }
            
            document.getElementById(e.currentTarget.dataset.target).classList.add('active-tab') 
  
            for (let i = 0; i < tabBtn.length; i++) {
              tabBtn[i].classList.remove('tab-btn-active');
            }
            
            e.currentTarget.classList.add('tab-btn-active')
          })
        })
      </script>
          <script src="{{asset('users/js/link.js')}}">
  
          </script>
</body>
</html>
@endsection