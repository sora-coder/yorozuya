<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題</title>
</head>
<body>
    <?php
        class Human{
            public $height;
            public $weight;

            public function __construct($height, $weight){
                $this->height = $height;
                $this->weight = $weight;
            }
            public function bmi(){
                $bmi = round($this->weight / (($this->height * 0.01) ** 2), 2);
                return $bmi;
            }

            }

        $human = new Human("170", "65");
        echo $human->bmi();
    ?>
</body>
</html>
