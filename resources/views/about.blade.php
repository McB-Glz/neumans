@extends('layouts.master')
@section('title', 'About')
@section('class', 'about')

@section('content')

  <div class="section section--full section--header-about section--header">
    <div class="section__overlay"></div>
    <div class="section--img">
      <img src="{{ url('assets/img/headers/about.png') }}" class="img-responsive">
    </div>
    <div class="section--header-down-arrow smooth">
      <a href="#first"><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover"></a>
    </div>
  </div>

  <div class="section container-fluid section--white" id="first">
    <div class="section__heading section__heading--big">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.about.about01') }}</h2>
        </div>
      </div>
    </div>
    <div class="section__content section__content--padding">
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p class="section__content--txt-big">{{ trans('global.about.about02') }}</p>
          <p class="section__content--txt-big">{{ trans('global.about.about03') }}</p>
        </div>
        <div class="col-sm-5">
          <p class="section__content--txt-big">{{ trans('global.about.about04') }}</p>
          <img src="{{ url('assets/img/line.png') }}" class="img-responsive line--neumans">
          <p class="section__content--txt-big">{{ trans('global.about.about05') }}</p>
        </div>
      </div>
      <br/>
      <br/>
    </div>
  </div>

  <div class="section container-fluid section--black">
    <div class="section__content section__heading">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="section__heading--bright">{!! trans('global.about.about06') !!}</h2>
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
     first('#first');
     sectionSize('.section--full');
     randomBG('.section--header-about');
     backgroundCover('.section--header-about');
     topPadding('.section--img');
  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){ 
        sectionSize('.section--full');
        backgroundCover('.section--header-about');
        topPadding('.section--img');
      }, 300);
  });
  </script>
@stop
