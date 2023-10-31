<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')
   </head>
   <body>
      @include('header')
      <!-- header section start -->


      
           
            <!-- contact section start -->
            <div class="contact_section">
               <div class="container">
                  <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="contact_taital">Get In Touch</h1>
                           <form action="https://formsubmit.co/yaminshakil7@gmail.com" method="POST">
                              <div class="mail_section_1">
                                 <input type="text" class="mail_text" placeholder="Name" name="Name">
                                 <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                 <input type="text" class="mail_text" placeholder="Email" name="Email">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                 <div class="send_bt">

                                 	<input type="hidden" name="_captcha" value="false">

                                 	<input type="hidden" name="_autoresponse" value="your custom message">

                                 	

                                 	<input type="hidden" name="_next" value="http://127.0.0.1:8000/contact">

                                 	<input type="hidden" name="_template" value="table">

                                 	<input type="submit" value="SEND">

                                 </div>
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
            <!-- footer section start -->
           @include('footer')
   </body>
</html>