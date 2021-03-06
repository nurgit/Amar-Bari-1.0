
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
          <div class="tab-container">
            <button class="tab-btn text-uppercase tab-btn-active" data-target="B-all">All</button>
            @if (count($houses)>0)
              @foreach ($houses as $house)
                @if ($house->dlt==1)
                  <button class="tab-btn text-uppercase" data-target="{{$house->id}}">{{$house->name}}</button>   
                @endif
              @endforeach     
            @endif
            
          
        </div>

      </div>

<div class="card-section row">
    <div class="first-row col-12">
      <p class="caption text-capitalize col-12">flats</p>
      
                  <p   >
               @if (Session::get('successCreateOne'))
              <div style="margin-right: 17%" class="alert alert-success">
                {{Session::get('successCreateOne')}}
              </div>
              @endif
      
              @if (Session::get('faillCreateOne'))
              <div class="alert alert-danger">
                {{Session::get('faillCreateOne')}}
              </div>
              @endif</p>
      
      <div class="cards row active-tab" id="B-all">
        @if (count($flats)>0)
          @foreach ($flats as $flat)
            @if ( $flat->dlt==1)
                <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
                  <div class="top-section">
                    <h1 class="flat-no">F:{{$flat->flat_no}}</h1>
                    <p class="rent">rent:{{$flat->rent}} </p>
                  </div>

                  <div class="mid-section">
                    <p class="size">size: {{$flat->size}}sqft</p>
                    <p class="name">House Name:{{$flat->name}}</p>
                    <p class="number">Holding No:{{$flat->holding_no}}</p>
                  </div>

                  <div class="bottom-card-section">
                  <button class="edit text-capitalize" data-toggle="modal" data-target="#update-modal-{{$flat->id}}">
                    edit
                    <img src="{{asset('users/icon/edit-pen.svg')}}" alt="">
                  </button>
                  </div>

                  <img src="{{asset('users/icon/Flat 3D.svg')}}" alt="" class="card-building">

                  <div
                    class="delete-con"
                    data-toggle="modal"
                    data-target="#del-modal-{{$flat->id}}"
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

      </div>
                  {{-- -=====================Get flats sort by building================= --}}
        @foreach ($houses as $house)
                      <div class="cards row" id="{{$house->id}}">
                          @if (count($flats)>0)
                            @foreach ($flats as $flat)
                              @if ( $flat->dlt==1 && $flat->house_id==$house->id )
                                  <div class="card text-capitalize mr-4 mr-xl-5 mb-sm-4 mb-4">
                                    <div class="top-section">
                                      <h1 class="flat-no">F:{{$flat->flat_no}}</h1>
                                      <p class="rent">rent:{{$flat->rent}} </p>
                                    </div>
                  
                                    <div class="mid-section">
                                      <p class="size">size: {{$flat->size}}sqft</p>
                                      <p class="name">House Name:{{$flat->name}}</p>
                                      <p class="number">Holding No:{{$flat->holding_no}}</p>
                                    </div>
                  
                                    <div class="bottom-card-section">
                                    <button class="edit text-capitalize" data-toggle="modal" data-target="#update-modal-{{$flat->id}}">
                                      edit
                                      <img src="{{asset('users/icon/edit-pen.svg')}}" alt="">
                                    </button>
                                    </div>
                  
                                    <img src="{{asset('users/icon/Flat 3D.svg')}}" alt="" class="card-building">
                  
                                    <div
                                      class="delete-con"
                                      data-toggle="modal"
                                      data-target="#del-modal-{{$flat->id}}"
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
                          data-target="#house-{{$house->id}}"
                        >
                        <img src="{{asset('users/icon/Union.svg')}}" alt=""class="add-icon">
                        </div>
                      </div>

              </div>
            
        @endforeach
        
  </div>
</div>
</div>


{{-- Add falat ------------------------------ --}}
    @foreach ($houses as $house)
    <div class="modal fade" id="house-{{$house->id}}">
      <div class="modal-dialog">
        <div class="modal-content add-modal-content"> 
          <div class="modal-body">
                  
            <form  action="{{route('addFlat')}}"  method="POST" class="row form mb-2 mb-md-4">
              @csrf
              <div class="col-sm-12 col-lg-4 quad-input input-con">
                <input
                  type="text"
                  name="flat_no"
                  id=" acc-input"
                  class="form-input"
                  required
                />
                <label for="acc-input" class="label">flat no</label>
              </div>
      
              <div class="col-sm-12 col-lg-4 quad-input input-con">
                {{-- <input
                  type="text"
                  name="house_id"
                  id=" acc-input"
                  class="form-input"
                  value="{{$house->id}}"
                  
                  required
                  readonly
                /> --}}
                <select id="inputState" class="form-input" name="house_id" required>
              
                  <option selected value="">Please Choose your House ...</option>
                  @foreach ($houses as $house)  
                     <option value="{{$house->id}}"> {{$house->name}} </option>
                  @endforeach
                </select>
                {{-- <label for="acc-input" class="label">house ID:{{$house->id}} & house Name: {{$house->name}} </label> --}}
              </div>
      
              <div class="col-sm-12 col-lg-4 quad-input input-con">
                <input
                  type="text"
                  name="size"
                  id=" acc-input"
                  class="form-input"
                  required
                />
                <label for="acc-input" class="label">size</label>
              </div>
      
              <div class="col-12 col-lg-6 half-input input-con">
                <input
                  type="text"
                  class="form-input"
                  name="details"
                  id=" acc-input"
                  required
                />
                <label for="acc-input" class="label">Details</label>
              </div>
      
              <div class="col-12 col-lg-6 half-input input-con">
                <input
                  type="text"
                  class="form-input"
                  name="rent"
                  id=" acc-input"
                  required
                />
                <label for="acc-input" class="label">rent</label>
              </div>
      
              
      
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
        
    @endforeach



{{-- Update  falat ------------------------------ --}}
@foreach ($flats as $flat)

<div class="modal fade" id="update-modal-{{$flat->id}}">
  <div class="modal-dialog">
    <div class="modal-content add-modal-content"> 
      <div class="modal-body">
              
        <form  action="{{route('flat.update',$flat->id) }}"  method="POST" class="row form mb-2 mb-md-4">
          @csrf
          <div class="col-sm-12 col-lg-4 quad-input input-con">
            <input
              type="text"
              name="flat_no"
              id=" acc-input"
              class="form-input"
              value="{{$flat->flat_no}}"
              required
            />
            <label for="acc-input" class="label">flat no</label>
          </div>
  
          <div class="col-sm-12 col-lg-4 quad-input input-con">
            <input
              type="text"
              name="house_id"
              id=" acc-input"
              class="form-input"
              value="{{$flat->house_id}}"
              required
            />
            <label for="acc-input" class="label">house Id </label>
          </div>
  
          <div class="col-sm-12 col-lg-4 quad-input input-con">
            <input
              type="text"
              name="size"
              id=" acc-input"
              class="form-input"
              value="{{$flat->size}}"
              required
            />
            <label for="acc-input" class="label">size</label>
          </div>
  
          <div class="col-12 col-lg-6 half-input input-con">
            <input
              type="text"
              class="form-input"
              name="details"
              id=" acc-input"
              value="{{$flat->details}}"
              required
            />
            <label for="acc-input" class="label">Details</label>
          </div>
  
          <div class="col-12 col-lg-6 half-input input-con">
            <input
              type="text"
              class="form-input"
              name="rent"
              id=" acc-input"
              value="{{$flat->rent}}"
              required
            />
            <label for="acc-input" class="label">rent</label>
          </div>
  
          
  
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
@endforeach
    


<!--===============  delete modal ===============  -->
@foreach ($flats as $flat)
<div class="modal fade" id="del-modal-{{$flat->id}}">
  <div class="modal-dialog">
    <div class="modal-content del-modal-content">
      <div class="modal-body">
        <p class="del-warning">
          Building No: {{$flat->flat_no}} <br>Building Name: {{$flat->name}}<br> Building Holding No: {{$flat->holding_no}} <br>
          You???re about to delete this flat. Do you want to continue?
        </p>
        <div class="btn-modal del-btn-modal">
          <form action="{{route('flat.destroy',$flat->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="confirm text-capitalize">
              <p>confirm</p>
    
              <svg
                width="21"
                height="20"
                viewBox="0 0 21 20"
                fill="url(#paintsave_linear)"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.4545 0.387998C18.1014 0.191482 17.7129 0.06651 17.3114 0.020229C16.9099 -0.0260521 16.5033 0.00726544 16.1147 0.118277C15.726 0.229288 15.3631 0.415815 15.0467 0.667191C14.7302 0.918567 14.4664 1.22986 14.2703 1.58327L8.55854 11.8623L5.28962 8.59338C5.00581 8.29953 4.66632 8.06515 4.29096 7.9039C3.9156 7.74266 3.51188 7.65779 3.10337 7.65424C2.69485 7.65069 2.28972 7.72853 1.91162 7.88323C1.53351 8.03792 1.19 8.26637 0.901125 8.55525C0.612252 8.84412 0.383802 9.18763 0.229106 9.56574C0.0744105 9.94384 -0.00343371 10.349 0.000116164 10.7575C0.00366603 11.166 0.0885389 11.5697 0.249782 11.9451C0.411026 12.3204 0.64541 12.6599 0.93926 12.9437L7.09253 19.097C7.67401 19.68 8.45855 20 9.26771 20L9.69382 19.9692C10.1654 19.9033 10.6152 19.7287 11.0079 19.4594C11.4005 19.1901 11.7253 18.8333 11.9567 18.4171L19.6483 4.57222C19.8446 4.2191 19.9695 3.83076 20.0158 3.42937C20.0621 3.02798 20.0289 2.62141 19.918 2.23287C19.8072 1.84432 19.6209 1.48142 19.3698 1.16487C19.1187 0.848328 18.8077 0.584345 18.4545 0.387998Z"
                />
                <defs>
                  <linearGradient
                    id="paintsave_linear"
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