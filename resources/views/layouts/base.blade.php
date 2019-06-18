</head>
<!DOCTYPE html>
<html lang="ja">
<head>
  @yield('head')
</head>

<body>

@yield('header')

<main class="main" id="wrap">

  <div class="head" id="head">
    <div class="head-inner">
      <h1 class="head-tit">@yield('title')</h1>
    </div>
  </div>

  <section class="content" id="content">
    <div class="content-inner">
      @yield('content')
    </div>
  </section>

</main>

@yield('footer')

</body>
</html>