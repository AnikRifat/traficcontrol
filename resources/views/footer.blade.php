 <div class="footer_section">
               <div class="container">
                  <div class="footer_sectio_2">
                     <div class="row">
                        <div class="col-lg-3 col-md-6">
                           <h2 class="footer_logo">VPN Website</h2>
                           <p class="footer_text">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of </p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Navigation</h2>
                           <div class="footer_menu">
                              <ul>
                                 <li class="active"><a href="index.html">Home</a></li>
                                 <li><a href="about.html">About</a></li>
                                 <li><a href="location.html">Location</a></li>
                                 <li><a href="service.html">Services</a></li>
                                 <li><a href="features.html">Features</a></li>
                                 <li><a href="{{url('private-policy')}}">Privacy Policy</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Contact Info</h2>
                           <p class="address_text">Office Address</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left15">Loram ipusm New York, NY 36524</span></a></div>
                           <p class="address_text">Customer Service:</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left15">( +01 1234567890 )</span></a></div>
                           <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">demo@gmail.com</span></a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Discover</h2>
                           <div class="subscribe_menu">
                              <ul>
                                 <li><a href="#">Help</a></li>
                                 <li><a href="#">How It Works</a></li>
                                 <li><a href="#">subscribe</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li><a href="{{url('private-policy')}}">Privacy Policy</a></li>
                              </ul>
                           </div>
                           <div class="social_icon">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer section end -->
         </div>
      </div>
      <!-- layout main section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->

        <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 