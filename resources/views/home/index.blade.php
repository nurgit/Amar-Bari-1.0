@extends('layout.home_layout')
@section('header')
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Amar Bari</title>
      <link rel="icon" href="{{asset('users/icon/brand.svg')}}" />
      <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset('users/css/index.css')}}" />
    </head>
    <body id="backtop">
      <script src="{{asset('users/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('users/js/bootstrap.bundle.min.js')}}"></script>

      <div class="glass-bg"></div>

      <div class="body-con">
        <!-- ======landing section ======= -->
        <div class="section landing-section">
@endsection



{{-- menu form home_layput  --}}




@section('content')


    <div class="landing-content">
      <div class="left">
        <h1 class="landing-header">
          Efficient Rent <span> Management Solution</span>
        </h1>

        <p class="article">
          Rent management can be a great nuisance if it comes to owning
          properties. In a very demanding schedule it can cause only another
          distraction. Multiple phone calls, vague responses & the resulting
          anxiety almost every month! This compelled us to create a simple
          solution that pinpoints the fundamentals of rent management.
        </p>

        <div class="box-container">
          <div class="box">
            <img src="{{asset('users/icon/wood.svg')}}" alt="" />
            <div class="box-bg"></div>
          </div>

          <div class="box">
            <img src="{{asset('users/icon/concreat.svg')}}" alt="" />
            <div class="box-bg"></div>
          </div>

          <div class="box">
            <img src="{{asset('users/icon/glass.svg')}}" alt="" />
            <div class="box-bg"></div>
          </div>
        </div>
      </div>

      <img src="{{asset('users/icon/Main-Object.svg')}}" class="right" alt="" />
    </div>
  </div>

  <!-- ======slider section ======= -->
  <div class="section slider-section">
  <div class="header text-capitalize">key featurs</div>

  <div class="features text-capitalize">
    <p>
      Accumulator is designed to alleviate owner's concern about rented
      properties. It's main function is to pinpoint the due payments and
      present user the total collected amount as well as printable monthly
      and annual statements in an efficient manner. This web application
      is currently running in beta version. We are working towards
      providing payment gateway for subscription & rent collection
      shortly.
    </p>
  </div>
  <!-- ===== slider ===== -->
  <div class="carousel slide" id="featurs" data-ride="carousel">
    <div class="arrow-con">
      <a href="#featurs" class="slider-arrow" data-slide="prev">
        <img src="users/icon/slider-arrow-left.svg" class="arrow" alt="" />
      </a>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="item-container">
          <img
            src="{{asset('users/img/home.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />

          <img
            src="{{asset('users/img/Dashboard.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Acoounts-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />

          <img
            src="{{asset('users/img/Buildings-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Flat-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />

          <img
            src="{{asset('users/img/RentCollection-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>
    </div>

    <div class="arrow-con">
      <a href="#featurs" class="slider-arrow" data-slide="next">
        <img src="{{asset('users/icon/slider-arrow-right.svg')}}" class="arrow" alt="" />
      </a>
    </div>
  </div>

  <!-- ======= mobile-slider ========== -->

  <div
    class="carousel slide mobile-slider"
    id="featurs2"
    data-ride="carousel"
  >
    <div class="arrow-con">
      <a href="#featurs2" class="slider-arrow" data-slide="prev">
        <img src="{{asset('users/icon/slider-arrow-left.svg')}}" class="arrow" alt="" />
      </a>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="item-container">
          <img
            src="{{asset('users/img/home.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Dashboard.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Acoounts-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Buildings-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/Flat-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>

      <div class="carousel-item">
        <div class="item-container">
          <img
            src="{{asset('users/img/RentCollection-Main.jpg')}}"
            class="slider-img"
            alt=""
            data-toggle="modal"
            data-target="#img-pop-modal"
          />
        </div>
      </div>
    </div>

    <div class="arrow-con">
      <a href="#featurs2" class="slider-arrow" data-slide="next">
        <img src="{{asset('users/icon/slider-arrow-right.svg')}}" class="arrow" alt="" />
      </a>
    </div>
  </div>

  <div class="object-1"></div>
  <div class="object-2"></div>
  <div class="object-3"></div>
  </div>

  <div class="section video-section">
  <div class="header text-capitalize">how it works</div>
  <iframe
    class="video"
    src="https://www.youtube.com/embed/-IBPyAG38LA"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>

  <div class="object-4"></div>
  <div class="object-5"></div>
  <div class="object-6"></div>
  </div>

  <div class="footer">
  <div class="section footer-content text-capitalize">
    <div class="footer-left">
      <div class="footer-brand">
        <h1>
          <img src="{{asset('users/icon/footer-brand.svg')}}" alt="" srcset="" />
          amar bari
        </h1>
        <div class="credit">
          Powered By
          <a
            href="https://citsbd.com/?fbclid=IwAR2NtqYvbOZWAENAAKMCI7aIFLvJG7C_PO7UlvUL4-bnswRSAUt27kkrxfE"
            target="_blank"
            >Chowdhury It Solutions pvt Ltd.</a
          >
        </div>
      </div>

      <div class="footer-bt-left">
        <h1 class="sub-text">want to order?</h1>
        <a href="{{route('/contact')}}" class="main-text text-uppercase">
          let's talk
          <img src="{{asset('users/icon/footer-svg.svg')}}" class="footer-link" alt="" />
        </a>
      </div>
    </div>

    <div class="footer-right">
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

      <div class="footer-bt-right">
        <a href="" class="term"> Terms & Conditions <span></span> </a>

        <a href="" class="privacy"> Privacy Policy <span></span> </a>
      </div>
    </div>
  </div>
  </div>

  <!-- top btn -->
  <a href="#backtop" class="top-btn">
  <img src="{{asset('users/icon/top-arrow.svg')}}" class="top-arrow" alt="" />
  </a>
  </div>

  <div class="modal fade" id="img-pop-modal">
  <div class="modal-dialog">
  <div class="modal-content add-modal-content">
    <div class="modal-body">
      <img src="" class="pop-img" alt="" />
    </div>
  </div>
  </div>
  </div>

  <script>
  // home page popup
  const img_btn = document.getElementsByClassName('slider-img');
  const img_pop = document.getElementsByClassName('pop-img');
  const topBtn = document.querySelector('.top-btn');

  for (let k = 0; k < img_btn.length; k++) {
  img_btn[k].addEventListener('click', function () {
    const source = img_btn[k].getAttribute('src');
    img_pop[0].setAttribute('src', source);
  });
  }

  window.addEventListener('scroll', function () {
  if (document.documentElement.scrollTop > 150) {
    topBtn.classList.add('drop');
  } else {
    topBtn.classList.remove('drop');
  }
  });
  </script>
  </body>
  </html>

    
@endsection

        