@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('page-title', 'Contacts')

@section('page-header')
  <h1 class="header">お問い合わせ</h1>
@endsection

@section('contents')
  <form action="/contact" method="POST">
    @csrf
    <table>
      <tr>
        <th><span class="required">お名前</span></th>
        <td>
          <div class="name content-inner">
            <div class="input-name">
              <input class="input-text" type="text" name="firstname">
              <span class="input-error-message"></span>
              <p class="example">例）山田</p>
            </div>
            <div class="input-name">
              <input class="input-text" type="text" name="surname">
              <span class="input-error-message"></span>
              <p class="example">例）太郎</p>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">性別</span></th>
        <td class="sex">
          <div class="content-inner">
            <input class="input-radio" type="radio" name="sex" id="man">
            <label class="input-radio-label" for="man">男性</label>
            <input class="input-radio" type="radio" name="sex" id="woman">
            <label class="input-radio-label" for="woman">女性</label>
          </div>
          <span class="input-error-message"></span>
        </td>
      </tr>
      <tr>
        <th><span class="required">メールアドレス</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="email" name="email" id="">
            <span class="input-error-message"></span>
            <p class="example">例）test@example.com</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">郵便番号</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="zipcode" maxlength="8" id="">
            <span class="input-error-message"></span>
            <p class="example">例）123-4567</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">住所</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="address" id="">
            <span class="input-error-message"></span>
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span>建物名</span></th>
        <td>
          <div class="content-inner">
            <input class="input-text" type="text" name="building" id="">
            <p class="example">例）千駄ヶ谷マンション101</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><span class="required">ご意見</span></th>
        <td>
          <div class="content-inner">
            <textarea class="input-text feedback" name="feedback"></textarea>
            <span class="input-error-message"></span>
          </div>
        </td>
      </tr>
    </table>
    <input class="button" type="submit" value="確認">
  </form>
@endsection