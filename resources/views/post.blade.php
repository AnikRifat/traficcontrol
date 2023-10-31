<div class="blog_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="blog_taital">See Popular Posts Here</h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog_section_2 layout_padding">
               <div class="container">

                  @foreach($post as $posts)
                  <div class="row card_style border-top border-bottom border-end">
                     <div class="col-md-6">
                        <div class="blog_img"><img src="{{Voyager::image($posts->image)}}"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text blog_heading">{{$posts->title}}</h1>
                           <p class="lorem_text blog_title">Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed</p>
                           <div class="readmore_btn"><a href="{{url('post_details',$posts->id)}}">Read More</a></div>
                        </div>
                     </div>
                  </div>

               </br>
                  @endforeach
                  
                   
                   </div>

                   <div style="padding-left: 40%;">
                      
                      {{$post->links()}}

                   </div>

                   
                   
                  
               </div>
            </div>