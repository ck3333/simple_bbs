@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ログイン')

@section('content')

    <div class="lead" id="lead">
        <p class="lead-text">メールアドレスとパスワードを記入してログインしてください。</p>
        <p class="lead-text">会員登録がまだの方はこちらから。</p>
        <p class="lead-text">&raquo;<a href="/register">会員登録する</a></p>
    </div>

  {!! Form::open(['url'=>'/login', 'method'=>'post']) !!}
    <dl class="form-dl">
      <dt class="form-dt">メールアドレス<span class="required">必須</span></dt>
      <dd class="form-dd">{!! Form::text('email') !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('email') }}</p>
      @endif

      <dt class="form-dt">パスワード<span class="required">必須</span></dt>
      <dd class="form-dd">{!! Form::password('password') !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('password') }}</p>
      @endif

      <div class="form-btn">{!! Form::submit('ログイン') !!}</div>
    </dl>
  {!! Form::close() !!}


@endsection

@include('layouts.footer')


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
