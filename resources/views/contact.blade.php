@extends('layouts.master')
@section('title', 'Contact')
@section('class', 'contact')

@section('content')

  <div class="section section--semi-full section--header-contact section--header">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1307057359054!2d-99.18234858509376!3d19.406757786899092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff67ed6a397d%3A0xf287534845af582c!2sTamaulipas+150%2C+Hip%C3%B3dromo+Condesa%2C+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1sen!2smx!4v1454523382551" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="section container section__contact">
    {{-- <div class="section__contact__nav">
      <a href=""><i class="fa fa-times fa-lg"></i></a>
    </div> --}}
    <div class="row">
      <div class="col-sm-9 section__contact__form section__contact--open">
        <div class="section__contact--full">
          <h4>{{ trans('global.work.contact.contact01') }}</h4>
          <div id="response" class="alert" role="alert" style="display: none;"></div>
          <form method="POST" action="{{ url('/send-contact') }}" id="contactForm" class="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
              <div class="col-sm-6">
                <span class="input input--hoshi @if($errors->has('name')) has-error @endif">
                  <input class="input__field input__field--hoshi" type="text" id="name" name="name" value="{{ old('name') }}" />
                  <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="name">
                    <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.contact.contact02') }}</span>
                  </label>
                </span>
              </div>
              <div class="col-sm-6">
                <span class="input input--hoshi @if($errors->has('email')) has-error @endif">
                  <input class="input__field input__field--hoshi" type="email" id="email" name="email" value="{{ old('email') }}" />
                  <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="email">
                    <span class="input__label-content input__label-content--hoshi">Email</span>
                  </label>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <span class="input input--hoshi @if($errors->has('message')) has-error @endif">
                  <textarea class="input__field input__field--hoshi js-auto-size" id="message" name="message">
                    {{ old('message') }}
                  </textarea>
                  <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="message">
                    <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.contact.contact03') }}</span>
                  </label>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <button type="submit" class="btn btn-block btn-neumans btn-neumans--small">{{ trans('global.work.contact.contact04') }}</button>
              </div>
            </div>
          </form>
        </div>
        <div class="section__contact--partial hidden-xs">
          <h4>{!! trans('global.work.contact.contact05') !!}</h4>
          <i class="fa fa-envelope fa-3x"></i>
          <a class="js-resize">{{ trans('global.work.contact.contact06') }}</a>
        </div>
      </div>
      <div class="col-sm-3 section__contact__info">
        <div class="section__contact--partial hidden-xs">
          <h4>{{ trans('global.work.contact.contact07') }}</h4>
          <i class="fa fa-info-circle fa-3x"></i>
          <a class="js-resize">{{ trans('global.work.contact.contact08') }}</a>
        </div>
        <div class="section__contact--full">
          <h4>{{ trans('global.work.contact.contact09') }}</h4>
          <div class="row">
            <div class="col-sm-5 col-lg-4 hidden-xs">
              <h5>{{ trans('global.work.contact.contact10') }}</h5>
              <a href="tel:52939800">5293 9800</a>
            </div>
            <div class="col-sm-7 col-lg-8">
              <h5>{{ trans('global.work.contact.contact11') }}</h5>
              <address>
                Tamaulipas 150, <br/>
                Hipódromo Condesa, Cuauhtémoc, 06140 <br/>
                Ciudad de México, D.F.
              </address>
            </div>
          </div>
          <div class="row hidden-xs">
            <div class="col-xs-12">
              <h5>{{ trans('global.work.contact.contact12') }}</h5>
              <a href="mailto:hello@theneumans.agency">hello@theneumans.agency</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop

@section('js')
  <script src="{{ url('assets/js/classie.js') }}"></script>
  <script type="text/javascript">

  $(function() {
     inputAnimation();
     semiFull85('.section--semi-full');
     $('.js-resize').click(function(event) {
      $('.section__contact__form').toggleClass('section__contact--open').toggleClass('col-sm-3').toggleClass('col-sm-9');
      $('.section__contact__info').toggleClass('section__contact--open').toggleClass('col-sm-3').toggleClass('col-sm-9');
     });

  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){
        semiFull('.section--semi-full');
      }, 300);
  });
  </script>
@stop
