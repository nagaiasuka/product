<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ管理</title>
</head>
<body>
    
商品追加<br>
<br>
<form action="pro_add_check.php" method="post">
    商品名を入力してください。<br>
    <input type="text" name="name" style="width:200px"><br>
    価格入力して下さい。<br>
    <input type="text" name="price" style="width:50px"><br>
    <br>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
</form>
</body>
</html>