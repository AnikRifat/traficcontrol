<!DOCTYPE html>
<html lang="en">
   <head>
      @include('headcss')
   </head>
   <body>
      <!-- header section start -->
    @include('header')

    @foreach($policy as $data)


    <h1 style="color:white; text-align: center; padding: 50px">{{$data->title}}</h1>
    

    <span style="color:white; display: inline-block; padding: 100px;">
    	
    	{!!$data->description!!}

    </span>
    

    @endforeach

     @include('footer')
               
   </body>
</html>