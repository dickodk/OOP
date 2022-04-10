<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  function __construct($name = null, $color = null){
    $this->name = $name;
    $this->color = $color;
  }

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_color($color){
    $this->color = $color;
}
  function get_name() {
    return $this->name;
  }

  public function intro()
  {
      echo "The fruit is {$this->name} and the color is {$this->color}";
  }

  function __destruct(){
      //echo "Object {$this->name} destructed.<br/>";
  }
  
}

class Strawberry extends Fruit{
    public function message(){
        echo "am i a fruit or a berry";
    }
}
//define/membuat object'
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
echo $apple->get_name(); // $apple->name;

echo "<br/>";
$banana->set_name("Banana");
echo $banana->get_name();

echo "<br/>";
$melon = new Fruit("Melon");
echo $melon->get_name();
echo "<br/>";

$berry = new Strawberry("Strawberry", "Reds");
$berry -> message();
$berry->intro();
?>