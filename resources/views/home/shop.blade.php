<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')
   </head>
   <body >


      <!-- header section start -->
    @include('header')
              
              <div class="shop_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        
                        <h1 class="shop_taital">{{$shops->title}}</h1>
                        <p style="color:white!important;" class="shop_text">{!!$shops->description!!}</p>
                        <div class="app_icon_main">
                           <div class="app_icon">

                              <a target="_blank" href="{{$shops->google_play_url}}">
                                 <img src="images/icon-1.png">
                              </a>
                              

                           </div>
                           <div class="app_icon">
                              <a target="_blank" href="{{$shops->app_url}}">
                                 <img src="images/icon-2.png">
                              </a>
                              </div>
                        </div>
                        <div class="download_bt"><a target="_blank" href="{{$shops->download_url}}">Download Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="mobile_img">

                           <img src="images/{{$shops->image}}"></div>
                     </div>
                  </div>
                  
               </div>
            </div>
            <!-- contact section end -->
            <!-- footer section start -->
            @include('footer')
   </body>
</html>