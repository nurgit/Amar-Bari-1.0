
@extends('layout.owner_nave')

@section('header')
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Dashboard</title>
          <link rel="icon" href="{{asset('users/icon/brand.svg')}}" />
          <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
          <link rel="stylesheet" href="{{asset('users/css/acc.css')}}" />
          {{-- <link rel="stylesheet" href="{{asset('users/css/dashboard.css')}}" /> --}}
         
        </head>
        <body>

          <script src="{{asset('users/js/jquery-3.5.1.min.js')}}"></script>
            <script src="{{asset('users/js/bootstrap.bundle.min.js')}}"></script>

          <div class="glass-bg"></div>

          <div class="body-con">
            <div class="object-1"></div>
            <div class="object-2"></div>
            <div class="object-3"></div>

            <input type="checkbox" name="" id="nav-toggle" />
            <div class="toggle-con">
              <label for="nav-toggle" class="toggler">
                <img src="{{asset('users/icon/brand.svg')}}" alt="" />
              </label>
            </div> 
@endsection




@section('content')
<div class="card-section row">
  <div class="first-row col-12">
      <p class="caption text-capitalize col-12">user</p>
      <div class="cards row">
        <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
          <h1 class="name">
            <span>reaz</span>
            chowdhury
          </h1>
     
          <p class="id">id: 5550116</p>

          <p class="location">Raily R/A, Bandar, N.ganj</p>

          <p class="number">01234567891</p>

          <button class="edit text-capitalize" data-toggle="modal" data-target="#acc-modal">
            edit
          <img src="{{asset('users/icon/edit-pen.svg')}}" alt="">
          </button>

          <img src="{{asset('users/icon/building- 3D.svg')}}" alt="" class="card-building">

          <div
            class="delete-con"
            data-toggle="modal"
            data-target="#del-modal"
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

        <div class="add mr-4 mr-xl-5 mb-sm-4 mb-4">
          <div
            class="add-btn"
            data-toggle="modal"
            data-target="#acc-modal"
          >
          <img src="{{asset('users/icon/Union.svg')}}" alt=""class="add-icon')}}">
          </div>
        </div>
      </div>
    </div>

    
    {{-- manager section --}}
    <div class="col-12 second-row">
      <p class="caption text-capitalize col-12">manager</p>
      <p  style="width: 60%;" > @if (Session::get('successCreateOne'))
        <div class="alert alert-success">
          {{Session::get('successCreateOne')}}
        </div>
        @endif

        @if (Session::get('faillCreateOne'))
        <div class="alert alert-danger">
          {{Session::get('faillCreateOne')}}
        </div>
        @endif</p>
        {{-- need Upgrade --}}
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
      <div class="cards row">

          @if (count($managers)>0)

          @foreach ($managers as $manager)
            @if ($manager->status==1)
              @if ($manager->dlt==1)
                <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
                  <h1 class="name">
                    <span>{{ $manager->username}}</span>
                    {{-- {{ $manager->name}} --}}
                  </h1>
          
                  <p class="id">id: {{ $manager->id}}</p>
          
                  <p class="location">{{ $manager->city}},
                    {{ $manager->district}},
                    {{-- {{ $manager->address}}, --}}
                  </p>
          
                  {{-- <p class="number"  >{{ $manager->email}}</p> --}}
                  <p class="location"  >{{ $manager->email}}</p>
          
                  <button class="edit text-capitalize" data-toggle="modal" data-target="#acc-modal-edit-{{$manager->id}}">
                    edit
                  <img src="{{asset('users//icon/edit-pen.svg')}}" alt="">
                  </button>
          
                  <img src="{{asset('users/icon/building- 3D.svg')}}" alt="" class="card-building">
          
                  <div
                    class="delete-con"
                    data-toggle="modal"
                    data-target="#del-modal-{{$manager->id}}"
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
            @endif 
          @endforeach  
      @endif
      
          {{-- add Btn --}}

        <div class="add mr-4 mr-xl-5 mb-sm-4 mb-4">
          <div
            class="add-btn"
            data-toggle="modal"
            data-target="#acc-modal"
          >
          <img src="{{asset('users/icon/Union.svg')}}" alt=""class="add-icon">
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--===============  ADD Manager modal ===============  -->
  <div class="modal fade" id="acc-modal">
    <div class="modal-dialog">
      <div class="modal-content add-modal-content">
        <div class="modal-body">

          {{-- form --}}
          <form action="{{route('addManager')}}"  method="POST" class="row form mb-2 mb-md-4">
            @csrf
            <div class="col-12 input-con">
              <input
                type="text"
                name="username"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase ">User Name</label>
            </div>

            <div class="col-sm-12 col-lg-6 input-con half-input">
              <input
                type="text"
                name="email"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">Email</label>
            </div>

            <div class="col-sm-12 col-lg-6 half-input input-con">
              <input
                type="text"
                name="occupation"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">Occupation</label>
            </div>

            <div class="col-sm-12 col-lg-6 input-con half-input">
              <input
                type="text"
                name="home"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">Home</label>
            </div>

            <div class="col-sm-12 col-lg-6 half-input input-con">
              <input
                type="text"
                name="district"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">District</label>
            </div>

            <div class="col-sm-12 col-lg-6 input-con half-input">
              <input
                type="text"
                name="city"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">City</label>
            </div>

            <div class="col-sm-12 col-lg-6 half-input input-con">
              <input
                type="text"
                name="address"
                id=" acc-input"
                class="form-input"
                required
              />
              <label for="acc-input" class="label text-uppercase">Address</label>
            </div>
            

            {{-- button --}}
            <div class="btn-modal">
              <button type="submit" class="confirm text-capitalize">
                <p>confirm</p>
      
                <svg
                  width="21"
                  height="20"
                  viewBox="0 0 21 20"
                  fill="url(#paint0_linear)"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M18.4545 0.387998C18.1014 0.191482 17.7129 0.06651 17.3114 0.020229C16.9099 -0.0260521 16.5033 0.00726544 16.1147 0.118277C15.726 0.229288 15.3631 0.415815 15.0467 0.667191C14.7302 0.918567 14.4664 1.22986 14.2703 1.58327L8.55854 11.8623L5.28962 8.59338C5.00581 8.29953 4.66632 8.06515 4.29096 7.9039C3.9156 7.74266 3.51188 7.65779 3.10337 7.65424C2.69485 7.65069 2.28972 7.72853 1.91162 7.88323C1.53351 8.03792 1.19 8.26637 0.901125 8.55525C0.612252 8.84412 0.383802 9.18763 0.229106 9.56574C0.0744105 9.94384 -0.00343371 10.349 0.000116164 10.7575C0.00366603 11.166 0.0885389 11.5697 0.249782 11.9451C0.411026 12.3204 0.64541 12.6599 0.93926 12.9437L7.09253 19.097C7.67401 19.68 8.45855 20 9.26771 20L9.69382 19.9692C10.1654 19.9033 10.6152 19.7287 11.0079 19.4594C11.4005 19.1901 11.7253 18.8333 11.9567 18.4171L19.6483 4.57222C19.8446 4.2191 19.9695 3.83076 20.0158 3.42937C20.0621 3.02798 20.0289 2.62141 19.918 2.23287C19.8072 1.84432 19.6209 1.48142 19.3698 1.16487C19.1187 0.848328 18.8077 0.584345 18.4545 0.387998Z"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear"
                      x1="0"
                      y1="0"
                      x2="22.051"
                      y2="17.4544"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#5EC5FF" />
                      <stop offset="1" stop-color="#285AD8" />
                    </linearGradient>
                  </defs>
                </svg>
                <span></span>
              </button>
      
              <div class="btn cancel text-capitalize" data-dismiss="modal">
                <p>cancel</p>
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="url(#paint0_linear)"
                >
                  <path
                    d="M15.805 0.723063L9.99997 6.52844C8.06505 4.59415 6.12951 2.65798 4.19428 0.723063C1.95555 -1.51566 -1.51463 1.95577 0.722225 4.19511C2.65777 6.12878 4.59394 8.06526 6.5273 10.0002C4.59305 11.936 2.65803 13.871 0.722225 15.8053C-1.51463 18.0434 1.95586 21.5138 4.19428 19.2773C6.1292 17.3418 8.06474 15.4059 9.99966 13.4716L15.8047 19.2773C18.0435 21.5154 21.5146 18.0437 19.2768 15.8053C17.3412 13.8697 15.4063 11.9348 13.4701 9.99956C15.406 8.06401 17.3409 6.12847 19.2768 4.19324C21.5149 1.95577 18.0438 -1.51566 15.8047 0.724312"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear"
                      x1="0"
                      y1="0"
                      x2="22.051"
                      y2="17.4544"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#5EC5FF" />
                      <stop offset="1" stop-color="#285AD8" />
                    </linearGradient>
                  </defs>
                </svg>
      
                <span></span>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
<!--===============  Manager edit modal ===============  -->
    @foreach ($managers as $manager)
    <div class="modal fade" id="acc-modal-edit-{{$manager->id}}">
      <div class="modal-dialog">
        <div class="modal-content add-modal-content">
          <div class="modal-body">
            <form  action="{{route('account.manager.edit',$manager->id)}}" method="POST" class="row form mb-2 mb-md-4">
              @csrf
              <div class="col-12 input-con" >
                <input
                  type="text"
                  name="username"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->username}}"
                  required
                />
                <label for="acc-input" class="label">User Name</label>
              </div>

              <div class="col-sm-12 col-lg-6 input-con half-input" >
                <input
                  type="text"
                  name="email"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->email}}"
                  required
                />
                <label for="acc-input" class="label text-uppercase">Email</label>
              </div>

              <div class="col-sm-12 col-lg-6 half-input input-con" >
                <input
                  type="text"
                  name="occupation"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->occupation}}"
                  required
                />
                <label for="acc-input" class="label">Occupation</label>
              </div>
              <div class="col-sm-12 col-lg-6 input-con half-input" >
                <input
                  type="text"
                  name="home"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->home}}"
                  required
                />
                <label for="acc-input" class="label text-uppercase">Home</label>
              </div>

              <div class="col-sm-12 col-lg-6 half-input input-con" >
                <input
                  type="text"
                  name="district"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->district}}"
                  required
                />
                <label for="acc-input" class="label">District</label>
              </div>
              <div class="col-sm-12 col-lg-6 input-con half-input" >
                <input
                  type="text"
                  name="city"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->city}}"
                  required
                />
                <label for="acc-input" class="label text-uppercase">City</label>
              </div>

              <div class="col-sm-12 col-lg-6 half-input input-con" >
                <input
                  type="text"
                  name="address"
                  id=" acc-input"
                  class="form-input"
                  value="{{$manager->address}}"
                  required
                />
                <label for="acc-input" class="label">Address</label>
              </div>

              <div class="btn-modal">
                <button type="submit" class="confirm text-capitalize" >
                  <p>confirm</p>
  
                  <svg
                    width="21"
                    height="20"
                    viewBox="0 0 21 20"
                    fill="url(#paint0_linear)"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M18.4545 0.387998C18.1014 0.191482 17.7129 0.06651 17.3114 0.020229C16.9099 -0.0260521 16.5033 0.00726544 16.1147 0.118277C15.726 0.229288 15.3631 0.415815 15.0467 0.667191C14.7302 0.918567 14.4664 1.22986 14.2703 1.58327L8.55854 11.8623L5.28962 8.59338C5.00581 8.29953 4.66632 8.06515 4.29096 7.9039C3.9156 7.74266 3.51188 7.65779 3.10337 7.65424C2.69485 7.65069 2.28972 7.72853 1.91162 7.88323C1.53351 8.03792 1.19 8.26637 0.901125 8.55525C0.612252 8.84412 0.383802 9.18763 0.229106 9.56574C0.0744105 9.94384 -0.00343371 10.349 0.000116164 10.7575C0.00366603 11.166 0.0885389 11.5697 0.249782 11.9451C0.411026 12.3204 0.64541 12.6599 0.93926 12.9437L7.09253 19.097C7.67401 19.68 8.45855 20 9.26771 20L9.69382 19.9692C10.1654 19.9033 10.6152 19.7287 11.0079 19.4594C11.4005 19.1901 11.7253 18.8333 11.9567 18.4171L19.6483 4.57222C19.8446 4.2191 19.9695 3.83076 20.0158 3.42937C20.0621 3.02798 20.0289 2.62141 19.918 2.23287C19.8072 1.84432 19.6209 1.48142 19.3698 1.16487C19.1187 0.848328 18.8077 0.584345 18.4545 0.387998Z"
                    />
                    <defs>
                      <linearGradient
                        id="paint0_linear"
                        x1="0"
                        y1="0"
                        x2="22.051"
                        y2="17.4544"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#5EC5FF" />
                        <stop offset="1" stop-color="#285AD8" />
                      </linearGradient>
                    </defs>
                  </svg>
                  <span></span>
                </button>
  
                <div class="btn cancel text-capitalize" data-dismiss="modal">
                  <p>cancel</p>
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="url(#paint0_linear)"
                  >
                    <path
                      d="M15.805 0.723063L9.99997 6.52844C8.06505 4.59415 6.12951 2.65798 4.19428 0.723063C1.95555 -1.51566 -1.51463 1.95577 0.722225 4.19511C2.65777 6.12878 4.59394 8.06526 6.5273 10.0002C4.59305 11.936 2.65803 13.871 0.722225 15.8053C-1.51463 18.0434 1.95586 21.5138 4.19428 19.2773C6.1292 17.3418 8.06474 15.4059 9.99966 13.4716L15.8047 19.2773C18.0435 21.5154 21.5146 18.0437 19.2768 15.8053C17.3412 13.8697 15.4063 11.9348 13.4701 9.99956C15.406 8.06401 17.3409 6.12847 19.2768 4.19324C21.5149 1.95577 18.0438 -1.51566 15.8047 0.724312"
                    />
                    <defs>
                      <linearGradient
                        id="paint0_linear"
                        x1="0"
                        y1="0"
                        x2="22.051"
                        y2="17.4544"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#5EC5FF" />
                        <stop offset="1" stop-color="#285AD8" />
                      </linearGradient>
                    </defs>
                  </svg>
  
                  <span></span>
                </div>
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </div>
 
    @endforeach
<!--===============  delete modal ===============  -->
  @foreach ($managers as $manager)
 
    <div class="modal fade" id="del-modal-{{$manager->id}}">
      <div class="modal-dialog">
        <div class="modal-content del-modal-content">
          <div class="modal-body">
            <p class="del-warning">
              Id : {{$manager->id}} <br>
               User Name: {{$manager->username}}<br>
              You’re about to delete this manager account. Do you want to continue?
            </p>
            <div class="btn-modal del-btn-modal">
              <form action="{{route('account.manager.destroy',$manager->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type="submit"class="confirm text-capitalize">
                  <p>confirm</p>
  
                  <svg
                    width="21"
                    height="20"
                    viewBox="0 0 21 20"
                    fill="url(#paintdel_linear)"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M18.4545 0.387998C18.1014 0.191482 17.7129 0.06651 17.3114 0.020229C16.9099 -0.0260521 16.5033 0.00726544 16.1147 0.118277C15.726 0.229288 15.3631 0.415815 15.0467 0.667191C14.7302 0.918567 14.4664 1.22986 14.2703 1.58327L8.55854 11.8623L5.28962 8.59338C5.00581 8.29953 4.66632 8.06515 4.29096 7.9039C3.9156 7.74266 3.51188 7.65779 3.10337 7.65424C2.69485 7.65069 2.28972 7.72853 1.91162 7.88323C1.53351 8.03792 1.19 8.26637 0.901125 8.55525C0.612252 8.84412 0.383802 9.18763 0.229106 9.56574C0.0744105 9.94384 -0.00343371 10.349 0.000116164 10.7575C0.00366603 11.166 0.0885389 11.5697 0.249782 11.9451C0.411026 12.3204 0.64541 12.6599 0.93926 12.9437L7.09253 19.097C7.67401 19.68 8.45855 20 9.26771 20L9.69382 19.9692C10.1654 19.9033 10.6152 19.7287 11.0079 19.4594C11.4005 19.1901 11.7253 18.8333 11.9567 18.4171L19.6483 4.57222C19.8446 4.2191 19.9695 3.83076 20.0158 3.42937C20.0621 3.02798 20.0289 2.62141 19.918 2.23287C19.8072 1.84432 19.6209 1.48142 19.3698 1.16487C19.1187 0.848328 18.8077 0.584345 18.4545 0.387998Z"
                    />
                    <defs>
                      <linearGradient
                        id="paintdel_linear"
                        x1="0"
                        y1="0"
                        x2="22.051"
                        y2="17.4544"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#5EC5FF" />
                        <stop offset="1" stop-color="#285AD8" />
                      </linearGradient>
                    </defs>
                  </svg>
                  <span></span>
                </button>
              </form>

              <div class="btn cancel text-capitalize" data-dismiss="modal">
                <p>cancel</p>
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="url(#paintdel_linear)"
                >
                  <path
                    d="M15.805 0.723063L9.99997 6.52844C8.06505 4.59415 6.12951 2.65798 4.19428 0.723063C1.95555 -1.51566 -1.51463 1.95577 0.722225 4.19511C2.65777 6.12878 4.59394 8.06526 6.5273 10.0002C4.59305 11.936 2.65803 13.871 0.722225 15.8053C-1.51463 18.0434 1.95586 21.5138 4.19428 19.2773C6.1292 17.3418 8.06474 15.4059 9.99966 13.4716L15.8047 19.2773C18.0435 21.5154 21.5146 18.0437 19.2768 15.8053C17.3412 13.8697 15.4063 11.9348 13.4701 9.99956C15.406 8.06401 17.3409 6.12847 19.2768 4.19324C21.5149 1.95577 18.0438 -1.51566 15.8047 0.724312"
                  />
                  <defs>
                    <linearGradient
                      id="paintdel_linear"
                      x1="0"
                      y1="0"
                      x2="22.051"
                      y2="17.4544"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#5EC5FF" />
                      <stop offset="1" stop-color="#285AD8" />
                    </linearGradient>
                  </defs>
                </svg>

                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
  @endforeach
</body>
</html>

@endsection