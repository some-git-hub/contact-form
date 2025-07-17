@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}?">
@endsection

@section('content')
<div class="confirm-table">
    <div class="confirm-table__heading">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form action="/contacts" class="form" method="post">
        @csrf
        <div class="confirm-table__container">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__label">お名前</th>
                    <td class="confirm-table__contents">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__label">メールアドレス</th>
                    <td class="confirm-table__contents">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__label">電話番号</th>
                    <td class="confirm-table__contents">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__label">お問い合わせ内容</th>
                    <td class="confirm-table__contents">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm-table__button">
            <button class="confirm-table__button--submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection