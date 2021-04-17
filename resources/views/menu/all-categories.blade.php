@extends('layouts/app')

@section('title')
Food Menu {{$settings['general']->site_title}} 
@endsection 

@section('content')


<div id="menu-page" style="position: relative;">
       @include('includes.food-categories-slider')
    </div>
   
    <section id="food-preview" style="background: -moz-radial-gradient(center, ellipse cover, #ed4852 0%, #9c1b24 100%); /* FF3.6-15 */
background: -webkit-radial-gradient(center, ellipse cover, #ed4852 0%,#9c1b24 100%); /* Chrome10-25,Safari5.1-6 */
background: radial-gradient(ellipse at center, #ed4852 0%,#9c1b24 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ ">
    <h2 >We have everything you need to kill your hunger</h2>
    <div class="button-rounded" style="position:relative; bottom: 210px; "  >View Our Menu</div>
    <div class="container" style="position:relative; bottom: 250px; ">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
          @foreach ($categories as $category)
          <a href="/menu/{{$category->title}}" class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title" >
                {{$category->title}}
              </div>
              <p class="food-description" >
              {{$category->description}}
              
              </p>
              <div class="food-image"  >
                <img src="{{$category->image_url}}">
              </div>
            </div>

</a>
          @endforeach
         
        
          
        </div>
      </div>
    </div>

  </section>
    

   

  <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  

  <script>
      let slides = $('.sliding-system a.slide').length; 
      let maxSlides; 
      let moveTotal; 
      let currentSlide = 0; 
      $(window).resize(function(){
          currentSlide = 0; 
          $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0)'); 
      })
      function desktopSlider(){
          if(a.matches){
            maxSlides = Math.ceil((slides * 20) / 100);
            moveTotal = 100; 

            $('.right-btn').on('click', () => {
                console.log('clicked right btn')
                if(currentSlide < maxSlides){
                  currentSlide += 100; 
                  $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
                }
            })
          }
      }
      var a = window.matchMedia("(min-width: 998px)")
      desktopSlider(a)
      a.addListener(desktopSlider)

   

  </script>
    
    
@endsection 
