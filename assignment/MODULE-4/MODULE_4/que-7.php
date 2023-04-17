<!-- 
   7) Define Constructor and Destructor?
   ANS :
   A constructor allows you to initialize an object's properties upon creation of the object.

    Example  : 
-->

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>


<!-- Destroctor -->
<!-- 
    A destructor is called when the object is destructed or the script is stopped or exited.
 -->

 <?php
class Veg{
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The Veg is {$this->name}.";
  }
}

$apple = new Fruit("Potato");
?>
