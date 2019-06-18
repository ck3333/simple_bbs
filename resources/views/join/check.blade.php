@extends('layouts.app')

@section('title', '会員登録')

@section('content')

  <form action="/join/signup" method="post" enctype="multipart/form-data">
    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd>
          {{ $name }}
      </dd>
      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd>
          {{ $email }}
      </dd>
      <dt>パスワード<span class="required">必須</span></dt>
      <dd>
        ＊表示されません
      </dd>
      <dt>写真など</dt>
      <dd>
      </dd>
    </dl>

      <div>
        <a href="/join?action=rewrite">書き直す</a>|
        <input type="submit" value="登録する">
      </div>
  </form>

@endsection

@section('footer')
  copyright 2019 minibbs.
@endsection