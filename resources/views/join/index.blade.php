@extends('layouts.app')

@section('title', '会員登録')

@section('content')

  {{-- <form action="/join/signup" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="name" value="{{ old('name') }}">
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('name') }}</p>
        @endif
      </dd>

      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="email" value="{{ old('email') }}">
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('email') }}</p>
        @endif
      </dd>

      <dt>パスワード<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="password" value="">
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('password') }}</p>
        @endif
      </dd>

      <dt>写真など</dt>
      <dd>
        <input type="file" name="picture">
        @if (count($errors) > 0)
        <p style="color:red;">{{ $errors->first('password') }}</p>
        <p style="color:red;">画像を再設定してください</p>
        @endif
      </dd>
    </dl>

      <div><input type="submit" value="登録する"></div>
  </form> --}}


  {{-- laravelcollective ヘルパ関数で書き換え --}}
  {!! Form::open(['url'=>'/join/signup', 'method'=>'post', 'files'=>true]) !!}
    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd>{!! Form::text('name', null, ['class'=>'form-input']) !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('name') }}</p>
      @endif

      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd>{!! Form::text('email', null, ['class'=>'form-input']) !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('email') }}</p>
      @endif

      <dt>パスワード<span class="required">必須</span></dt>
      <dd>{!! Form::text('password', null, ['class'=>'form-input']) !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('password') }}</p>
      @endif

      <dt>写真など</dt>
      <dd>{!! Form::file('picture', null, ['class'=>'form-input']) !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('picture') }}</p>
      @endif

      <div>{!! Form::submit('登録する') !!}</div>
    </dl>
  {!! Form::close() !!}


@endsection

@section('footer')
  copyright 2019 minibbs.
@endsection