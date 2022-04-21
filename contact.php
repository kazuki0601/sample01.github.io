<?php

$name = $_POST["name"];

if($name == "三笠宮"){
    echo "三笠宮様だ！！！";
}else{
    echo "誰だお前";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>この内容でお問い合わせしますか？</div>
    <div>name
        <div><?php echo $_POST["name"] ?></div>
    </div>
    <div>email
        <div><?php echo $_POST["email"] ?></div>
    </div>
    <div>phone
        <div><?php echo $_POST["phone"] ?></div>
    </div>
    <div>birthday
        <div><?php echo $_POST["birthday"] ?></div>
    </div>
    <div>gender
        <div><?php echo $_POST["gender"] ?></div>
    </div>
    <button>変更</button>
</body>

</html>