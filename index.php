<!DOCTYPE html>
<html>
<head>
<meat charset='utf-8'>
    <title>HTML内でのPHPスクリプト　</title>
</head>
    
<body>
    <h1><?php echo "PHPから表示";?></h1>
    <?php
        $str_hello = "HTML内で"
        echo "<p> $str_hello PHPスクリプトを表示してみたよ</p>";
        ?>
</body>

</html>
