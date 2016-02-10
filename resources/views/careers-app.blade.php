@extends('layouts.master')
@section('title', 'Careers')
@section('class', 'careers')

@section('content')

  <div class="section container-fluid section--careers-app">
    <div class="section__heading">
      <div class="row">
        <div class="col-xs-12">
          <h2>{{ trans('global.work.cars.cars15') }}</h2>
        </div>
      </div>
    </div>
    <div class="section__content">
      <div class="row">
        <div class="col-xs-12">
          <p>{{ trans('global.work.cars.cars16') }}</p>
        </div>
      </div>
      <form method="POST" action="{{ url('/send-app') }}" id="appForm" class="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="opening" value="{{ Request::get('opening') }}">
        <div class="row">
          <div class="col-sm-6">
            <span class="input input--hoshi @if($errors->has('name')) has-error @endif">
              <input class="input__field input__field--hoshi" type="text" id="name" name="name" />
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="name">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars17') }}</span>
              </label>
            </span>
          </div>
          <div class="col-sm-6">
            <span class="input input--hoshi @if($errors->has('lastName')) has-error @endif">
              <input class="input__field input__field--hoshi" type="text" id="lastName" name="lastName" />
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="lastName">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars18') }}</span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <span class="input input--hoshi @if($errors->has('email')) has-error @endif">
              <input class="input__field input__field--hoshi" type="email" id="email" name="email" />
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="email">
                <span class="input__label-content input__label-content--hoshi">Email</span>
              </label>
            </span>
          </div>
          <div class="col-sm-6">
            <span class="input input--hoshi @if($errors->has('tel')) has-error @endif">
              <input class="input__field input__field--hoshi" type="tel" id="tel" name="tel" />
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="tel">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars19') }}</span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group @if($errors->has('exp')) has-error @endif">
              <select class="form-control form__padding" id="exp" name="exp">
                <option value="">{{ trans('global.work.cars.cars20') }}</option>
                <option value="{{ trans('global.work.cars.cars25') }}">{{ trans('global.work.cars.cars25') }}</option>
                <option value="{{ trans('global.work.cars.cars26') }}">{{ trans('global.work.cars.cars26') }}</option>
                <option value="{{ trans('global.work.cars.cars27') }}">{{ trans('global.work.cars.cars27') }}</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <span class="input input--hoshi @if($errors->has('education')) has-error @endif">
              <input class="input__field input__field--hoshi" type="text" id="education" name="education" />
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="education">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars21') }}</span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <span class="input input--hoshi @if($errors->has('something')) has-error @endif">
              <textarea class="input__field input__field--hoshi js-auto-size" id="something" name="something" ></textarea>
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="something">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars22') }}</span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <span class="input input--hoshi @if($errors->has('links')) has-error @endif">
              <textarea class="input__field input__field--hoshi js-auto-size" id="links" name="links" ></textarea>
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="links">
                <span class="input__label-content input__label-content--hoshi">{{ trans('global.work.cars.cars23') }} ...</span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-block btn-neumans">{{ trans('global.work.cars.cars24') }}</button>
            <div id="response" class="alert" role="alert" style="display: none;"></div>
          </div>
        </div>
      </form>
    </div>
  </div>

@stop


@section('js')
  <script src="{{ url('assets/js/classie.js') }}"></script>
  <script type="text/javascript">

  $(function() {
     inputAnimation();
  });
  </script>
@stop
