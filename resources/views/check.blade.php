@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/check.css')}}">
@endsection

@section('page-title', 'Check')

@section('page-header')
  <h1 class="header">内容確認</h1>
@endsection

@section('contents')
  <form action="/contact/create" method="POST">
    @csrf
    <table>
      <tr>
        <th><p>お名前</p></th>
        <td>
          <input type="hidden" name="fullname" value="{{$fullname}}">
          <div class="check-content-inner">
            <p>{{$fullname}}</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>性別</p></th>
        <td>
          <input type="hidden" name="gender" value="{{$gender}}">
          <div class="check-content-inner">
            @if ($gender = 1)
              <p>男性</p>
            @elseif ($gender = 2)
              <p>女性</p>
            @endif
          </div>
        </td>
      </tr>
      <tr>
        <th><p>メールアドレス</p></th>
        <td>
          <input type="hidden" name="email" value="{{$email}}">
          <div class="check-content-inner">
            <p>{{$email}}</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>郵便番号</p></th>
        <td>
          <input type="hidden" name="postcode" value="{{$postcode}}">
          <div class="check-content-inner">
            <p>{{$postcode}}</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>住所</p></th>
        <td>
          <input type="hidden" name="address" value="{{$address}}">
          <div class="check-content-inner">
            <p>{{$address}}</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>建物名</p></th>
        <td>
          <input type="hidden" name="building_name" value="{{$building_name}}">
          <div class="check-content-inner">
            <p>{{$building_name}}</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>ご意見</p></th>
        <td>
          <input type="hidden" name="opinion" value="{{$opinion}}">
          <div class="check-content-inner">
            <p>{{$opinion}}</p>
          </div>
        </td>
      </tr>
    </table>
    <input class="button" type="submit" value="送信">
  </form>
  <a class="fix-link" href="/contact?fix=1&fullname={{$fullname}}&gender={{$gender}}&email={{$email}}&postcode={{$postcode}}&address={{$address}}&building_name={{$building_name}}&opinion={{$opinion}}">修正する</a>
@endsection
