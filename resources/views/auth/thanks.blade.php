@extends('layouts.base')

@include('layouts.head')

@include('layouts.header')

@section('title', '会員登録')

@section('content')

  <p>ユーザー登録を完了しました</p>
  <p><a href="/login">ログインする</a></p>

@endsection

@include('layouts.footer')
