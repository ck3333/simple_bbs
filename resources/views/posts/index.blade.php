@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ひとこと掲示板')

@section('content')


@if (session('delete'))
  <div class="alert alert-success">
      {{ session('delete') }}
  </div>
@endif

@if (Auth::check())
  {!! Form::open(['url'=>'/posts/create', 'method'=>'post', 'class'=>'form']) !!}
      <dl class="form-dl">
      <dt class="form-dt">＠{{ $user->name }}さん、メッセージをどうぞ</dt>
        <dd class="form-dd">
          {!! Form::textarea('message', null, ['rows' => 6]) !!}
          {!! Form::hidden('member_id', $user->id) !!}
          @if (count($errors) > 0)
          <p style="color:red;">{{ $errors->first('message') }}</p>
          @endif
        </dd>
      </dl>
      <div class="form-btn">{!! Form::submit('つぶやく') !!}</div>
  {!! Form::close() !!}
@else
  {{-- ログインしてない場合 --}}
@endif

<div class="posts">
  @foreach ($posts as $post)
  <?php //ここにこの書き方のはあまり良くない…
  $reply_post = $post->find($post->reply_post_id)
  ?>
    <div class="post">
      <figure class="post-pic">
        @if ($post->user->picture != 'default.jpg')
          <img src="/storage/user_image/{{ $post->user['id'] }}.jpg" alt="ユーザー画像">
        @else
          <img src="/storage/user_image/default.jpg" alt="デフォルト画像">
        @endif
      </figure>
      <div class="post-body">
        @if ( $post->reply_post_id > 0 )
          <a class="post-reply" href="/posts/{{ $post->reply_post_id }}">返信元: ＠{{ $reply_post->user['name'] }} {{ $reply_post->message }}</a>
          <hr class="post-hr">
        @endif
        <p class="post-name"><a href="/users/{{ $post->user->id }}">＠{{ $post->user['name'] }}</a></p>
        <p class="post-msg">
          <a href="/posts/{{ $post->id }}">{{$post->message}}</a>
          [<a class="post-re" href="/posts/res/{{ $post->id }}">Re</a>]
        </p>
        <p class="post-day">
          {{ $post->created_at }}
          @if (Auth::check())
            @if ( $user->id == $post->member_id )
              [<a class="post-delete" href="/posts/delete/{{ $post->id }}">削除</a>]
            @endif
          @endif
        </p>
      </div>
    </div>
  @endforeach
</div>

{{-- <ul class="paging">
</ul> --}}
{{ $posts->links() }}


@endsection

@include('layouts.footer')