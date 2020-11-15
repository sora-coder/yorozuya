<!DOCTYPE html>
<html lang="jp">
    <meta charset="UTF-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラス</title>
</head>
<body>
    <?php
    class Human{
        public $name;
        protected $birthday;
        private $gender;

        public function __construct($name, $birthday, $gender){
            $this->name = $name;
            $this->birthday = $birthday;
            $this->gender = $gender;
        }

        public function walk(){
            echo "{$this->name}は歩きます"."<br/>";
        }
        public function eat(){
            echo "食べます"."<br/>";
        }


    }

    $human = new Human("shige", "1/17", "Man");
    $human->eat();
    $human->walk();




    ?>




</body>
</html>
