<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web万屋エンジニアチャンネル</title>
</head>
<body>
    <?php
        $a = 'hello';
        echo $a."<br/>";
        echo "{$a}、こんにちは"."<br/>";
        $fruits = [
            'apple'=>'りんご',
            'peach'=>'もも',
            'remon'=>'レモン',
            'cherry'
        ];
        echo "<br/>";

        $x = -5;
        if($x > 30){
            echo "30以上です。";
        } elseif($x <= 30 && $x > 0){
            echo('0以上30以下です。');
        } else{
            echo('マイナスです。');
        }
        echo "<br/>";
        foreach($fruits as $name) {
            echo "{$name}が美味しい！"."<br/>";
        }
        echo "{$fruits['remon']}！"."<br/>";
        $fruits['strawberry'] = 'いちご';
        echo $fruits['strawberry']."<br/>";

        $leader = [
            "レッド", "シロナ", "アイリス"
        ];
        echo $leader[0]."<br/>";

        $kyojin = [
            '清水', '二岡', '高橋', '松井'
        ];
        $kyojin2 = [
            '清原', '江藤', '元木'
        ];
        $marged = array_merge($kyojin, $kyojin2);
        var_dump($marged);
        echo "<br/>";
        $cnt = count($marged);
        for($x = 1; $x < $cnt; $x++){
                echo "{$x}番　{$marged[$x - 1]}"."<br/>";
            }



    ?>

</body>
</html>
