<?php

class Animal{
    public $nama, $jenis;

    public function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo(){
        return "Hewan ini adalah $this->nama jenis $this->jenis";
    }
    
}

class Cat extends Animal{

    public function __construct($nama, $jenis = 'kucing'){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo(){
        return "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang suka bermain dan bersih";
    }
}

class Dog extends Animal{

    public function __construct($nama, $jenis = 'anjing'){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo(){
        return "Hewan ini adalah $this->nama jenis $this->jenis. $this->jenis adalah hewan yang setia dan cerdas";
    }
}

$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo() . "<br>";

$cat = new Cat("Kitty");
echo $cat->getInfo() . "<br>";

$dog = new Dog("Buddy");
echo $dog->getInfo() . "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>