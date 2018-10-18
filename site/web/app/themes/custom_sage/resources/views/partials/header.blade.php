<header class="banner">
  <div class="container d-flex">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/cannabis.png')" alt="logo">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-nav']) !!}
      @endif
    </nav>
  </div>
</header>
