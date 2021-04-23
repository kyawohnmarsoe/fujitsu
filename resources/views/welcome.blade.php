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
            <a href="https://www.facebook.com/fujitsuairconsg/"><img src="{{ asset('img/facebook.svg') }}" alt="facebook" class="social-icon"></a>
            <div class="social-line"></div>
            <a href="https://www.youtube.com/channel/UC3eRsWdfuNc8oNQQ4jhOayw"><img src="{{ asset('img/youtube.svg') }}" alt="youtube" class="social-icon"></a>
            <div class="social-line"></div>
            <a href="https://www.winfinity.com.sg/"><img src="{{ asset('img/global.svg') }}" alt="website" class="social-icon"></a>
          </div>
            <div class="pt-5 my-container" style=" position: relative;">

             <a href="{{url('/')}}">  <img src="{{ asset('img/logo2.png') }}" alt="" class="fujisu-logo d-none d-lg-block"> </a>
              <div class="d-lg-flex align-items-end move-right">
                      <div class=" col-lg-4  pl-lg-4 pb-lg-4 mt-lg-5">
                      <a href="{{url('/')}}"> <img src="{{ asset('img/logo2.png') }}" alt="" class="fujisu-logo-mobile d-block d-lg-none m-auto">
</a>
                         
                          <div class="headersub-title red-text ">
                            <!--The Pearl Series-->
                             <img src="{{ asset('img/Asset31.png') }}" alt="" class="py-3 pearl-img">
                        
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
                                      <img src="{{ asset('img/tick.svg') }}" alt="" class="tick"> pay $0 for parts, <br>
                                       <span style="padding-left:24px;">labour & transport</span>  <br>
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
                  <div class="form-wapper white-text ">
                        <div class="form-header text-center">
                       
                        ONLINE EXCLUSIVE AWAITS. <br>
                        SIGN UP NOW!
                        </div>
                        <p class=" text-center py-4 px-lg-5">
                        Simply complete the form below and <br>
                        our Sales Consultant will get in touch with you shortly.
                        </p>
                       
                      <form method="post" action="{{ url('/submitinfo') }}" class="fujisu-form px-lg-5" >
                      @csrf
                        <div class="form-group px-lg-5 px-lg-5">
                        @if ($user)
                            <input type="text" class="form-control" name="name" placeholder="Name:" required value="{{ $user->name }}" />
                        @else
                            <input type="text" class="form-control" name="name" placeholder="Name:" required />
                        @endif
                        </div>
                       
                        <div class="form-group px-lg-5 px-lg-5">
                        @if ($user)
                            <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="E-mail Address:" required value="{{ $user->email }}" />
                        @else
                          <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="E-mail Address:" required />
                          @endif
                        </div>

                        <div class="form-group px-lg-5 px-lg-5">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number:"  />
                        </div>

                        <div class="form-group px-lg-5 px-lg-5">
                          <select class="form-control" name="subject">
                            <option value="1">I am looking for: </option>
                            <option value="2">A brand new air conditioner</option>
                            <option value="3">A replacement to my old unit</option>
                          </select>
                        </div>
                       
                        <div class="form-group form-check py-4">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                          <label class="form-check-label" for="exampleCheck1">By ticking the box and clicking submit, I hereby:</label>
                          <ul>
                          <li>Agree that Winfinity (S'pore) Pte. Ltd. may collect, use and disclose my personal data, as provided in this form, for the following purpose(s) in accordance with the Personal Data Protection Act.</li>
                          <li>Agree to administer this enquiry, including to contact me for the administration of my enquiry in relation to this submission.</li>
            
                          </ul>
                          <small>
In the event you wish to withdraw consent to the collection, use or disclosure of your personal data kindly email: enquiry@winfinity.com.sg*</small>
                        </div>

                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-fujisu ">Submit</button>
                        </div>
                      </form>
                     
                      <div class="fujisu-or my-5"><span>OR</span></div>
                      
                      <div class="text-center mb-3">
                          <p>Sign Up with</p>
                            <!-- <a href="{{url('/facebook')}}"><img src="{{ asset('img/fb-button.svg') }}" alt="" class="social-login"></a> -->
                            <!-- <a href="{{url('/google')}}"><img src="{{ asset('img/google-button.svg') }}" alt="" class="social-login"></a> -->
                            <a href="#"><img src="{{ asset('img/fb-button.svg') }}" alt="" class="social-login"></a>
                            <a href="#"><img src="{{ asset('img/google-button.svg') }}" alt="" class="social-login"></a>
                      </div>
                  </div>
            </div>
     </section>

     <!-- Footer  -->
     <section style="overflow:hidden;">
     <img src="{{ asset('img/bottom.svg') }}" alt="" class="img-fluid" style="margin-bottom:-3px;" >
     </section>

<script src="{{ asset('bootstrap4/jquery-3.5.1.slim.min.js') }}" ></script>
<script src="{{ asset('bootstrap4/popper.min.js') }}" ></script>
<script src="{{ asset('bootstrap4/bootstrap.min.js') }}" ></script>

<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
