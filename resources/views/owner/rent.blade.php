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



            <div class="cards row active-tab" id="B-all" >        
             @if (count($bills)>0 && count($rents)>0)
             @foreach ($rents as $rent)
                @foreach ($bills as $bill)
                  @if ($bill->status==1 && $bill->year==date('Y') && $bill->month==date('m') &&  $rent->id==$bill->id)
                   
                  <div style="margin-bottom: .3%">

                    <form action="{{url('owner/rent',$bill->id)}}"  method="POST">
                      @csrf
                      <div class="rent-card text-capitalize ">
                        <div class="box contact">
                          <div class="box-label  ">House</div>
                          <div class="box-content  ">{{$bill->name}}</div>
                        </div>

                        <div class="box flate">
                          <div class="box-label">flat no.</div>
                          <div class="box-content  ">{{$bill->flat_no}}</div>
                        </div>
      
                        <div class="box name">
                          <div class="box-label">tenant</div>
                          <div class="box-content ">{{$bill->name}}</div>
                        </div>
      
                      

                        {{-- all bill --}}
                        <div class="box contact">
                          <div class="box-label  ">Flat_Rent</div>
                          <div class="box-content  ">
                            <input  type="checkbox" id="month_rent" name="month_rent" value="{{$bill->month_rent}}"><br>
                            <label for="vehicle1">{{$bill->month_rent-$rent->month_rent}}</label><br>
                          </div>
                        </div>

                        <div class="box contact">
                            <div class="box-label  ">ServiceCharge</div>
                            <div class="box-content  ">
                              <input  type="checkbox" id="serviceCharge" name="serviceCharge" value="{{$bill->serviceCharge}}"><br>
                              
                              <label for="serviceCharge">{{$bill->serviceCharge-$rent->serviceCharge}}</label><br>
                            </div>
                        </div>
                        <div class="box contact">
                          <div class="box-label  ">Electricity</div>
                          <div class="box-content  ">
                            <input  type="checkbox" id="electricity" name="electricity" value="{{$bill->electricity}}"><br>
                            <label for="electricity">{{$bill->electricity-$rent->electricity}}</label><br>
                          </div>
                        </div>

                        <div class="box contact">
                          <div class="box-label  ">Gas</div>
                          <div class="box-content  ">
                          
                            <input  type="checkbox" id="gas" name="gas" value="{{$bill->gas}}"><br>
                            <label for="gas">{{$bill->gas-$rent->gas}}</label><br>
                          </div>
                      </div>

                      <div class="box contact">
                        <div class="box-label  ">Water</div>
                        <div class="box-content  ">
                          <input  type="checkbox" id="water" name="water" value="{{$bill->water}}"><br>
                          <label for="water">{{$bill->water-$rent->water}}</label><br>
                        </div>
                      </div>
                      
                        <div class="box contact">
                          <div class="box-label  ">Others</div>
                          <div class="box-content  ">
                            <input  type="checkbox" id="others" name="others" value="{{$bill->others}}"><br>
                            <label for="others">{{$bill->others-$rent->others}}</label><br>
                          </div>
                      </div>
                            
                    



                        <div class=" payment-box due due-payment-box box   box-label">
                          <div class="box-label">Total Bill </div>
                          @php
                          $month_rent=$bill->month_rent;
                          $electricity=$bill->electricity;
                          $water=$bill->water;
                          $serviceCharge=$bill->serviceCharge;
                          $others=$bill->others;
                          $gas=$bill->gas;

                          $total_rent= $month_rent+ $electricity+$water+ $serviceCharge+$others+ $gas;
                    
                          @endphp
                          <div class="box-content  ">{{$total_rent}}</div>
                        </div>
      
                        <div class="  payment-box box paid  box-label " style="background-color: green">
                          <div class="box-label "> 
                            <p>Total Paid</p> 
                          </div>
                          @php
                          $month_rent=$rent->month_rent;
                          $electricity=$rent->electricity;
                          $water=$rent->water;
                          $serviceCharge=$rent->serviceCharge;
                          $others=$rent->others;
                          $gas=$rent->gas;

                         $total_paid= $month_rent+ $electricity+$water+ $serviceCharge+$others+ $gas;
                    
                          @endphp
                            <input readonly type="text"  name="total_paid" placeholder="{{$total_paid}}" class="box-content paid-input">
                        </div>
      
                        <div class="  payment-box due due-payment-box box   box-label">
                          <div class="box-label">
                            <p>due</p> 
                          </div>
                          
                          <div class="box-content">
                            {{$total_rent-$total_paid}}</div>
                        </div>
      
                        <div class="box date">
                          <div class="box-label">date</div>
                          <div class="box-content">{{$bill->month}}-{{$bill->year}}</div>
                        </div>
      
                        <div class="btn-box">
                          <button style="background-color: #fafafb; border:none" type="submit" value="Submit">                      
                            <div class="save-btn">
                            <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                          </div>
                          </button>
      
                          <label class="edit-btn" >
                          <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                          </label >
                        </div>
      
                      </div>
                    </form>
                  </div>
                      
                  @endif
                
                @endforeach
             @endforeach
            
                 
             @endif
            </div>

{{-- -=====================Get Rent sort by building================= --}}
            @foreach ($houses as $house)
              <div class="cards row " id="{{$house->id}}" style="margin-bottom: 10%">        
                @if (count($bills)>0 && count($rents)>0)
                  @foreach ($rents as $rent)
                    @foreach ($bills as $bill)
                        @if ($bill->status==1 && $bill->year==date('Y') && $bill->month==date('m') &&  $rent->id==$bill->id)  
                          <div style="margin-bottom: .3%">
                            <form action="{{url('owner/rent',$bill->id)}}"  method="POST">
                              @csrf
                              <div class="rent-card text-capitalize ">
                                <div class="box contact">
                                  <div class="box-label  ">House</div>
                                  <div class="box-content  ">{{$bill->name}}</div>
                                </div>
        
                                <div class="box flate">
                                  <div class="box-label">flat no.</div>
                                  <div class="box-content  ">{{$bill->flat_no}}</div>
                                </div>
              
                                <div class="box name">
                                  <div class="box-label">tenant</div>
                                  <div class="box-content ">{{$bill->name}}</div>
                                </div>
              
                              
        
                                {{-- all bill --}}
                                <div class="box contact">
                                  <div class="box-label  ">Flat_Rent</div>
                                  <div class="box-content  ">
                                    <input  type="checkbox" id="month_rent" name="month_rent" value="{{$bill->month_rent}}"><br>
                                    <label for="vehicle1">{{$bill->month_rent-$rent->month_rent}}</label><br>
                                  </div>
                                </div>
        
                                <div class="box contact">
                                    <div class="box-label  ">ServiceCharge</div>
                                    <div class="box-content  ">
                                      <input  type="checkbox" id="serviceCharge" name="serviceCharge" value="{{$bill->serviceCharge}}"><br>
                                      
                                      <label for="serviceCharge">{{$bill->serviceCharge-$rent->serviceCharge}}</label><br>
                                    </div>
                                </div>
                                <div class="box contact">
                                  <div class="box-label  ">Electricity</div>
                                  <div class="box-content  ">
                                    <input  type="checkbox" id="electricity" name="electricity" value="{{$bill->electricity}}"><br>
                                    <label for="electricity">{{$bill->electricity-$rent->electricity}}</label><br>
                                  </div>
                                </div>
        
                                <div class="box contact">
                                  <div class="box-label  ">Gas</div>
                                  <div class="box-content  ">
                                  
                                    <input  type="checkbox" id="gas" name="gas" value="{{$bill->gas}}"><br>
                                    <label for="gas">{{$bill->gas-$rent->gas}}</label><br>
                                  </div>
                              </div>
        
                              <div class="box contact">
                                <div class="box-label  ">Water</div>
                                <div class="box-content  ">
                                  <input  type="checkbox" id="water" name="water" value="{{$bill->water}}"><br>
                                  <label for="water">{{$bill->water-$rent->water}}</label><br>
                                </div>
                              </div>
                              
                                <div class="box contact">
                                  <div class="box-label  ">Others</div>
                                  <div class="box-content  ">
                                    <input  type="checkbox" id="others" name="others" value="{{$bill->others}}"><br>
                                    <label for="others">{{$bill->others-$rent->others}}</label><br>
                                  </div>
                              </div>
                                    
                            
        
        
        
                                <div class=" payment-box due due-payment-box box   box-label">
                                  <div class="box-label">Total Bill </div>
                                  @php
                                  $month_rent=$bill->month_rent;
                                  $electricity=$bill->electricity;
                                  $water=$bill->water;
                                  $serviceCharge=$bill->serviceCharge;
                                  $others=$bill->others;
                                  $gas=$bill->gas;
        
                                  $total_rent= $month_rent+ $electricity+$water+ $serviceCharge+$others+ $gas;
                            
                                  @endphp
                                  <div class="box-content  ">{{$total_rent}}</div>
                                </div>
              
                                <div class="  payment-box box paid  box-label " style="background-color: green">
                                  <div class="box-label "> 
                                    <p>Total Paid</p> 
                                  </div>
                                  @php
                                  $month_rent=$rent->month_rent;
                                  $electricity=$rent->electricity;
                                  $water=$rent->water;
                                  $serviceCharge=$rent->serviceCharge;
                                  $others=$rent->others;
                                  $gas=$rent->gas;
        
                                  $total_paid= $month_rent+ $electricity+$water+ $serviceCharge+$others+ $gas;
                            
                                  @endphp
                                    <input readonly type="text"  name="total_paid" placeholder="{{$total_paid}}" class="box-content paid-input">
                                </div>
              
                                <div class="  payment-box due due-payment-box box   box-label">
                                  <div class="box-label">
                                    <p>due</p> 
                                  </div>
                                  
                                  <div class="box-content">
                                    {{$total_rent-$total_paid}}</div>
                                </div>
              
                                <div class="box date">
                                  <div class="box-label">date</div>
                                  <div class="box-content">{{$bill->month}}-{{$bill->year}}</div>
                                </div>
              
                                <div class="btn-box">
                                  <button style="background-color: #fafafb; border:none" type="submit" value="Submit">                      
                                    <div class="save-btn">
                                    <img src="{{asset('users/icon/save.svg')}}"  alt="" srcset="">
                                  </div>
                                  </button>
              
                                  <label class="edit-btn" >
                                  <img src="{{asset('users/icon/edit-pen-colored.svg')}}" alt="" srcset="">
                                  </label >
                                </div>
              
                              </div>
                            </form>
                          </div>   
                        @endif
                    
                      @endforeach
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