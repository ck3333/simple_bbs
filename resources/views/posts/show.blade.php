@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', 'ひとこと掲示板')

@section('content')

  @if ($post)
    <div class="post _show">
      {{-- <img src="member_picture/" wudtg="48" height="48" alt=""> --}}
      <p class="post-name">＠{{ $post->user->name }}</p>
      <p class="post-msg">
        {{ $post->message }}
        [<a class="post-re" href="index.php?res={{ $post->id }}">Re</a>]
      </p>
      <p class="post-day">{{ $post->created_at }}</p>
    </div>
  @else
    <p>その投稿は削除されたか、URLが間違えています</p>
  @endif

@endsection

@include('layouts.footer')