@extends('layouts.master')
@section('title', 'Work')
@section('class', 'work')

@section('css')
  <style type="text/css">
    .main-footer{
      display: none;
    }
  </style>
@stop

@section('content')

  <div id="ascensor">

    <div id="behaviors">{{-- Ascensor-section --}}
      <div class="section section--table section--full section--header section--header-behaviors">
        <div class="section__overlay"></div>
        <div class="section__content">
          <h2 class="js-reveal-one">{{ trans('global.work.behaviors.behaviors001') }}</h2>
          <p class="js-reveal-one">{{ trans('global.work.behaviors.behaviors01') }}</p>
        </div>
        <div class="section--header-nav">
          <a class="prev"><i class="fa fa-angle-left fa-lg"></i><p>{{ trans('global.work.org.org001') }}</p></a>
          <a class="next"><p>{{ trans('global.work.change.change001') }}</p><i class="fa fa-angle-right fa-lg"></i></a>
        </div>
        <div class="section--header-down-arrow">
          <img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover js-one">
        </div>
      </div>
      <div class="section section--semi-full first" id="one">
        <div class="slick-slider">
          <div class="slide--attitudes">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.behaviors.behaviors02') }}</p>
              <h3>{{ trans('global.work.behaviors.behaviors03') }}</h3>
              <p>{{ trans('global.work.behaviors.behaviors04') }}</p>
            </div>
          </div>
          <div class="slide--capabilities">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.behaviors.behaviors02') }}</p>
              <h3>{{ trans('global.work.behaviors.behaviors05') }}</h3>
              <p>{{ trans('global.work.behaviors.behaviors06') }}</p>
            </div>
          </div>
          <div class="slide--individuals">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.behaviors.behaviors02') }}</p>
              <h3>{{ trans('global.work.behaviors.behaviors07') }}</h3>
              <p>{{ trans('global.work.behaviors.behaviors08') }}</p>
            </div>
          </div>
          <div class="slide--teams">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.behaviors.behaviors02') }}</p>
              <h3>{{ trans('global.work.behaviors.behaviors09') }}</h3>
              <p>{{ trans('global.work.behaviors.behaviors10') }}</p>
            </div>
          </div>
          <div class="slide--systems">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.behaviors.behaviors02') }}</p>
              <h3>{{ trans('global.work.behaviors.behaviors11') }}</h3>
              <p>{{ trans('global.work.behaviors.behaviors12') }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section container-fluid section--white">
        <div class="section__heading">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="section__heading--small">{{ trans('global.work.behaviors.behaviors13') }}</h2>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        @include('layouts._footer')
      </footer>
    </div>{{-- Ascensor-section End --}}

    <div id="change">{{-- Ascensor-section --}}
      <div class="section section--table section--full section--header section--header-change">
        <div class="section__overlay"></div>
        <div class="section__content">
          <h2 class="js-reveal-two">{{ trans('global.work.change.change001') }}</h2>
          <p class="js-reveal-two">{{ trans('global.work.change.change01') }}</p>
        </div>
        <div class="section--header-nav">
          <a class="prev"><i class="fa fa-angle-left fa-lg"></i><p>{{ trans('global.work.behaviors.behaviors001') }}</p></a>
          <a class="next"><p>{{ trans('global.work.org.org001') }}</p><i class="fa fa-angle-right fa-lg"></i></a>
        </div>
        <div class="section--header-down-arrow">
          <a><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover js-two"></a>
        </div>
      </div>
      <div class="section section--semi-full first" id="two">
        <div class="slick-slider">
          <div class="slide--people">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.change.change02') }}</p>
              <h3>{{ trans('global.work.change.change03') }}</h3>
              <p>{{ trans('global.work.change.change04') }}</p>
            </div>
          </div>
          <div class="slide--space">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.change.change02') }}</p>
              <h3>{{ trans('global.work.change.change05') }}</h3>
              <p>{{ trans('global.work.change.change06') }}</p>
            </div>
          </div>
          <div class="slide--tech">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.change.change02') }}</p>
              <h3>{{ trans('global.work.change.change07') }}</h3>
              <p>{{ trans('global.work.change.change08') }}</p>
            </div>
          </div>
          <div class="slide--structure">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.change.change02') }}</p>
              <h3>{{ trans('global.work.change.change09') }}</h3>
              <p>{{ trans('global.work.change.change10') }}</p>
            </div>
          </div>
          <div class="slide--brand">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.change.change02') }}</p>
              <h3>{{ trans('global.work.change.change11') }}</h3>
              <p>{{ trans('global.work.change.change12') }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section container-fluid section--white">
        <div class="section__heading">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="section__heading--small">{{ trans('global.work.change.change13') }}</h2>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
          @include('layouts._footer')
        </footer>
    </div>{{-- Ascensor-section End --}}

    <div id="org">{{-- Ascensor-section --}}
      <div class="section section--table section--full section--header section--header-org">
        <div class="section__overlay"></div>
        <div class="section__content">
          <h2 class="js-reveal-three">{{ trans('global.work.org.org001') }}</h2>
          <p class="js-reveal-three">{{ trans('global.work.org.org01') }}</p>
        </div>
        <div class="section--header-nav">
          <a class="prev"><i class="fa fa-angle-left fa-lg"></i><p>{{ trans('global.work.change.change001') }}</p></a>
          <a class="next"><p>{{ trans('global.work.behaviors.behaviors001') }}</p><i class="fa fa-angle-right fa-lg"></i></a>
        </div>
        <div class="section--header-down-arrow">
          <a><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover js-three"></a>
        </div>
      </div>
      <div class="section section--semi-full first" id="three">
        <div class="slick-slider">
          <div class="slide--storytelling">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.org.org02') }}</p>
              <h3>{{ trans('global.work.org.org03') }}</h3>
              <p>{{ trans('global.work.org.org04') }}</p>
            </div>
          </div>
          <div class="slide--gamification">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.org.org02') }}</p>
              <h3>{{ trans('global.work.org.org05') }}</h3>
              <p>{{ trans('global.work.org.org06') }}</p>
            </div>
          </div>
          <div class="slide--culture">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.org.org02') }}</p>
              <h3>{{ trans('global.work.org.org07') }}</h3>
              <p>{{ trans('global.work.org.org08') }}</p>
            </div>
          </div>
          <div class="slide--exp">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.org.org02') }}</p>
              <h3>{{ trans('global.work.org.org09') }}</h3>
              <p>{{ trans('global.work.org.org10') }}</p>
            </div>
          </div>
          <div class="slide--foresight">
            <div class="section__overlay"></div>
            <div class="slide__content">
              <p>{{ trans('global.work.org.org02') }}</p>
              <h3>{{ trans('global.work.org.org11') }}</h3>
              <p>{{ trans('global.work.org.org12') }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section container-fluid section--white">
        <div class="section__heading">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="section__heading--small">{{ trans('global.work.org.org13') }}</h2>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
          @include('layouts._footer')
        </footer>
    </div>{{-- Ascensor-section End --}}


  </div>





@stop

@section('js')
  <script src="{{ url('assets/js/classie.js') }}"></script>
  <script type="text/javascript">


  

  $(function() {

     first('.first');

     sectionSize('.section--full');
     semiFull('.section--semi-full');
     backgroundCover('.section--header');
     backgroundCover('.slick-slide');
     $('.panel').each(function() {
         $(this).on('show.bs.collapse', function () {
             $panel = $(this);
             $collapsed = $('.titulo', $(this).first() );
             $collapsed.addClass('active');
             $collapsed.addClass('fa-angle-up');
             $collapsed.removeClass('fa-angle-down');
         });
         $(this).on('hide.bs.collapse', function () {
             $panel = $(this);
             $collapsed = $('.titulo', $(this).first() );
             $collapsed.removeClass('active');
             $collapsed.addClass('fa-angle-down');
             $collapsed.removeClass('fa-angle-up');
         });
     });

     $(".js-one").click(function(e) {
         e.preventDefault();
         $('html, #behaviors').animate({
             scrollTop: $("#one").offset().top
         }, 2500);
     });

     $(".js-two").click(function(e) {
         e.preventDefault();
         $('html, #change').animate({
             scrollTop: $("#two").offset().top
         }, 2500);
     });
     $(".js-three").click(function(e) {
         e.preventDefault();
         $('html, #org').animate({
             scrollTop: $("#three").offset().top
         }, 2500);
     });

     var ascensor = $('#ascensor').ascensor({
      direction: [[1,1],[1,2],[1,3],[1,4]],
      loop: "loop-x",
      ascensorFloorName: ['behavioral-design','strategic-change','organizational-innovation'],
      ready: function(){

      }
     });           // Init ascensor

     scroller('#behaviors', '#one');
     scroller('#change', '#two');
     scroller('#org', '#three');

     var containerWorks = document.getElementById('works');
     var containerBehaviors = document.getElementById('behaviors');
     var containerChange = document.getElementById('change');
     var containerOrg = document.getElementById('org');
     var reveal_floor_1 = false;
     var reveal_floor_2 = false;
     var reveal_floor_3 = false;

     function ascensor_scroll() {
      ascensor.on("scrollEnd", function(e, floor){
        // console.log(floor.from);
        // console.log(floor.to);

        if(floor.to == 1) {
          scroller('#change', '#two');
        }

        if(floor.to == 2) {
          scroller('#org', '#three');
        }

      });
     }


     var ascensorInstance = ascensor.data('ascensor');   // Access instance
     $('.next').click(function(event) {
       /* Act on the event */
       ascensorInstance.next();
     });
     $('.prev').click(function(event) {
       /* Act on the event */
       ascensorInstance.prev();
     });
     $('.behaviors').click(function(event) {
       /* Act on the event */
       ascensorInstance.scrollToFloor(1);
     });
     $('.change').click(function(event) {
       /* Act on the event */
       ascensorInstance.scrollToFloor(2);
     });
     $('.org').click(function(event) {
       /* Act on the event */
       ascensorInstance.scrollToFloor(3);
     });
     $('.slick-slider').slick({
        autoplay: true,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 6000,
        fade: true,
        mobileFirst: true,
        swipe: true
      });
     //*** Selectize
     //$('.selectize').selectize();
     //Slider
     $("#budget").slider({
       tooltip: 'always'
     });

     
  });

  $(window).load(function() {
    /* Act on the event */
  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){
        first('.first');
        scroller('#behaviors', '#one');
        sectionSize('.section--full');
        semiFull('.section--semi-full');
        backgroundCover('.section--header');
        backgroundCover('.slick-slide');
        centerAbsolute('.infinity__single--refine');
      }, 300);
  });
  </script>
@stop
