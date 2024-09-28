@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">   
@endsection

@section('content')
<div class="content-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
        
    <form class="form" action="/contacts/confirm" method="post" >
    @csrf
        {{-- フォーム1 名前・エラーメッセージ --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                {{-- placeholder⇒入力欄に初期表示する内容を指定 --}}
                {{-- {{old(キー名)}}⇒入力内容の保持 --}}
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="テスト太郎" value="{{old('name')}}"/>
                </div>
                <div class="form__error">
                    <div>
                        {{-- バリデーションの実装記述 --}}
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{-- フォーム2 メールアドレス・エラーメッセージ --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{old('email')}}"/>
                </div>
                <div class="form__error">
                    <div>
                        {{-- バリデーションの実装記述 --}}
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{-- フォーム3 電話番号・エラーメッセージ --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">                    
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="09012345678" value="{{old('tel')}}"/>
                </div>
                <div class="form__error">
                    <div>
                        {{-- バリデーションの実装記述 --}}
                        @error('tel')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{-- フォーム4 お問い合わせフォーム --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    {{-- textarea⇒複数行の入力フィールド --}}
                    <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
        </div>
        {{-- フォーム5　送信ボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div> 
@endsection
