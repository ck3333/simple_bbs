@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ひとこと掲示板')

@section('content')


@if (Auth::check())
  <p class="post-reply _res">返信元: ＠{{ $post->user['name'] }} {{ $post->message }}</p>

  {!! Form::open(['url'=>'/posts/res/create', 'method'=>'post','class'=>'form']) !!}
      <dl class="form-dl">
      <dt class="form-dt">{{ $user->name }}さん、返信メッセージをどうぞ</dt>
        <dd class="form-dd">
          {!! Form::textarea('message', null, ['rows'=>6]) !!}
          {!! Form::hidden('member_id', $user->id) !!}
          {!! Form::hidden('reply_post_id', $id) !!}
          @if (count($errors) > 0)
          <p style="color:red;">{{ $errors->first('message') }}</p>
          @endif
        </dd>
      </dl>
      <div class="form-btn">{!! Form::submit('返信する') !!}</div>
  {!! Form::close() !!}
@else
  {{--  --}}
@endif


@endsection

@include('layouts.footer')