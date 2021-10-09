@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('javascript')
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection

@section('page-title', 'Contacts')

@section('page-header')
  <h1 class="header">お問い合わせ</h1>
@endsection

@section('contents')
  <form action="/check" method="POST" name="contactform">
    @csrf
    <table>
      <tr>
        <th><span class="required">お名前</span></th>
        <td>
          <div class="name content-inner">
            <div class="input-name">
              <input class="input-text" type="text" name="firstname" id="firstname" maxlength="100" value="{{$firstname}}">
              <span class="firstname-error error-message" id="firstname-error"></span>
              <p class="example">例）山田</p>
            </div>
            <div class="input-name">
              <input class="input-text" type="text" name="surname" id="surname" maxlength="100" value="{{$surname}}">
              <span class="surname-error error-message" id="firstname-error"></span>
              <p class="example">例）太郎</p>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">性別</span></th>
        <td>
          <div class="content-inner">
            @if($gender == 1)
              <input class="input-radio" type="radio" name="gender" id="man" checked="checked" value="1">
              <label class="input-radio-label" for="man">男性</label>
              <input class="input-radio" type="radio" name="gender" id="woman" value="2">
              <label class="input-radio-label" for="woman">女性</label>
            @elseif($gender == 2)
              <input class="input-radio" type="radio" name="gender" id="man" value="1">
              <label class="input-radio-label" for="man">男性</label>
              <input class="input-radio" type="radio" name="gender" id="woman" checked="checked" value="2">
              <label class="input-radio-label" for="woman">女性</label>
            @else
              <input class="input-radio" type="radio" name="gender" id="man" checked="checked" value="1">
              <label class="input-radio-label" for="man">男性</label>
              <input class="input-radio" type="radio" name="gender" id="woman" value="2">
              <label class="input-radio-label" for="woman">女性</label>
            @endif
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">メールアドレス</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="email" name="email" id="email" maxlength="100" value="{{$email}}">
            <span class="email-error error-message"></span>
            <p class="example">例）test@example.com</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">郵便番号</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="postcode" maxlength="8" id="postcode" value="{{$postcode}}">
            <span class="postcode-error error-message"></span>
            <p class="example">例）123-4567</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">住所</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="address" id="address" maxlength="100" value="{{$address}}">
            <span class="address-error error-message"></span>
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span>建物名</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="building_name" id="building_name" maxlength="100" value="{{$building_name}}">
            <p class="example">例）千駄ヶ谷マンション101</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">ご意見</span></th>
        <td>
          <div class="content-inner">
            <textarea class="input-text feedback" name="opinion" id="opinion" maxlength="120">{{$opinion}}</textarea>
            <span class="opinion-error error-message"></span>
          </div>
        </td>
      </tr>
    </table>
    <script src="{{asset('js/validation.js')}}"></script>
    <button type="button" class="button" onclick="checkAndSubmit()">送信</button>
  </form>
@endsection