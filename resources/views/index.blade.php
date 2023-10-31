<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')
   </head>
   <body >


      <!-- header section start -->
    @include('header')
               @include('slider')

                
            <!-- banner section end -->
            <!-- service section start -->
           @include('home.search')
            <!-- service section end -->
            <!-- blog section start -->
            @include('post')
            <!-- blog section end -->
            <!-- shop section start -->
            <div class="shop_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <h1 class="shop_taital">Get the <br><span style="color: #18191a;">Food Finda App</span></h1>
                        <p class="shop_text">Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        <div class="app_icon_main">
                           <div class="app_icon"><img src="images/icon-1.png"></div>
                           <div class="app_icon"><img src="images/icon-2.png"></div>
                        </div>
                        <div class="download_bt"><a href="#">Download Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="mobile_img"><img src="images/mobile-img.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- shop section end -->
            <!-- testimonial section start -->
          
            <!-- testimonial section end -->
            <!-- contact section start -->
            <div class="contact_section layout_padding">
               <div class="container">
                  <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="contact_taital">Get In Touch</h1>
                           <form action="">
                              <div class="mail_section_1">
                                 <input type="text" class="mail_text" placeholder="Name" name="Name">
                                 <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                 <input type="text" class="mail_text" placeholder="Email" name="Email">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                 <div class="send_bt"><a href="#">SEND</a></div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- order section start -->
                     <div class="order_section">
                        <div class="order_taital_main">
                           <h1 class="order_taital">Order Best food at time</h1>
                           <div class="order_bt"><a href="#">Order Now</a></div>
                        </div>
                     </div>
                     <!-- order section end -->
                  </div>
               </div>
            </div>
            <!-- contact section end -->
            <!-- footer section start -->
            @include('footer')
   </body>
</html>