<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')

      <style type="text/css">
         
         .divcen
         {
            display: flex;
           justify-content: center;
           align-items: center;
         }

         .img_size
         {
            height: 400px;
            width: 600px;
         }

      </style>
   </head>
   <body>
      <!-- header section start -->
    @include('header')
      <!-- header section start -->
 
    <div>
          <h1 style="color:white; text-align: center; font-weight:bold; font-size: 32px; padding: 16px">{{$post->title}}</h1>

   </div>



   <div class="divcen">

          <img class="img_size" src="{{Voyager::image($post->image)}}">

   </div>

   <span style="color: white; padding: 150px;">
      
      {!!$post->body!!}

   </span>
          
            


    
                 
            <!-- contact section end -->
            <!-- footer section start -->
           @include('footer')
   </body>
</html>