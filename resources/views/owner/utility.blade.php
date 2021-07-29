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
    <div class="tab-container">
      <div class="paid-btn  ">paid</div>
      <div class="paid-btn  ">due</div>
    </div>

    </div>
    
<!--              top bar contents              -->

        <div class="card-section row">
          <div class="first-row col-12">
            <p class="caption text-capitalize  col-12">info</p>
            <div class="cards row active-tab" id="B-all" >        
             @if (count($rents)>0)
                @foreach ($rents as $rent)
                  @if ($rent->dlt==1)
                    <form action="{{route('owner.rent.update',$rent->id)}}"  method="POST">
                      @csrf
                      <div class="rent-card text-capitalize ">
                        <div class="box flate">
                          <div class="box-label">flat no.</div>
                          <div class="box-content  ">{{$rent->flat_no}}</div>
                        </div>
      
                        <div class="box name">
                          <div class="box-label">tenant</div>
                          <div class="box-content ">{{$rent->name}}</div>
                        </div>
      
                        <div class="box contact">
                          <div class="box-label  ">contact</div>
                          <div class="box-content  ">{{$rent->phone}}</div>
                        </div>
      
                        <div class="box">
                          <div class="box-label">rent</div>
                          <div class="box-content  ">{{$rent->rent}}</div>
                        </div>
      
                        <div class="  payment-box box paid">
                          <div class="box-label "> 
                            <p>paid</p> 
                          </div>
                          <input type="text"  name="amount" placeholder="{{$rent->amount}}" class="box-content paid-input">
                        </div>
      
                        <div class="  payment-box due due-payment-box box ">
                          <div class="box-label">
                            <p>due</p> 
                          </div>
      
                          <div class="box-content">
                            @php
                                $flatRent=$rent->rent;
                                $paid=$rent->amount;
                                $due=$flatRent-$paid;
                            @endphp
                            {{$due}}</div>
                        </div>
      
                        <div class="box date">
                          <div class="box-label">date</div>
                          <div class="box-content">{{$rent->date}}</div>
                        </div>
      
                        <div class="btn-box">
                          <button style="background-color: #fafafb; border:none" type="submit" >                      
                            <div class="save-btn">
                            <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                          </div>
                          </button>
      
                          <label class="edit-btn" >
                          <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                              
                          </div>
      
                      </div>
                    </form>
                     
                  @endif
                
                @endforeach
                 
             @endif
            </div>

{{-- -=====================Get Rent sort by building================= --}}
            @foreach ($houses as $house)
            <div class="cards row " id="{{$house->id}}" style="margin-bottom: 10%">        
              @if (count($rents)>0)
                 @foreach ($rents as $rent)
                   @if ($rent->dlt==1   && $rent->id==$house->id)
                     <form action="{{route('owner.rent.update',$rent->id)}}"  method="POST">
                        @csrf
                        <div class="rent-card text-capitalize " >
                          <div class="box flate">
                            <div class="box-label">flat no.</div>
                            <div class="box-content  ">{{$rent->flat_no}}</div>
                          </div>
        
                          <div class="box name">
                            <div class="box-label">tenant</div>
                            <div class="box-content ">{{$rent->name}}</div>
                          </div>
        
                          <div class="box contact">
                            <div class="box-label  ">contact</div>
                            <div class="box-content  ">{{$rent->phone}}</div>
                          </div>
        
                          <div class="box">
                            <div class="box-label">rent</div>
                            <div class="box-content  ">{{$rent->rent}}</div>
                          </div>
        
                          <div class="  payment-box box paid">
                            <div class="box-label "> 
                              <p>paid</p> 
                            </div>
                            <input type="text" name="amount"  placeholder="{{$rent->amount}}" class="box-content paid-input">
                          </div>
        
                          <div class="  payment-box due due-payment-box box ">
                            <div class="box-label">
                              <p>due</p> 
                            </div>
        
                            <div class="box-content">
                              @php
                                  $flatRent=$rent->rent;
                                  $paid=$rent->amount;
                                  $due=$flatRent-$paid;
                              @endphp
                              {{$due}}</div>
                          </div>
        
                          <div class="box date">
                            <div class="box-label">date</div>
                            <div class="box-content">{{$rent->date}}</div>
                          </div>
        
                          <div class="btn-box">
                             <button style="background-color: #fafafb; border:none" type="submit" >
                               <div class="save-btn">
                                 <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                               </div>
                             </button>
     
        
                            <label class="edit-btn" >
                            <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                                
                            </div>
        
                        </div>

                    </form>

          
                      
                   @endif
                 
                 @endforeach
                  
              @endif
             </div>
                
            @endforeach


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