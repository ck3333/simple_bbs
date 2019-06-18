@section('header')

<header class="header">
  <div class="header-inner">
    <ul class="header-list">
      <li class="header-item">
        <a href="/posts">投稿一覧</a>
      </li>
      @if (Auth::check())
        <li class="header-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
          </form>
        </li>
        <li class="header-item">
          <a href="/users/{{ Auth::id() }}">ユーザー情報</a>
        </li>
      @else
        <li class="header-item">
          <a href="{{ route('register') }}">新規登録</a>
        </li>
        <li class="header-item">
          <a href="{{ route('login') }}">ログイン</a>
        </li>
      @endif
    </ul>
  </div>
</header>

@endsection