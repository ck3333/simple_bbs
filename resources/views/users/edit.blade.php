@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ユーザー情報')

@section('content')


@if (Auth::check())

  <div class="user">
    {!! Form::open(["url"=>"/users/{$user->id}/update", 'method'=>'post', 'files'=>true]) !!}
      <dl class="form-dl">
        <dt class="form-dt">ユーザー名:</dt>
        <dd class="form-dd">{!! Form::text('name', $user->name) !!}</dd>
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('name') }}</p>
        @endif

        <dt class="form-dt">メールアドレス:</dt>
        <dd class="form-dd">{!! Form::text('email', $user->email) !!}</dd>
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('email') }}</p>
        @endif

        <dt class="form-dt">パスワード</dt>
        <dd class="form-dd">{!! Form::password('password') !!}</dd>
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('password') }}</p>
        @endif

        <dt class="form-dt">プロフィール画像を設定:</dt>
        <dd class="form-dd">
            {!! Form::file('picture') !!}
        </dd>
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('picture') }}</p>
        @endif

        {!! Form::hidden('id', $user->id) !!}
        <div class="form-btn">{!! Form::submit('編集内容を反映する') !!}</div>
    {!! Form::close() !!}
  </div>

@else
  <p>会員登録してください</p>
@endif


@endsection

@include('layouts.footer')