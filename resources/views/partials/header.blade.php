<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>@yield('title')</title>
</head>

<body>
  <div class="main-wrapper">
    <nav class="navbar transition-opacity dropdown-is-hidden 

    @isset($landingPage)
      navbar-landing hidden
    @endisset

    " id="navbar">
      <a class="navbar__logo" href="./">
        <?php echo file_get_contents('../resources/assets/images/svg/logo-black.svg'); ?>
        <div class="logo__word">Rootball</div>

      </a>
      <button class="navbar__toggle" id="navbar-toggle">
        <div class="toggle__lines"></div>
      </button>
      <ul class="navlist" id="nav-list">
        <li class="navlist__li"><a href="./" class="navlist__a">Home</a></li>
        <li class="navlist__li"><a href="./rules" class="navlist__a">Rules</a></li>
        <li class="navlist__li"><a href="./about" class="navlist__a">About</a></li>
        <li class="navlist__li"><a href="./contact-us" class="navlist__a">Contact Us</a></li>
      </ul>
    </nav>