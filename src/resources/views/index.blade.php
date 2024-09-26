<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Contact Form</a>
        </div>
    </header>

    <main>
        <div class="content-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
        
            <form action="form">
                {{-- フォーム1 名前・エラーメッセージ --}}
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        {{-- placeholder⇒入力欄に初期表示する内容を指定 --}}
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="テスト太郎" />
                        </div>
                        <div class="form__error">
                            <div>
                            {{-- バリデーションの実装記述 --}}
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
                            <input type="email" name="email" placeholder="test@example.com" />
                        </div>
                        <div class="form__error">
                            <div>
                                {{-- バリデーションの実装記述 --}}
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
                            <input type="tel" name="tel" placeholder="09012345678" />
                        </div>
                        <div class="form__error">
                            <div>
                            {{-- バリデーションの実装記述 --}}
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
    </main>
</body>
</html>