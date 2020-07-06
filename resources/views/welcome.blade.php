<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 

    <link href="{{ asset('css/fujisu.css') }}" rel="stylesheet">
    </head>
    <body>

    <!-- Header  -->
    <section>
          <div class="header-wapper text-center text-md-left pb-4 pb-md-0">
            <div class="container pt-3" style=" position: relative;">

              <img src="{{ asset('img/logo.png') }}" alt="" class="fujisu-logo d-none d-md-block">
              <div class="d-md-flex align-items-end move-right">
                      <div class=" col-md-4  pl-md-4 pb-md-4">

                          <img src="{{ asset('img/logo.png') }}" alt="" class="fujisu-logo-mobile d-block d-md-none m-auto">

                          <div class="headersub-title red-text">
                            The Pearl Series
                          </div>
                          <div class="header-title">
                              the intelligent <br>
                              choice <br>
                              in comfort
                          </div>
                          <img src="{{ asset('img/Asset4.png') }}" alt="" class="header-circles py-3 d-none d-md-block">
                          <div class="header-title red-text d-none d-md-block">
                            free
                          </div>
                          <p class="header-warranty d-none d-md-block">
                            5 years' full warranty <br>
                            pay $0 for parts, labour & transport <br>
                            pay $0 for all defects
                          </p>

                      </div>
                      <div class="col-md-8">
                        <img src="{{ asset('img/Asset3.png') }}" alt="" class="fujisu-header" />

                        <img src="{{ asset('img/Asset6.png') }}" alt="" class="img-fluid py-3 d-block d-md-none m-auto">
                      </div>
                </div>

                <div class="free-wapper white-text d-block d-md-none ">
                            <div class="header-title  ">
                                free
                              </div>
                              <p class="header-warranty ">
                                5 years' full warranty <br>
                                pay $0 for parts, labour & transport <br>
                                pay $0 for all defects
                              </p>
                </div>
              
              
            </div>
          </div>
    </section>


     <!-- Form  -->
     <section>
            <div class="container ">
                  <div class="form-wapper white-text ">
                        <div class="form-header text-center">
                        THE RELIABLE & EFFICIENT <br>
                        AIR CONDITIONER FOR YOUR HOME <br>
                        YOUR ONLINE EXCLUSIVE OFFER AWAITS. SIGN UP TODAY
                        </div>
                        <p class=" text-center py-4 px-md-5">
                        Simply complete the form below and fill in under remarks your preferred date, time for our Sales Consultant to get in touch with you.  
                        </p>
                        

                      <form action="#" class="fujisu-form px-md-5">
                        <div class="form-group px-md-5 mx-md-5">
                          <input type="text" class="form-control" name="name" placeholder="Name:" required />
                        </div>
                        <div class="form-group px-md-5 mx-md-5">
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number:" required />
                        </div>
                        <div class="form-group px-md-5 mx-md-5">
                          <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="E-mail Address:" required />
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
                  </div>
            </div>
     </section>

     <!-- Footer  -->
     <section>
     <img src="{{ asset('img/Untitled-2.jpg') }}" alt="" class="img-fluid">
     </section>
     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
