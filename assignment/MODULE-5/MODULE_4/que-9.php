<!--
    9) How to Call Parent Constructor?
    ANS :
    To call a parent constructor in PHP, you can use the parent::__construct() method. This method calls the constructor of the parent class.
-->
<?php

class ParentClass {
  public function __construct() {
    
  }
}

class ChildClass extends ParentClass {
  public function __construct() {
    parent::__construct(); // calling parent constructor
    
  }
}
?>