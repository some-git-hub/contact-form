@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}?">
@endsection

@section('content')
<div class="contact-form">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <div class="contact-form__wrapper">
        <form action="/contacts/confirm" method="post">
            @csrf
            <div class="contact-form__container">
                <div class="contact-form__label">
                    <span class="contact-form__label--item">お名前</span>
                    <span class="contact-form__label--required">必須</span>
                </div>
                <div class="contact-form__inner">
                    <div class="contact-form__input">
                        <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}">
                    </div>
                    @error('name')
                    <div class="contact-form__input--error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="contact-form__container">
                <div class="contact-form__label">
                    <span class="contact-form__label--item">メールアドレス</span>
                    <span class="contact-form__label--required">必須</span>
                </div>
                <div class="contact-form__inner">
                    <div class="contact-form__input">
                        <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="contact-form__input--error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="contact-form__container">
                <div class="contact-form__label">
                    <span class="contact-form__label--item">電話番号</span>
                    <span class="contact-form__label--required">必須</span>
                </div>
                <div class="contact-form__inner">
                    <div class="contact-form__input">
                        <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}">
                    </div>
                    <div class="contact-form__input--error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="contact-form__container">
                <div class="contact-form__label">
                    <span class="contact-form__label--item">お問い合わせ内容</span>
                </div>
                <div class="contact-form__inner">
                    <div class="contact-form__textarea">
                        <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="contact-form__button">
                <button type="submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection