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



        $x = -5;
        if($x > 30){
            echo "30以上です。";
        } elseif($x <= 30 && $x > 0){
            echo('0以上30以下です。');
        } else{
            echo('マイナスです。');
        }



    ?>

</body>
</html>
