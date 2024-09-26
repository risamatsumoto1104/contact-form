<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/comfirm.css')}}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Contact Form</a>
        </div>
    </header>

    <main>
        <div class="comfirm__content">
            <div class="comfirm__heading">
                <h2>お問い合わせ内容の確認</h2>
            </div>
            <form class="form">
                {{-- フォーム1 内容確認テーブル --}}
                <div class="comfirm-table">
                    <table class="comfirm-table__inner">
                        {{-- テーブル1行目 --}}
                        <tr class="comfirm-table__row">
                            <th class="comfirm-table__header">お名前</th>
                            <td class="comfirm-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                            </td>
                        </tr>
                        {{-- テーブル2行目 --}}
                        <tr class="comfirm-table__row">
                            <th class="comfirm-table__header">メールアドレス</th>
                            <td class="comfirm-table__text">
                                <input type="email" name="email" value="サンプルテキスト" />
                            </td>
                        </tr>
                        {{-- テーブル3行目 --}}
                        <tr class="comfirm-table__row">
                            <th class="comfirm-table__header">電話番号</th>
                            <td class="comfirm-table__text">
                                <input type="tel" name="tel" value="サンプルテキスト" />
                            </td>
                        </tr>
                        {{-- テーブル4行目 --}}
                        <tr class="comfirm-table__row">
                            <th class="comfirm-table__header">お問い合わせ内容</th>
                            <td class="comfirm-table__text">
                                <input type="text" name="content" value="サンプルテキスト" />
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
    </main>
</body>
</html>