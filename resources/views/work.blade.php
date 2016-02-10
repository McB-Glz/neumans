@extends('layouts.master')
@section('title', 'Work')
@section('class', 'work')

@section('content')

  <div class="section section--table section--full section--header section--header-work">
    <div class="section__overlay"></div>
    <div class="section__content">
      <div class="row section__content--text section__heading">
        <div class="col-xs-12">
          <h2>{!! trans('global.home.home01') !!}</h2>
        </div>
      </div>
      <div class="row section__content--animated">
        <div class="col-sm-10 col-sm-offset-1">
          <p class="section__content--txt-big">{!! trans('global.home.home02') !!}</p>
        </div>
      </div>
    </div>
    <div class="section--header-down-arrow smooth">
      <a href="#first"><img src="{{ url('assets/img/arrow-back.png') }}" class="js-img-hover"></a>
    </div>
  </div>

  <div class="section container-fluid section--infinity section--white full-row" id="first">
    <div class="row">
      <div class="col-xs-12">
         @include('partials._infinity')
      </div>
    </div>
  </div>

  <div class="section container-fluid section--white">
    <div class="section__heading section__heading--big">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="">{{ trans('global.work.work100') }}</h2>
        </div>
      </div>
    </div>
    <div class="section__content">
      <div class="row section-grid">
        <div class="col-sm-4 section-grid--works section-grid__single section-grid__single--bg-hover section-grid__single--odd behaviors">
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#behavioral-design' }}">{{ trans('global.work.work11') }}</a></h3>
            <p class="section-grid__single__text">{{ trans('global.work.work113') }}</p>
          </div>
        </div>
        <div class="col-sm-4 section-grid--works section-grid__single section-grid__single--bg-hover change">
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#strategic-change' }}">{{ trans('global.work.work12') }}</a></h3>
            <p class="section-grid__single__text">{{ trans('global.work.work114') }}</p>
          </div>
        </div>
        <div class="col-sm-4 section-grid--works section-grid__single section-grid__single--bg-hover section-grid__single--odd org">
          <div class="section-grid__content">
            <h3 class="section-grid__single__title"><a href="{{ route('services').'#organizational-innovation' }}">{{ trans('global.work.work13') }}</a></h3>
            <p class="section-grid__single__text">{{ trans('global.work.work115') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section container-fluid section--white">
    <div class="section__heading">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.work14') }}</h2>
        </div>
      </div>
    </div>
    <div class="section__content">
      <div class="row section-grid section-grid--pillars">
        <div class="col-sm-6 section-grid--works section-grid__single section-grid__single--empathy">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title">{{ trans('global.work.work15') }}</h3>
            <p class="section-grid__single__text">{{ trans('global.work.work16') }}</p>
          </div>
        </div>
        <div class="col-sm-6 section-grid--works section-grid__single section-grid__single--iteration">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title">{{ trans('global.work.work17') }}</h3>
            <p class="section-grid__single__text">{{ trans('global.work.work18') }}</p>
          </div>
        </div>
      </div>
      <div class="row section-grid section-grid--pillars">
        <div class="col-xs-12 section-grid--works section-grid__single section-grid__single--positive">
          <div class="section__overlay"></div>
          <div class="section-grid__content">
            <h3 class="section-grid__single__title">{{ trans('global.work.work19') }}</h3>
            <p class="section-grid__single__text">{{ trans('global.work.work20') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section container-fluid section--white">
    <div class="section__heading section__heading--big">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.work21') }}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--green section--table">
    <div class="section__title">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.work22') }}</h2>
          <p>{{ trans('global.work.work23') }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--table section--white">
    <div class="section__title">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.work24') }}</h2>
          <p>{{ trans('global.work.work25') }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--green section--table">
    <div class="section__title">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.work26') }}</h2>
          <p>{{ trans('global.work.work27') }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section container-fluid section--white" id="brief">
    <div class="section__heading section__heading--big">
      <div class="row">
        <div class="col-xs-12">
          <h2>Brief Online</h2>
          <p>{{ trans('global.work.brief.brief01') }}</p>
        </div>
      </div>
    </div>
    <div class="section__content">
      <div class="row">
        <div class="col-xs-12">
          <form method="POST" action="{{ url('/send-brief') }}" id="briefForm" class="form">
            <div class="panel-group panel--neumans" id="accordion" role="tablist" aria-multiselectable="true">

              <div class="panel"> {{-- Panel --}}
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#questionOne" aria-expanded="false" aria-controls="questionOne"> {{ trans('global.work.brief.brief02') }} <i class="fa fa-angle-down titulo"></i>
                    </a>
                  </h4>
                </div>
                <div id="questionOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <h5>{{ trans('global.work.brief.brief03') }}</h5>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <span class="input input--hoshi @if($errors->has('name')) has-error @endif">
                          <input class="input__field input__field--hoshi" type="text" id="name" name="name" />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="name">
                            <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.brief.brief04') }}*<small class="place">(Gustavo Fring)</small>
                              @if($errors->has('name'))
                              <small class="text-danger brief-error">({{ $errors->first('name') }})</small>
                              @endif
                            </span>
                          </label>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                       <span class="input input--hoshi @if($errors->has('email')) has-error @endif">
                          <input class="input__field input__field--hoshi" type="email" id="email" name="email" />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="email">
                            <span class="input__label-content input__label-content--hoshi">Email* <small class="place">(gus@lospolloshermanos.org)</small>
                            @if($errors->has('email'))
                            <small class="text-danger brief-error">({{ $errors->first('email') }})</small>
                            @endif
                            </span>
                          </label>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                       <span class="input input--hoshi @if($errors->has('company')) has-error @endif">
                          <input class="input__field input__field--hoshi" type="text" id="company" name="company" />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="company">
                            <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.brief.brief05') }}* <small class="place">(Los Pollos Hermanos)</small>
                            @if($errors->has('company'))
                            <small class="text-danger brief-error">({{ $errors->first('company') }})</small>
                            @endif 
                            </span>
                          </label>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                       <span class="input input--hoshi @if($errors->has('title')) has-error @endif">
                          <input class="input__field input__field--hoshi" type="text" id="title" name="title" />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="title">
                            <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.brief.brief06') }} <small>(CEO)</small></span>
                          </label>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                       <span class="input input--hoshi @if($errors->has('location')) has-error @endif">
                          <input class="input__field input__field--hoshi" type="text" id="location" name="location" />
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="location">
                            <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.brief.brief07') }} <small>(Albuquerque, New Mexico)</small></span>
                          </label>
                        </span>
                      </div>
                    </div>


                  </div>
                </div>
              </div> {{-- Panel End --}}

              <div class="panel"> {{-- Panel --}}
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                      {{ trans('global.work.brief.brief08') }} <i class="fa fa-angle-down titulo"></i>
                    </a>
                  </h4>
                </div>
                <div id="questionTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <h5>{{ trans('global.work.brief.brief09') }}</h5>

                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                       <span class="input input--hoshi @if($errors->has('describe')) has-error @endif">
                          <textarea class="input__field input__field--hoshi js-auto-size" id="describe" name="describe"></textarea>
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="describe">
                            <span class="input__label-content input__label-content--hoshi">{!! trans('global.work.brief.brief10') !!}</span>
                          </label>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">

                        <div class="form-group @if($errors->has('dimension')) has-error @endif">
                          <select name="dimension" id="dimension" class="form-control">
                            <option value="">{{ trans('global.work.brief.brief11') }}</option>
                            <option value="1-50 {{ trans('global.work.brief.brief12') }}">1-50 {{ trans('global.work.brief.brief12') }}</option>
                            <option value="51-500 {{ trans('global.work.brief.brief12') }}">51-500 {{ trans('global.work.brief.brief12') }}</option>
                            <option value="501-5000 {{ trans('global.work.brief.brief12') }}">501-5000 {{ trans('global.work.brief.brief12') }}</option>
                            <option value="5001-50000 {{ trans('global.work.brief.brief12') }}">5001-50000 {{ trans('global.work.brief.brief12') }}</option>
                            <option value="{{ trans('global.work.brief.brief13') }} 50000 {{ trans('global.work.brief.brief12') }}">{{ trans('global.work.brief.brief13') }} 50000 {{ trans('global.work.brief.brief12') }}</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div> {{-- Panel End --}}

              <div class="panel"> {{-- Panel --}}
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#questionThree" aria-expanded="false" aria-controls="questionThree">
                      {{ trans('global.work.brief.brief14') }} <i class="fa fa-angle-down titulo"></i>
                    </a>
                  </h4>
                </div>
                <div id="questionThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <h5>{{ trans('global.work.brief.brief15') }}</h5>

                    <div class="row">
                      <div class="col-sm-3 col-sm-offset-1">
                        <p class="form__heading">{{ trans('global.work.brief.brief16') }}</p>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="innovate[]" value="Storytelling"> Storytelling
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="innovate[]" value="Gameification"> Gameification
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="innovate[]" value="Culture"> {{ trans('global.work.brief.brief17') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="innovate[]" value="Experiences"> {{ trans('global.work.brief.brief18') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="innovate[]" value="Foresight"> Foresight
                         </label>
                        </div>
                      </div>
                      <div class="col-sm-3 col-sm-offset-1">
                        <p class="form__heading">{{ trans('global.work.brief.brief19') }}</p>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="design[]" value="Attitudes"> {{ trans('global.work.brief.brief20') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="design[]" value="Capabilities"> {{ trans('global.work.brief.brief21') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="design[]" value="Individuals"> {{ trans('global.work.brief.brief22') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="design[]" value="Teams"> {{ trans('global.work.brief.brief23') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="design[]" value="Systems"> {{ trans('global.work.brief.brief24') }}
                         </label>
                        </div>
                      </div>
                      <div class="col-sm-3 col-sm-offset-1">
                        <p class="form__heading">{{ trans('global.work.brief.brief25') }}</p>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="change[]" value="People"> {{ trans('global.work.brief.brief26') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="change[]" value="Space"> {{ trans('global.work.brief.brief27') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="change[]" value="Tech"> {{ trans('global.work.brief.brief28') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="change[]" value="Structure"> {{ trans('global.work.brief.brief29') }}
                         </label>
                        </div>
                        <div class="checkbox">
                         <label>
                           <input type="checkbox" name="change[]" value="Brand"> {{ trans('global.work.brief.brief30') }}
                         </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                       <span class="input input--hoshi @if($errors->has('detail')) has-error @endif">
                          <textarea class="input__field input__field--hoshi js-auto-size" id="detail" name="detail"></textarea>
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="detail">
                            <span class="input__label-content input__label-content--hoshi">{!! trans('global.work.brief.brief31') !!}</span>
                          </label>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
              </div> {{-- Panel End --}}

              <div class="panel"> {{-- Panel --}}
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#questionFour" aria-expanded="false" aria-controls="questionFour">
                      {{ trans('global.work.brief.brief32') }} <i class="fa fa-angle-down titulo"></i>
                    </a>
                  </h4>
                </div>
                <div id="questionFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <h5>{{ trans('global.work.brief.brief33') }}</h5>

                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group @if($errors->has('budget')) has-error @endif">
                          <input id="budget" data-slider-id='budget' type="text" data-slider-min="0" data-slider-max="3000000" data-slider-step="10000" data-slider-value="[200000,1000000]" data-slider-handle="custom" name="budget" class="form-control" />
                          <p><span class="pull-left">$0</span><span class="pull-right">$3,000,000</span></p>
                        </div>
                      </div>
                    </div>

                    <h5>{{ trans('global.work.brief.brief34') }}</h5>

                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group">
                            <div class="@if($errors->has('date')) has-error @endif">
                                <input type='text' class="form-control" id='datetimepicker1' placeholder="{{ trans('global.work.brief.brief38') }}" name="date">
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div> {{-- Panel End --}}

              <div class="panel"> {{-- Panel --}}
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#questionFive" aria-expanded="false" aria-controls="questionFive">
                      {{ trans('global.work.brief.brief35') }} <i class="fa fa-angle-down titulo"></i>
                    </a>
                  </h4>
                </div>
                <div id="questionFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                       <span class="input input--hoshi @if($errors->has('references')) has-error @endif">
                          <textarea class="input__field input__field--hoshi js-auto-size" id="references" name="references"></textarea>
                          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="references">
                            <span class="input__label-content input__label-content--hoshi">{!! trans('global.work.brief.brief36') !!}</span>
                          </label>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
              </div> {{-- Panel End --}}

            </div>
            <div class="row">
              <div class="col-xs-12">
                <button type="submit" class="btn btn-block btn-neumans">{{ trans('global.work.brief.brief37') }}</button>
                <div id="response" class="alert" role="alert" style="display: none;"></div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="section container-fluid section--space">
  </div>

@stop

@section('js')
  <script src="{{ url('assets/js/classie.js') }}"></script>
  <script type="text/javascript">

  $(function() {

     if ( document.location.href.indexOf('#brief') > -1 ) {
       timeOut = setTimeout(function(){
         $('html, body').animate({
             scrollTop: $("#brief").offset().top
         }, 1000);
       }, 500);
     }

     first('#first');
     sectionSize('.section--full');
     backgroundCover('.section--header');
     backgroundCover('.section-grid--pillars .section-grid__single');
     $('#datetimepicker1').datetimepicker({
      format: 'DD/MM/YYYY'
     });
     $('.section-grid__single').click(function(event) {
       /* Act on the event */
       var anchor = $(this).find('a').attr('href');
       window.location = anchor;
     });
     $('.section-anchor').hover(function() {
       /* Stuff to do when the mouse enters the element */
       $('.section__content--animated').css({
         height: 'auto'
       });
     }, function() {
       /* Stuff to do when the mouse leaves the element */
     });
     $('.section__content--text').hover(function() {
       /* Stuff to do when the mouse enters the element */
     }, function() {
       /* Stuff to do when the mouse leaves the element */
       $('.section__content--animated').css({
         height: 0
       });
     });
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
     centerAbsolute('.infinity__single--refine');

     inputAnimation();

     //*** Selectize
     //$('.selectize').selectize();
     //Slider
     $("#budget").slider({
       tooltip: 'always'
     });


  });

  $(window).load(function() {
    /* Act on the event */
    if (windowWidth >= 768) {
      squareItem('.section-grid__single');
    };
    centerAbsolute('.infinity__single--refine');

    if($('.brief-error').length > 0) {
      $('.place').css('display', 'none');
      $('#questionOne').collapse('show');
      timeOut = setTimeout(function(){
        $('html, body').animate({
            scrollTop: $("#brief").offset().top
        }, 1000);
      }, 500);
    }
  });

  $(window).resize(function(){
      clearTimeout(timeOut);
      timeOut = setTimeout(function(){
        sectionSize('.section--full');
        semiFull('.section--semi-full');
        backgroundCover('.section--header');
        if (windowWidth >= 768) {
          squareItem('.section-grid__single');
        };
        backgroundCover('.section-grid--pillars .section-grid__single');
        centerAbsolute('.infinity__single--refine');
      }, 300);
  });
  </script>
@stop
