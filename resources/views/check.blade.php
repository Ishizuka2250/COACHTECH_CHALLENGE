@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/check.css')}}">
@endsection

@section('page-title', 'Check')

@section('page-header')
  <h1 class="header">内容確認</h1>
@endsection

@section('contents')
  <form action="/contact" method="POST">
    @csrf
    <table>
      <tr>
        <th><p>お名前</p></th>
        <td>
          <input type="hidden" name="firstname" value="">
          <input type="hidden" name="surname" value="">
          <div class="check-content-inner">
            <p>hoge fuga</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>性別</p></th>
        <td>
          <input type="hidden" name="sex" value="">
          <div class="check-content-inner">
            <p>男性</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>メールアドレス</p></th>
        <td>
          <input type="hidden" name="email" value="">
          <div class="check-content-inner">
            <p>test@example.com</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>郵便番号</p></th>
        <td>
          <input type="hidden" name="zipcode" value="">
          <div class="check-content-inner">
            <p>123-4567</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>住所</p></th>
        <td>
          <input type="hidden" name="address" value="">
          <div class="check-content-inner">
            <p>東京都渋谷区千駄ヶ谷1-2-3</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>建物名</p></th>
        <td>
          <input type="hidden" name="building" value="">
          <div class="check-content-inner">
            <p>千駄ヶ谷マンション</p>
          </div>
        </td>
      </tr>
      <tr>
        <th><p>ご意見</p></th>
        <td>
          <input type="hidden" name="feedback" value="">
          <div class="check-content-inner">
            <p>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
          </div>
        </td>
      </tr>
    </table>
    <input class="button" type="submit" value="確認">
  </form>
  <a class="fix-link" href="/contact">修正する</a>
@endsection
