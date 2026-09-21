<?php      
    //設問７-ｃ：フォームの値が送信されないとき、contact.phpへリダイレクトする
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: contact.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム‐確認画面</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="contents">
        <header>
            <h2>お問い合わせフォーム‐確認画面</h2>
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
        <form id="form" action="send.php" method="POST">
        <?php
        //設問７-b：入力が空のとき、エラーを表示する
            function postData($key, $hidden = false){
                if(empty($_POST[$key])){
                    if($hidden){
                        return '';
                    }

                    echo '<span class="error">入力エラーです！</span>';
                    return '';
                }
                $value = $_POST[$key];

                if($hidden){
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            
                }
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

            }
        ?>
            <table>
                <tr>
                    <th>お名前</th>
                    <td>
                        <?php echo postData('name') ?>
                        <input type="hidden" id="name" name="name" value="<?= postData('name', true); ?>">
                    </td>
                </tr> 
                <tr>
                    <th>会社名</th>
                    <td>
                        <?php echo postData('companyName'); ?>
                        <input type="hidden" id="companyName" name="companyName" value="<?= postData('companyName', true); ?>">
                    </td>
                    </tr>  
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <?php echo postData('email'); ?>
                        <input type="hidden" id="email" name="email" value="<?= postData('email', true); ?>">
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <?php echo postData('age'); ?>
                        <input type="hidden" id="age" name="age" value="<?= postData('age', true); ?>">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <?php echo nl2br(postData('message')); ?>
                        <input type="hidden" id="message" name="message" value="<?= postData('message', true); ?>">
                    </td>
                </tr>
            </table>
            <div class ="button">
                <button type="submit" id="button">送信</button>
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        </form>
        </main>
        </div>
        <footer></footer>
    </div>
        <script src="style.js"></script>
    </body>
    </html>