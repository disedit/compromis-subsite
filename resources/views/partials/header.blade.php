<nav class="top-nav">
  <a class="top-nav__parent-site" href="//compromis.net">
    <img src="//compromis.net/wp-content/themes/Compromis/images/logo-compromis-retina.png" alt="Compromís" />
  </a>
  <a class="top-nav__site" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
</nav>

<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
