@extends('layouts.master')
@section('title', 'Careers')
@section('class', 'careers')

@section('content')

  <div class="section section--full section--header-careers section--header">
    <div class="section__overlay"></div>
    <div class="section--header-img hidden-xs">
      <img src="{{ url('assets/img/rect.png') }}" class="img-responsive">
    </div>
    <div class="section--disclaimer">
      <p>{{ trans('global.work.cars.cars01') }}</p>
    </div>
    <div class="slick-slider slick-slider--careers">
      <div>
        <p>No. 1</p>
        <h5>{!! trans('global.work.cars.cars02') !!}</h5>
      </div>
      <div>
        <p>No. 2</p>
        <h5>{!! trans('global.work.cars.cars03') !!}</h5>
      </div>
      <div>
        <p>No. 3</p>
        <h5>{!! trans('global.work.cars.cars04') !!}</h5>
      </div>
      <div>
        <p>No. 4</p>
        <h5>{!! trans('global.work.cars.cars05') !!}</h5>
      </div>
      <div>
        <p>No. 5</p>
        <h5>{!! trans('global.work.cars.cars06') !!}</h5>
      </div>
    </div>
    <div class="section--header-down-arrow smooth">
      <a href="#first"><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover"></a>
    </div>
  </div>

  <div class="section container-fluid section--white" id="first">
    <div class="section__heading careers-grid ">
      <div class="row">
        <div class="col-xs-12 section__heading--big">
          <h2>{{ trans('global.work.cars.cars07') }}</h2>
        </div>
      </div>
      <div class="row careers-grid__row">
        <div class="col-sm-6 careers-grid__single">
          <h3>{{ trans('global.work.cars.cars08') }}</h3>
          <a href="{{ route('careers-app',['opening'=>'trainer']) }}">{{ trans('global.work.cars.cars09') }} <i class="fa fa-arrow-right fa-lg"></i></a>
        </div>
        <div class="col-sm-6 careers-grid__single">
          <h3>{{ trans('global.work.cars.cars10') }}</h3>
          <a href="{{ route('careers-app',['opening'=>'consultant']) }}">{{ trans('global.work.cars.cars09') }} <i class="fa fa-arrow-right fa-lg"></i></a>
        </div>
      </div>
      <div class="row careers-grid__row">
        <div class="col-sm-6 careers-grid__single">
          <h3>{{ trans('global.work.cars.cars11') }}</h3>
          <a href="{{ route('careers-app',['opening'=>'visual-designer']) }}">{{ trans('global.work.cars.cars09') }} <i class="fa fa-arrow-right fa-lg"></i></a>
        </div>
        <div class="col-sm-6 careers-grid__single">
          <h3>Social Manager</h3>
          <a href="{{ route('careers-app',['opening'=>'social-manager']) }}">{{ trans('global.work.cars.cars09') }} <i class="fa fa-arrow-right fa-lg"></i></a>
        </div>
      </div>
      <div class="row careers-grid__row">
        <div class="col-xs-12 careers-grid__single">
          <h3>{{ trans('global.work.cars.cars12') }}</h3>
          <a href="{{ route('careers-app') }}">{{ trans('global.work.cars.cars13') }} <i class="fa fa-arrow-right fa-lg"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--black">
    <div class="section__content section__heading">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="section__heading--bright">{{ trans('global.work.cars.cars14') }}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--space">
  </div>

@stop

@section('js')
  <script type="text/javascript">

  $(function() {
     sectionSize('.section--full');
     backgroundCover('.section--header-careers');
     first('#first');
     $('.slick-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        mobileFirst: true,
        swipe: true,
        pauseOnHover: false
      });
     $('.careers-grid__single').click(function(event) {
       /* Act on the event */
       var anchor = $(this).find('a').attr('href');
       window.location = anchor;
     });
  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){ 
        sectionSize('.section--full');
        backgroundCover('.section--header-careers');
        first('#first');
      }, 300);
  });
  </script>
@stop
