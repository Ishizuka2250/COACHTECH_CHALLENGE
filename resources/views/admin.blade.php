@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('page-title', 'Admin')

@section('page-header')
  <h1 class="header">管理システム</h1>
@endsection

@section('contents')
<form class="input-form" action="/admin" method="post">
  @csrf
  <div class="outer-input-box">
    <div class="inner-input-box">
      <div class="box1">
        <p class="input-title">お名前</p>
        <input class="input-text" type="text" name="name">
        <p class="input-name">性別</p>
        <input class="input-radio" type="radio" name="sex" id="all" value="0">
        <label class="input-radio-label" for="all">全て</label>
        <input class="input-radio" type="radio" name="sex" id="man" value="1">
        <label class="input-radio-label" for="man">男性</label>
        <input class="input-radio" type="radio" name="sex" id="woman" value="2">
        <label class="input-radio-label" for="woman">女性</label>
      </div>
      <div class="box2">
        <p class="input-title">登録日</p>
        <input class="input-text" type="text">
        <p class="to">～</p>
        <input class="input-text" type="text">
      </div>
      <div class="box3">
        <p class="input-title">メールアドレス</p>
        <input class="input-text" type="text">
      </div>
    </div>
    <div class="button-box">
      <input class="button" type="submit" value="検索">
      <a class="reset-link" href="/admin">リセット</a>
    </div>
  </div>
</form>
<form class="delete-form">
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
    </tr>
    <tr>
      <td>1</td>
      <td>山田太郎</td>
      <td>男性</td>
      <td>test@example.com</td>
      <td>サンプルテキスト。サンプルテキスト。サンプルテキス...</td>
      <td><input class="delete-button" type="submit" value="削除"></td>
    </tr>
  </table>
</form>
@endsection