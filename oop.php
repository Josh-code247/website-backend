<?php
class fruit {
    //properties
    public $name;
    public $color;

    //methods
    function setName ($name) {
        $this->name = $name; 
    }

    function getName () {
        return $this -> name;
    }
    function setColor ($color) {
        $this -> color = $color;
    }
    function getColor () {
        return $this -> color;
    }
}
 $apple = new fruit();
 $apple->setName("pear");

 echo $apple->getName ();
 
 echo "<br>";
 $mango = new fruit();

 $mango->setName("mango");

 echo $mango -> getName();


echo "<br>";
$mango ->setcolor ("green");
echo $mango->getColor();
echo "<br>";

class car{
    public $color;
    public                         $model;
    function __construct ($model) {
        $this->model = $model;
    }
    function getModel () {
        return $this->model;
    }
}
$toyota = new car ("2025");
echo $toyota->getModel();
 echo "<br>";
$toyota->color = "red";
echo $toyota->color;

//inheritance
class vegetables extends fruit {
   public $nutrient;
}
$pumpkinLeaf = new vegetables();

$pumpkinLeaf->setName("pumpkin leaf");

echo $pumpkinLeaf->getName();