@extends('layout.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('page-title', 'Contacts')

@section('contents')
  <div class="thanks">
    <p class="thanks-message">ご意見頂きありがとうございました。</p>
    <a href="#" class="button">トップページへ</a>
  </div>
@endsection
