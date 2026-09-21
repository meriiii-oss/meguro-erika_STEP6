function getInputValues() {
    //設問9：入力項目が正しく入力されているかを確認 
    var name        = document.getElementById('name').value;
    var companyName = document.getElementById('companyName').value;
    var email       = document.getElementById('email').value;
    var age         = document.getElementById('age').value;
    var message     = document.getElementById('message').value;

    // 設問10：入力した値の確認（いずれか空のとき含む）
    if(! /^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u.test(name)){
        alert('必須項目が未入力です。入力内容をご確認ください。');
        return false;
    }

    if(! /^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u.test(companyName)){
        alert('必須項目が未入力です。入力内容をご確認ください。');
        return false;
    }

    if(! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){
        alert('必須項目が未入力です。入力内容をご確認ください。');
        return false;
    }

    if(! /^[0-9]+$/.test(age)){
        alert('必須項目が未入力です。入力内容をご確認ください。');
        return false;
    }

    if(! /^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u.test(message)){
        alert('必須項目が未入力です。入力内容をご確認ください。');
        return false;
    }

    //設問11：送信のキャンセル（どれかひとつでも空のとき）
    var input = [name, companyName, email, age, message];
    for (let i =0; i < input.length; i++){
        if (input[i].trim() === ''){
            alert('必須項目が未入力です。入力内容をご確認ください。');
            return false;
        }
    }
    return true;
}

const contactButton = document.getElementById('buttons');
    if (contactButton) {
        contactButton.addEventListener('click', function(e){
            // contact.php の入力チェック処理
            return getInputValues();
        });
}

//設問12：confirm.phpの送信ボタンを押すと、確認アラートを表示
const confirmButton = document.getElementById('button');
    if(confirmButton){
        confirmButton.addEventListener('click', function(e){
            const name        = document.getElementById('name').value;
            const companyName = document.getElementById('companyName').value;
            const email       = document.getElementById('email').value;
            const age         = document.getElementById('age').value;
            const message     = document.getElementById('message').value;
    
            const input = [name, companyName, email, age, message];
            for (let i =0; i < input.length; i++){
                if (input[i].trim() === ''){
                    alert('必須項目が未入力です。入力内容をご確認ください。');
                    e.preventDefault();
                    return;
                    }
                }

    const alert = confirm(
        'localhost:8888 の内容\n\n' +
        '下記の内容を本当に送信しますか？\n\n' +
        'お名前→ ' + name + '\n' +
        '会社名→ ' + companyName + '\n' +
        'メールアドレス→ ' + email + '\n' +
        '年齢→ ' + age + '\n' +
        'お問い合わせ内容→\n' + message
        );

        if(!result){
            e.preventDefault();
            return;
        }
    });
}

    let currentIndex  = 0;
    function changeColor(){
        var footer = document.querySelector('footer');
        var colors   = ['blue', 'red', 'yellow', 'gray'];

        footer.style.backgroundColor = colors[currentIndex];
        currentIndex = (currentIndex + 1) % colors.length;
    }