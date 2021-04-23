<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fujitsu</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap4/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fujisu.css') }}" rel="stylesheet">
    </head>
    <body>

    <!-- Header  -->
    <section>
          <div class="header-wapper text-center text-lg-left pb-4 pb-lg-0">

          <div class="social-wapper">
            <a href="#"><img src="{{ asset('img/facebook.svg') }}" alt="facebook" class="social-icon"></a>
            <div class="social-line"></div>
            <a href="#"><img src="{{ asset('img/youtube.svg') }}" alt="youtube" class="social-icon"></a>
            <div class="social-line"></div>
            <a href="#"><img src="{{ asset('img/global.svg') }}" alt="website" class="social-icon"></a>
          </div>

            <div class="pt-5" style=" position: relative;">

             <a href="{{url('/')}}">  <img src="{{ asset('img/logo2.png') }}" alt="" class="fujisu-logo d-none d-lg-block"> </a>
              <div class="d-lg-flex align-items-end move-right">
                      <div class=" col-lg-4  pl-lg-4 pb-lg-4 mt-lg-5">
                      <a href="{{url('/')}}"> <img src="{{ asset('img/logo2.png') }}" alt="" class="fujisu-logo-mobile d-block d-lg-none m-auto">
</a>
                         
                          <div class="headersub-title red-text ">
                            <!--The Pearl Series-->
                            <img src="https://winfinity.cool/public/img/Asset31.png" alt="" class="py-3 pearl-img">
                          </div>
                          <div class="header-title">
                              the intelligent <br>
                              choice <br>
                              in comfort
                          </div>
                          <img src="{{ asset('img/Asset41.png') }}" alt="" class="header-circles py-3 d-none d-lg-block">
                          <div class="header-title red-text d-none d-lg-block">
                            free
                          </div>
                          <p class="header-warranty d-none d-lg-block">
                            <span class="warranty-title"> 5 years' full warranty </span> <br>
                            <img src="{{ asset('img/tick.svg') }}" alt="" class="tick"> pay $0 for parts, labour & transport <br>
                            <img src="{{ asset('img/tick.svg') }}" alt="" class="tick"> pay $0 for all defects
                          </p>

                      </div>
                      <div class="col-lg-8 right-move" >
                        <img src="{{ asset('img/Asset51.png') }}" alt="" class="fujisu-header d-none d-lg-block" />
                        <img src="{{ asset('img/Asset50.png') }}" alt="" class="fujisu-header d-block d-lg-none" />

                       
                        <img src="{{ asset('img/Asset41.png') }}" alt="" class="header-circles py-3 d-block d-lg-none m-auto">
                         
                              <div class=" d-block d-lg-none text-left ">
                                  <div class="header-title red-text text-center">
                                      free
                                    </div>
                                    <p class="header-warranty ">
                                      <span class="warranty-title"> 5 years' full warranty </span> <br>
                                      <img src="{{ asset('img/tick.svg') }}" alt="" class="tick"> pay $0 for parts, labour & transport <br>
                                      <img src="{{ asset('img/tick.svg') }}" alt="" class="tick"> pay $0 for all defects
                                    </p>
                            </div>

                      </div>
                </div>
            </div>
          </div>
    </section>


     <!-- Form  -->
     <section>
            <div class="container ">
                  <div class="form-wapper white-text text-center">
                  <h1>Thank You for your submission! </h1>
<h3> Our sales consultant will get in touch with you shortly.</h3>
                  </div>
            </div>
     </section>

     <!-- Footer  -->
     <section style="overflow:hidden;">
     <!-- <img src="{{ asset('img/Untitled-2.jpg') }}" alt="" class="img-fluid"> -->
     <img src="{{ asset('img/bottom.svg') }}" alt="" class="img-fluid" style="margin-bottom:-3px;" >
     </section>

<script src="{{ asset('bootstrap4/jquery-3.5.1.slim.min.js') }}" ></script>
<script src="{{ asset('bootstrap4/popper.min.js') }}" ></script>
<script src="{{ asset('bootstrap4/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
