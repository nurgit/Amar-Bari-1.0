@extends('layout.home_layout')

@section('header')
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact</title>
        <link rel="icon" href="{{asset('users/icon/brand.svg')}}" />
        <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('users/css/contact.css')}}" />
      </head>
      <body>
        <script src="{{asset('users/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('users/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ======landing section ======= -->
        <div class="section landing-section">
@endsection

{{-- menu form home_layput  --}}


@section('content')
          <div class="content ">
            <div class="left">

              @if (Session::get('failLog'))
              <div class="alert alert-danger">
                {{Session::get('failLog')}}
              </div>
              @endif

              @if (Session::get('createSuccess'))
              <div class="alert alert-success">
                {{Session::get('createSuccess')}}
              </div>
              @endif

              <div href="" class="main-text text-uppercase">let's talk</div>
              
              <div class="icon-con">
                <a class="social-btn">
                  <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4961 9.33135C11.8336 9.33135 9.6608 11.4293 9.6608 14C9.6608 16.5707 11.8336 18.6687 14.4961 18.6687C17.1586 18.6687 19.3314 16.5707 19.3314 14C19.3314 11.4293 17.1586 9.33135 14.4961 9.33135ZM28.9984 14C28.9984 12.0667 29.0165 10.1509 28.9041 8.2211C28.7916 5.97958 28.262 3.99024 26.5644 2.35113C24.8632 0.708519 22.8064 0.200677 20.4849 0.0921032C18.4826 -0.0164701 16.4984 0.00104176 14.4997 0.00104176C12.4974 0.00104176 10.5132 -0.0164701 8.51455 0.0921032C6.19302 0.200677 4.13267 0.712022 2.43505 2.35113C0.73381 3.99374 0.20784 5.97958 0.0953909 8.2211C-0.017058 10.1544 0.00107894 12.0702 0.00107894 14C0.00107894 15.9298 -0.017058 17.8491 0.0953909 19.7789C0.20784 22.0204 0.737438 24.0098 2.43505 25.6489C4.1363 27.2915 6.19302 27.7993 8.51455 27.9079C10.5169 28.0165 12.501 27.999 14.4997 27.999C16.502 27.999 18.4862 28.0165 20.4849 27.9079C22.8064 27.7993 24.8668 27.288 26.5644 25.6489C28.2657 24.0063 28.7916 22.0204 28.9041 19.7789C29.0201 17.8491 28.9984 15.9333 28.9984 14ZM14.4961 21.1834C10.379 21.1834 7.05634 17.9752 7.05634 14C7.05634 10.0248 10.379 6.81665 14.4961 6.81665C18.6132 6.81665 21.9359 10.0248 21.9359 14C21.9359 17.9752 18.6132 21.1834 14.4961 21.1834ZM22.2406 8.20008C21.2793 8.20008 20.503 7.45057 20.503 6.52245C20.503 5.59432 21.2793 4.84481 22.2406 4.84481C23.2018 4.84481 23.9781 5.59432 23.9781 6.52245C23.9784 6.74284 23.9336 6.96111 23.8464 7.16478C23.7592 7.36844 23.6312 7.55349 23.4698 7.70933C23.3084 7.86517 23.1168 7.98873 22.9058 8.07294C22.6949 8.15715 22.4688 8.20036 22.2406 8.20008Z" />
                    </svg>

                  <span></span>
                </a>

                <a class="social-btn">
                  <svg width="28" height="28" viewBox="0 0 28 28" class="face"  fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path  d="M5.11263 0C2.28046 0 0 2.28046 0 5.11263V22.8874C0 25.7196 2.28046 28 5.11263 28H14.7464V17.0538H11.8519V13.1128H14.7464V9.74576C14.7464 7.10046 16.4566 4.67163 20.3963 4.67163C21.9914 4.67163 23.1709 4.82476 23.1709 4.82476L23.0781 8.50503C23.0781 8.50503 21.8752 8.49366 20.5625 8.49366C19.1418 8.49366 18.914 9.14824 18.914 10.2349V13.1128H23.191L23.0046 17.0538H18.914V28.0001H22.8874C25.7195 28.0001 28 25.7196 28 22.8874V5.11266C28 2.28049 25.7195 2.8e-05 22.8874 2.8e-05H5.1126L5.11263 0Z" />
                    </svg>
                  <span></span>
                </a>

                <a class="social-btn">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.48695 0C2.46956 0 0 2.4695 0 5.48695V22.5139C0 25.5313 2.4695 28 5.48695 28H22.5139C25.5314 28 28 25.5314 28 22.5139V5.48695C28 2.46956 25.5314 0 22.5139 0H5.48695ZM6.86701 4.62056C8.31378 4.62056 9.20494 5.57035 9.23244 6.81882C9.23244 8.03974 8.31373 9.01622 6.83902 9.01622H6.81188C5.39264 9.01622 4.47532 8.03979 4.47532 6.81882C4.47532 5.57037 5.4204 4.62056 6.86698 4.62056H6.86701ZM19.3347 10.4558C22.1171 10.4558 24.2029 12.2744 24.2029 16.1825V23.4783H19.9744V16.6717C19.9744 14.9612 19.3624 13.7943 17.8321 13.7943C16.6639 13.7943 15.9676 14.5808 15.6619 15.3406C15.5502 15.6125 15.5227 15.9921 15.5227 16.3724V23.4783H11.2942C11.2942 23.4783 11.3497 11.9481 11.2942 10.7542H15.5236V12.556C16.0855 11.6891 17.0907 10.4558 19.3347 10.4558V10.4558ZM4.72474 10.7551H8.95327V23.4783H4.72474V10.7551Z" />
                    </svg>

                  <span></span>
                </a>
              </div>
            </div>

            <div class="right">
                <div class="info-container">
                    <div class="info">
                        <div class="info-head">Visit us</div>
                        <div class="info-body">Amin R/A, Bandar, Narayanganj</div>
                    </div>

                    <div class="info">
                        <div class="info-head">Mail us</div>
                        <div class="info-body">support@citsbd.com</div>
                    </div>

                    <div class="info">
                        <div class="info-head">Call us</div>
                        <div class="info-body">+8801893399600</div>
                    </div>
                </div>
            </div>
            


          </div>
          </div>

          </div>
          </body>
          </html>

@endsection
      