<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')

      <style type="text/css">
      	
      	p{

      		color: white;
      		font-weight: bold;
      	}
      	

      </style>
   </head>
   <body>
      @include('header')
      <!-- header section start -->
    
         <div style="color:white; text-align:center; margin: auto;">
            
            {!!$pagedetail->body!!}

         </div> 
          	
    
                 
            <!-- contact section end -->
            <!-- footer section start -->
           @include('footer')
   </body>
</html>