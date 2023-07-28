<header>
  <div class="logo">
    <a href="{{route('app.home')}}">
    <img src="{{asset('public/images/djt_black.png')}}" alt="Logo">
    </a>
  </div>
  <nav>
    <ul>
      <li><a href="{{route('app.home')}}">{{ __('messages.menu.home') }}</a></li>
      <li><a href="{{route('app.about')}}">{{ __('messages.menu.about') }}</a></li>
      <li><a href="{{route('app.factory')}}">{{ __('messages.menu.factory') }}</a></li>
      <li><a href="{{route('app.career')}}">{{ __('messages.menu.career') }}</a></li>
    </ul>
  </nav>
</header>
