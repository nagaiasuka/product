<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // データの受け取り
    $pro_name = $_POST['name'];
    $pro_price = $_POST['price'];
    

    // 入力データの安全対策
    $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'utf-8');
    $pro_price = htmlspecialchars($pro_price,ENT_QUOTES,'utf-8');
    // print $pro_price;


    // 商品の入力確認
    if($pro_name == ''){
        print '商品名が入力されていません。<br>';
    }else{
        print '商品名：';
        print $pro_name;
        print '<br>';
    }

    // 価格の入力確認
    if(preg_match("/^[0-9]+$/",$pro_price)==0){
        print '価格をちゃんと入力してくだい。<br>';
    }else{
        print '価格：';
        print $pro_price;
        print '円<br>';
    }

    if($pro_name=='' ||preg_match("/^[0-9]+$/",$pro_price)==0){
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    }else{
        print '上記の商品を追加します。';
        print '<form action="pro_add_done.php" method="post">';
        print '<input type="hidden" name="name" value="'.$pro_name.'">';
        print '<input type="hidden" name="pass" value="'.$pro_price.'">';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';

    }

    ?>
</body>
</html>