@extends('layout.owner_rent_layout')

@section('header')
      <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Dashboard</title>
          <link rel="icon" href="{{asset('users/icon/brand.svg')}}" />
          <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
          <link rel="stylesheet" href="{{asset('users/css/rent.css')}}" />
         
         
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
    

<!--              top bar contents              -->

        <div class="card-section row">
          <div class="first-row col-12">
            <p class="caption text-capitalize  col-12">info</p>
            <div class="cards row active-tab" id="tab1-1">        
              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box paid">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box due due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>

              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box  due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>

              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box  due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>
            </div>

            <div class="cards row " id="tab2-2">        

              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box  due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>

              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box paid">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box due due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>

              <div class="rent-card text-capitalize ">
                <div class="box flate">
                  <div class="box-label">flat no.</div>
                  <div class="box-content  ">a100</div>
                </div>

                <div class="box name">
                  <div class="box-label">tenant</div>
                  <div class="box-content ">m.r.adnan</div>
                </div>

                <div class="box contact">
                  <div class="box-label  ">contact</div>
                  <div class="box-content  ">01234567891</div>
                </div>

                <div class="box">
                  <div class="box-label">rent</div>
                  <div class="box-content  ">10000</div>
                </div>

                <div class="  payment-box box">
                  <div class="box-label "> 
                    <p>paid</p> 
                  </div>
                  <input type="text"   placeholder="n/a" class="box-content paid-input">
                </div>

                <div class="  payment-box  due-payment-box box ">
                  <div class="box-label">
                    <p>due</p> 
                  </div>
                  <div class="box-content">n/a</div>
                </div>

                <div class="box date">
                  <div class="box-label">date</div>
                  <div class="box-content">05/02/21</div>
                </div>

                <div class="btn-box">
                  <div class="save-btn">
                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                  </div>

                  <label class="edit-btn" >
                   <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                      
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('users/js/rent.js')}}"></script>

    <script src="{{asset('users/js/link.js')}}">
  
    </script>
  </body>
</html>

@endsection