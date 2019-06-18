@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', '会員登録')

@section('content')

  {!! Form::open(['url'=>'/register', 'method'=>'post', 'files'=>true, 'class'=>'form']) !!}
    <dl class="form-dl">
      <dt class="form-dt">ニックネーム<span class="required">必須</span></dt>
      <dd class="form-dd">{!! Form::text('name') !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('name') }}</p>
      @endif

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

      <dt class="form-dt">パスワード確認<span class="required">必須</span></dt>
      <dd class="form-dd">{!! Form::password('password_confirmation') !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('password') }}</p>
      @endif

      {{-- <dt class="form-dt">写真など</dt>
      <dd class="form-dd">{!! Form::file('picture') !!}</dd>
      @if (count($errors) > 0)
      <p style="color:red;">{{ $errors->first('picture') }}</p>
      @endif --}}

      <div class="form-btn">{!! Form::submit('登録する') !!}</div>
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
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
