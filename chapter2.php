<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chapter2</title>
</head>
<body>
    <?php
        function add($a, $b){
            $sum = $a + $b;
            return $sum;
        }

        echo add(5, 200);
        echo "<br/>";

        function hi() {
            return "hi";
        }
        echo hi();
        echo "<br/>";

        function my_max($x, $y){
            $max = 0;
            if($x > $y){
                $max = $x;
            }else {
                $max = $y;
            }
            return $max;
        }

        echo my_max(15, -3);

    ?>





</body>
</html>
