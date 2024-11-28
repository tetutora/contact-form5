@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__title">
        <h2>お問い合わせ</h2>
    </div>
    <div class="contact-form">
        <form action="/confirm" method="post">
            @csrf
            <div class="contact-form-name">
                <div class="form-name">
                    <span class="form-name__label">お名前</span>
                    <span class="form-name__required">必須</span>
                </div>
                <div class="form-name__input">
                    <input type="text" class="form-name__input-text" placeholder="テスト太郎">
                </div>
            </div>
            <div class="contact-form-mail">
                <span class="form-mail__label">メールアドレス</span>
                <span class="form-mail__required">必須</span>
                <input type="mail" class="form-mail__input" placeholder="test@example.com">
            </div>
            <div class="contact-form-tel">
                <span class="form-tel__label">電話番号</span>
                <span class="form-tel__required">必須</span>
                <input type="tel" class="form-tel__input" placeholder="09012345678">
            </div>
            <div class="contact-form-detail">
                <span class="form-detail__label">お問い合わせ内容</span>
                <span class="form-detail__required">必須</span>
                <textarea name="" id="" class="form-detail__input" placeholder="資料をいただきたいです"></textarea>
            </div>
            <div class="contact-form__button">
                <button type="submit" class="contact-form__button-submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection