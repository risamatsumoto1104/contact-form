@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">  
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>お問い合わせ内容の確認</h2>
    </div>
    <form class="form" action="/contacts" method="post">
    @csrf
        {{-- フォーム1 内容確認テーブル --}}
        <div class="confirm-table">
            <table class="confirm-table__inner">
                {{-- テーブル1行目 --}}
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                    <input type="text" name="name" value="{{$contact['name']}}" readonly />
                    </td>
                </tr>
                {{-- テーブル2行目 --}}
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{$contact['email']}}" readonly />
                    </td>
                </tr>
                {{-- テーブル3行目 --}}
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="{{$contact['tel']}}" readonly />
                    </td>
                </tr>
                {{-- テーブル4行目 --}}
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{$contact['content']}} " readonly />
                    </td>
                </tr>
            </table>
        </div>
        {{-- フォーム2　送信ボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div> 
@endsection