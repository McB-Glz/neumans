@extends('layouts.master')
@section('title', 'Welcome')
@section('class', 'home')

@section('content')

  <div class="section section--full section--header-home section--header">
    <div class="section--header-down-arrow smooth">
      <a href="#first"><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover"></a>
    </div>
  </div>

  <div class="section section--table section--full section--home container-fluid" id="first">
    <div class="section__overlay"></div>
    <div class="section__content">
      <h3 class="js-reveal">{{ trans('global.work.work01') }}</h3>
      <h4 class="js-reveal">{{ trans('global.work.work02') }}</h4>
    </div>
  </div>

 
  <div class="section container-fluid section--infinity section--white full-row">
    <div class="row">
      <div class="col-xs-12">
         @include('partials._infinity')
      </div>
    </div>
  </div>

  <div class="section container-fluid section--white">
    <div class="section__heading">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="wow--element fadeIn">{{ trans('global.work.work10') }}</h2>
        </div>
      </div>
    </div>
    <div class="section__content">
      <div class="row section-grid ">
        <div class="col-sm-4 section-grid--home section-grid__single section-grid__single--behaviors">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#behavioral-design' }}">{{ trans('global.work.behaviors.behaviors001') }}</a></h3>
          </div>
        </div>
        <div class="col-sm-4 section-grid--home section-grid__single section-grid__single--change">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#strategic-change' }}">{{ trans('global.work.change.change001') }}</a></h3>
          </div>
        </div>
        <div class="col-sm-4 section-grid--home section-grid__single section-grid__single--org">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#organizational-innovation' }}">{{ trans('global.work.org.org001') }}</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section container-fluid section--green section--blog">
    <div class="section__title section__title--blog">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.home.home03') }}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="blog-grid section container-fluid">
    <div class="row">
      @foreach ( $posts as $post )
        <?php
          $thumb_id = get_post_thumbnail_id($post->ID);
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          $thumb_url = $thumb_url_array[0];
        ?>
        <div class="col-sm-3 blog-grid__single">
          <a href="{{ esc_url( get_permalink($post) ) }}">
            <div class="blog-grid__overlay">
              <h3>{{ get_the_title($post) }}</h3>
            </div>
            <div class="img-bg" style="background-image:url('{{ $thumb_url }}');">
            </div>
          </a>
        </div>
      @endforeach

      {{-- <div class="col-sm-3 blog-grid__single">
        <a href="#">
          <div class="blog-grid__overlay">
            <h3>Lorem Ipsum</h3>
          </div>
          <div class="img-wrapper">
            <img src="{{ url('assets/img/blog-grid.jpg') }}" class="img-responsive">
          </div>
        </a>
      </div> --}}
    </div>
  </div>

@stop

@section('js')
  <script type="text/javascript">

  $(function() {
     first('#first');
     sectionSize('.section--full');
     squareItem('.blog-grid__single');
     if (windowWidth >= 768) {
       squareItem('.section-grid__single');
     };
     $('.section-grid__single').click(function(event) {
       /* Act on the event */
       var anchor = $(this).find('a').attr('href');
       window.location = anchor;
     });
  });

  $(window).load(function() {
    /* Act on the event */
    backgroundCover('.section--home');
    centerAbsolute('.infinity__single--refine');
  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){
        windowWidth = $(window).width();
        if (windowWidth >= 768) {
          squareItem('.section-grid__single');
        };
        first('#first');
        sectionSize('.section--full');
        backgroundCover('.section--home');
        squareItem('.blog-grid__single');
        centerAbsolute('.infinity__single--refine');
      }, 300);
  });
  </script>
@stop
