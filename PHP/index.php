<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");

    function greeting($hour){
        $result = "";

        if(6 <= $hour && $hour < 12){
            $result = "おはよう";
        }elseif(12 <= $hour && $hour < 18){
            $result = "こんにちは";
        }else{
            $result = "こんばんは";
        }

        return $result;
    }

    if($_POST['target_name'] == NULL){
        $_POST['target_name'] = '名無し';
    }

    if($_POST['target_age'] == NULL){
        $_POST['target_age'] = '未入力';
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-9">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前：<input type="name" name="target_name"></label>
            <label>年齢：<input type="age" name="target_age"></label>
            <input type="submit" value="送信">
        </form>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour) ;?>、<?php print $_POST['target_name']; ?>さん(<?php print $_POST['target_age']; ?>)歳</p>
    </body>
</html>