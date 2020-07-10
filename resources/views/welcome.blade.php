<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fujisu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 

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

             <a href="{{url('/')}}">  <img src="{{ asset('img/logo.png') }}" alt="" class="fujisu-logo d-none d-lg-block"> </a>
              <div class="d-lg-flex align-items-end move-right">
                      <div class=" col-lg-4  pl-lg-4 pb-lg-4 mt-lg-5">
                      <a href="{{url('/')}}"> <img src="{{ asset('img/logo.png') }}" alt="" class="fujisu-logo-mobile d-block d-lg-none m-auto">
</a>
                         
                          <div class="headersub-title red-text ">
                            The Pearl Series
                          </div>
                          <div class="header-title">
                              the intelligent <br>
                              choice <br>
                              in comfort
                          </div>
                          <img src="{{ asset('img/Asset4.png') }}" alt="" class="header-circles py-3 d-none d-lg-block">
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
                        <img src="{{ asset('img/Asset3.png') }}" alt="" class="fujisu-header d-none d-lg-block" />
                        <img src="{{ asset('img/Asset21.png') }}" alt="" class="fujisu-header d-block d-lg-none" />

                       
                        <img src="{{ asset('img/Asset4.png') }}" alt="" class="header-circles py-3 d-block d-lg-none m-auto">
                         
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
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number:" required />
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
                          <label class="form-check-label" for="exampleCheck1">By ticking the box and clicking Signing Up, I hereby: </label>
                          <ul>
                          <li>Agree and consent to the Privacy Policy</li>
                          <li>Allow personnel to contact me</li>
                          <li>Specifically and expressly consent to the use of website tracking methods, including cookies, and to the safe and secure transmission of your personal information in accordance with the Privacy Policy.</li>
                          </ul>
                        </div>


                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-fujisu ">Submit</button>
                        </div>
                      </form>
                     
                      <div class="fujisu-or my-5"><span>OR</span></div>
                      
                      <div class="text-center mb-3">
                          <p>Sign Up with</p>
                            <a href="#"><img src="{{ asset('img/fb-button.svg') }}" alt="" class="social-login"></a>
                            <a href="{{url('/google')}}"><img src="{{ asset('img/google-button.svg') }}" alt="" class="social-login"></a>
                      </div>
                    

                  </div>
            </div>
     </section>

     <!-- Footer  -->
     <section style="overflow:hidden;">
     <!-- <img src="{{ asset('img/Untitled-2.jpg') }}" alt="" class="img-fluid"> -->
     <img src="{{ asset('img/bottom.svg') }}" alt="" class="img-fluid" style="margin-bottom:-3px;" >
     </section>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>

<!-- fb login  -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '720247318739713',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    </body>
</html>
