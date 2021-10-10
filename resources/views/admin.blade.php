@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('page-title', 'Admin')

@section('page-header')
  <h1 class="header">管理システム</h1>
@endsection

@section('contents')
<form class="input-form" action="/admin" method="GET">
  @csrf
  <div class="outer-input-box">
    <div class="inner-input-box">
      <div class="box1">
        <p class="input-title">お名前</p>
        <input class="input-text" type="text" name="fullname" value="{{$fullname}}">
        <p class="input-name">性別</p>
        @if ($gender == 1)
          <input class="input-radio" type="radio" name="gender" id="all" value="0">
          <label class="input-radio-label" for="all">全て</label>
          <input class="input-radio" type="radio" name="gender" id="man" value="1" checked="checked">
          <label class="input-radio-label" for="man">男性</label>
          <input class="input-radio" type="radio" name="gender" id="woman" value="2">
          <label class="input-radio-label" for="woman">女性</label>
        @elseif ($gender == 2)
          <input class="input-radio" type="radio" name="gender" id="all" value="0">
          <label class="input-radio-label" for="all">全て</label>
          <input class="input-radio" type="radio" name="gender" id="man" value="1">
          <label class="input-radio-label" for="man">男性</label>
          <input class="input-radio" type="radio" name="gender" id="woman" value="2" checked="checked">
          <label class="input-radio-label" for="woman">女性</label>
        @else
          <input class="input-radio" type="radio" name="gender" id="all" value="0" checked="checked">
          <label class="input-radio-label" for="all">全て</label>
          <input class="input-radio" type="radio" name="gender" id="man" value="1">
          <label class="input-radio-label" for="man">男性</label>
          <input class="input-radio" type="radio" name="gender" id="woman" value="2">
          <label class="input-radio-label" for="woman">女性</label>
        @endif
      </div>
      <div class="box2">
        <p class="input-title">登録日</p>
        <input class="input-text" name="createfrom" type="date" value="{{$createfrom}}">
        <p class="to">～</p>
        <input class="input-text" name="createto" type="date" value="{{$createto}}">
      </div>
      <div class="box3">
        <p class="input-title">メールアドレス</p>
        <input class="input-text" name="email" type="text" value="{{$email}}">
      </div>
    </div>
    <div class="button-box">
      <input class="button" type="submit" value="検索">
      <a class="reset-link" href="/admin">リセット</a>
    </div>
  </div>
</form>
<table>
  <tr>
    <th class="id">ID</th>
    <th class="name">お名前</th>
    <th class="gender">性別</th>
    <th class="email">メールアドレス</th>
    <th class="opinion">ご意見</th>
    <th class="delete"></th>
  </tr>
  @foreach ($items as $item)
    <form class="delete-form" action="/delete?id={{$item->id}}&fullname={{$fullname}}&gender={{$gender}}&createfrom={{$createfrom}}&createto={{$createto}}&email={{$email}}" method="POST">
      @csrf
      <tr>
        <td class="id">{{$item->id}}</td>
        <td class="name">{{$item->fullname}}</td>
        @if($item->gender == 1)
          <td class="gender">男性</td>
        @else
          <td class="gender">女性</td>
        @endif
        <td class="email">{{$item->email}}</td>
        <td class="opinion">{{$item->opinion}}</td>
        <td class="delete"><input class="delete-button" type="submit" value="削除"></td>
      </tr>
    </form>
  @endforeach
</table>
@endsection