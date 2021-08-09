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

              <div class="modal-content add-modal-content"> 
                <div style="margin:2% 0% 0% 2%" style="margin-left: 5%"><b><p> Add Utlity for
                   <?php echo Date('M-Y') ?>
                  </p> </b></div> 
                <div class="modal-body">
                  
                  <form  action="{{route('addFlat')}}"  method="POST" class="row form mb-2 mb-md-4">
                    @csrf
                    <div class="col-sm-12 col-lg-6 half-inputt input-con">
                      <input
                        type="text"
                        name="flat_no"
                        id=" acc-input"
                        class="form-input"
                        value="<?php echo Date('M-Y') ?>"
                        readonly 
                        required
                        style="background-color: #d8dbe0"
                      />
                      <label for="acc-input" class="label"></label>
                    </div>
            
                    <div class="col-sm-12 col-lg-6 half-input input-con">
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
                    
                        <option selected value="">Please Choose your House & Flat  ..</option>
                    
                           <option value=""> </option>
                  
                      </select>
                      {{-- <label for="acc-input" class="label">house ID:{{$house->id}} & house Name: {{$house->name}} </label> --}}
                    </div>
            
                    <div class="col-sm-12 col-lg-2 quad-input input-con">
                      <input
                        type="text"
                        name="size"
                        id=" acc-input"
                        class="form-input"
                        required
                      />
                      <label for="acc-input" class="label">Gas</label>
                    </div>
                    <div class="col-sm-12 col-lg-2 quad-input input-con">
                      <input
                        type="text"
                        name="flat_no"
                        id=" acc-input"
                        class="form-input"
                        required
                      />
                      <label for="acc-input" class="label">Electricity</label>
                    </div>
            
                    <div class="col-sm-12 col-lg-2 quad-input input-con">
                      <input
                        type="text"
                        name="house_id"
                        id=" acc-input"
                        class="form-input"
                        value=""
                        
                        required
                        readonly
                      /> 
                     <label for="acc-input" class="label">Water </label>
                    </div>
            
                    <div class="col-sm-12 col-lg-2 quad-input input-con">
                      <input
                        type="text"
                        name="size"
                        id=" acc-input"
                        class="form-input"
                        required
                      />
                      <label for="acc-input" class="label">ServiceCharge</label>
                    </div>
                    <div class="col-sm-12 col-lg-2 quad-input input-con">
                      <input
                        type="text"
                        name="size"
                        id=" acc-input"
                        class="form-input"
                        required
                      />
                      <label for="acc-input" class="label">Others</label>
                    </div>
            
                    <div class="btn-modal">
                      <button type="submit" class="confirm text-capitalize">
                        <p>Add Utility</p>
              
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
                    </div>
                  </form>
            
                </div>
              </div>
           
          
          


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