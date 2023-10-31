  <div class="">

 
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">
                  <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{url('/')}}">Home</a>
                     <a href="{{url('/blog')}}">Blog</a>
                     <a href="{{url('/shop')}}">Shop</a>
                     <a href="{{url('contact')}}">Contacts</a>

                    @foreach($pagename as $pagenames)
                   <li>  <a href="{{url('/page',$pagenames->id)}}">{{$pagenames->title}}</a></li>
                     @endforeach

                     @guest

                     <li><a href="/admin/login">Login</a></li>


                     @endguest


                     @auth

                     <li><a href="/admin">Dashboard</a></li>



                      <li><a  href="/logout">Logout</a></li>
                                
                              @endauth 
                             
                        


                  </div>
                  <form class="form-inline ">
                     <div class="login_text"><a href="tel:+701 5402578"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +701 5402578
                     </span></a></div>
                  </form> 
                  <a class="logo" href="{{url('/')}}"><img src="{{asset('images/rblogo.png')}}"></a>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                  <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : rb@rbpessacash.com 
                  </span></a></div>
               </nav>
            </div>
         </div>
      </div>

      <!-- header section end -->
      <!-- layout main section start -->
      <div class="">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <div class="container">
                  
                  <div class="menu_main">
                     <div class="custome_menu">
                        <ul>
                           <li class="active"><a href="{{url('/')}}">Home</a></li>
                        
                           <li><a href="{{url('/blog')}}">Blog</a></li>
                           <li><a href="{{url('/shop')}}">Shop</a></li>
                           <li><a href="{{url('contact')}}">Contacts</a></li>

                            @foreach($pagename as $pagenames)
                   <li>  <a href="{{url('/page',$pagenames->id)}}">{{$pagenames->title}}</a></li>
                     @endforeach





                        </ul>


                     </div>
                      @guest



                      <button class="btn btn-secondary">
                               <a style="color: black; font-weight: bold; " href="/admin/login">Login</a>
                              </button>

                    


                     @endguest
                     <ul>



                       


                     @auth
 
                                
                             


                        <li>
                           <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                
                              </ul>
                            </div>
                        </li>


                      @endauth 
                       
                        
                     </ul>
                    
                  </div>
               </div>