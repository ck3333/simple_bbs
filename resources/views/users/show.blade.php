@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ユーザー情報')

@section('content')


@if (Auth::check())

  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <div class="user">
    <figure class="user-pic">
      @if ($user->picture != 'default.jpg')
        <img src="/storage/user_image/{{ $user->id }}.jpg" alt="ユーザー画像">
      @else
        <img src="/storage/user_image/default.jpg" alt="デフォルト画像">
      @endif
    </figure>
    <p class="user-name">ユーザー名: {{ $user->name }}</p>
    <p class="user-email">メールアドレス: {{ $user->email }}</p>
    @if ( Auth::id() == $user->id )
      <a class="user-edit" href="/users/{{ $user->id }}/edit">編集する</a>
    @endif
  </div>

@else
  <p>会員登録してください</p>
@endif


@endsection

@include('layouts.footer')