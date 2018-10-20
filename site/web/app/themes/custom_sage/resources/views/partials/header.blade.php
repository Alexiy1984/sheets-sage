<header class="banner">
  <div class="container d-flex">
    <a class="brand" href="{{ home_url('/') }}">
      <svg width="100%" height="100%" viewbox="0 0 240 240">
        <g class="g-circles"  fill="none"
           stroke-width="120"
           stroke-dasharray="10% 30%"
           transform="translate(24 24) scale(.8)">
           <circle r="60" cx="120" cy="120"
              stroke="#28a745"
              />
          <circle r="60" cx="120" cy="120"
               stroke="#dc3545" 
               stroke-dashoffset="10%"
               />
          <circle r="60" cx="120" cy="120"
               stroke="#ffc107" 
               stroke-dashoffset="20%"
               />
          <circle r="60" cx="120" cy="120"
               stroke="#17a2b8" 
               stroke-dashoffset="30%"
               />
        </g> 
      </svg>
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav header-nav']) !!}
      @endif
    </nav>
  </div>
</header>
