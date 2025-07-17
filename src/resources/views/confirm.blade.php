@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}?">
@endsection

@section('content')
<div class="confirm-table">
    <div class="confirm-table__heading">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form class="confirm-table__wrapper" action="/contacts" method="post">
        @csrf
        <table class="confirm-table__container">
            <tr class="confirm-table__row">
                <th class="confirm-table__label">お名前</th>
                <td class="confirm-table__contents-area">
                    <input class="confirm-table__contents" type="text" name="name" value="{{ $contact['name'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__label">メールアドレス</th>
                <td class="confirm-table__contents-area">
                    <input class="confirm-table__contents" type="email" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__label">電話番号</th>
                <td class="confirm-table__contents-area">
                    <input class="confirm-table__contents" type="tel" name="tel" value="{{ $contact['tel'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__label">お問い合わせ内容</th>
                <td class="confirm-table__contents-area">
                    <input class="confirm-table__contents" type="text" name="content" value="{{ $contact['content'] }}" readonly>
                </td>
            </tr>
        </table>
        <div class="confirm-table__button-area">
            <button class="confirm-table__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection