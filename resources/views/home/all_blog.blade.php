<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')
   </head>
   <body >


      <!-- header section start -->
    @include('header')
             
            <div class="service_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="service_taital">Quick Searches</h1>
                     </div>
                  </div>

                  <form action="{{url('blog-page-search')}}" method="get">

                     @csrf

                  <div class="service_section_2">
                     
                     <div class="input-group">



                     <input type="text" name="search" class="form-control" placeholder="Search blog post here">


                     <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" style="background-color: #ffffff; border-color:#ffffff ">
                        <i class="fa fa-search" style="color: #191919;"></i>
                        </button>
                     </div>

                    

                  </div>
                   </form>
                  </div>
            </div>
            <!-- service section end -->
            <!-- blog section start -->
            @include('post')
            <!-- blog section end -->
           
            @include('footer')
   </body>
</html>