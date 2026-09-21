<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="contents">
        <header>
            <h2>お問い合わせフォーム</h2>
        </header>

        <div class="main">
        <nav>
            <ul>
                <li><a href="">トップページ</a></li>
                <li><a href="">人気投稿</a></li>
                <li><a href="">エンジニアおすすめ商品</a></li>
                <li><a href="">エンジニアおすすめ記事</a></li>
                <li><a href="">投稿ページ</a></li>
            </ul>
        </nav>

        <main class="form-area">
        <form action="confirm.php" method="POST">
            <table>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" id="name" name="name"></td>
                </tr> 
                <tr>
                    <th>会社名</th>
                    <td><input type="text" id="companyName" name="companyName"></td>
                </tr>  
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><input type="number" id="age" name="age"></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><textarea id="message" name="message" placeholder="お問い合わせ"></textarea></td>
                </tr>
            </table>
            <div class ="button">
                <input type="submit" id="buttons" onclick="return getInputValues()"></input>
            </div>
        </form>
        </main>
        </div>

        <footer>
            <p>横のボタンを押すとfooterの背景色が変わります</p>
            <button type="button" onclick="changeColor()">押してみてね！</button>
        </footer>
    </div>
    <script src="style.js"></script>
    </body>
</html>