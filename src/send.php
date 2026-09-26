<?php
    //フォームの値が送信されないとき、contact.phpへリダイレクトする
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
    }
    // 入力エラーチェック（空欄ならエラー）
    $error = ['name', 'companyName', 'email', 'age', 'message'];
    foreach ($error as $field) {
        if (empty($_POST[$field])) {
            echo '入力エラーがあります。';
            exit;
        }
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
        <h1>お問い合わせフォーム‐送信完了画面</h1>
        <?php
            //valueの値を受け取る
            $name        = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
            $companyName = htmlspecialchars($_POST['companyName'] ?? '', ENT_QUOTES, 'UTF-8');
            $email       = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
            $age         = htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8');
            $message     = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
    
            //メール送信設定
            $to      =  'test@gmail.com';
            $subject =  'お問い合わせがありました';
            $body    =  "お名前: $name\n" .
                        "会社名: $companyName\n" .
                        "メールアドレス: $email\n" .
                        "年齢: $age\n" .
                        "お問い合わせ内容:\n$message\n";
            $headers =  "From: noreply@example.com";

            $result = mail($to, $subject, $body, $headers);
                if($result){
                    echo "<p>お問い合わせが送信されました。ありがとうございます！</p>";
                }else{
                    echo "<p>エラーが発生しました。再度お試しください。</p>";
                }
        ?>
        <p><a href="contact.php">お問い合わせフォームに戻る</a><p>
    </body>
</html>