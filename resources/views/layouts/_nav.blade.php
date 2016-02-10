<nav class="overlay-menu">
  <div class="overlay-menu__header">
    <a class="overlay-menu__logo" href="{{ url('/') }}">
      <img src="{{ url('assets/img/logos/logo_header.png') }}" class="img-responsive">
    </a>
    <div class="overlay-menu__btns">
      <div class="overlay-menu__btns--lang hidden-xs">
        <a href="{{{ Request::url().'/es' }}}">Es</a> / <a href="{{{ Request::url().'/en' }}}">En</a>
      </div>
      <a class="overlay-menu__toggle js-overlay-menu__toggle">
        <div class="overlay-menu__lines"></div>
      </a>
    </div>
  </div>

  <div class="overlay-menu__items">
    <ul class="overlay-menu__list">
      <li class="overlay-menu__list__item">
        <a href="{{ route('home') }}">{{ trans('global.nav.home') }}</a>
      </li>
      <li class="overlay-menu__list__item">
        <a href="{{ route('about') }}">{{ trans('global.nav.about') }}</a>
      </li>
      <li class="overlay-menu__list__item">
        <a href="{{ route('work') }}">{{ trans('global.nav.work') }}</a>
      </li>
      {{-- <li class="overlay-menu__list__item">
        <a href="{{ url('/') }}">{{ trans('global.nav.portfolio') }}</a>
      </li> --}}
      <li class="overlay-menu__list__item">
        <a href="{{ env('WP_HOME', '') }}">{{ trans('global.nav.blog') }}</a>
      </li>
      <li class="overlay-menu__list__item">
        <a href="{{ route('contact') }}">{{ trans('global.nav.contact') }}</a>
      </li>
      <li class="overlay-menu__list__item">
        <a href="{{ route('careers') }}">{{ trans('global.nav.careers') }}</a>
      </li>
      <li class="overlay-menu__list__item js-overlay-menu__toggle">
        <a href="{{ route('work').'#brief' }}">{{ trans('global.nav.brief') }}</a>
      </li>
      <li class="overlay-menu__list__item overlay-menu__list__item--lang visible-xs-block">
        <a href="{{{ Request::url().'/es' }}}">Es</a> / <a href="{{{ Request::url().'/en' }}}">En</a>
      </li>
    </ul>
  </div>
</nav>
<div class="floating__btn hidden-xs">
  <a href="{{ route('work').'#brief' }}">Brief Online</a>
</div>
