<!-- 
    12)Create multiple Traits and use it in to a single class?
    ANS : 
    
 -->
<?php
// Define traits
trait Trait1 {
    public function method1() {
        echo "This is method1 from Trait1";
    }
}

trait Trait2 {
    public function method2() {
        echo "This is method2 from Trait2";
    }
}

// Define class and use traits
class MyClass {
    use Trait1, Trait2;
    
    public function myMethod() {
        // Call methods from traits
        $this->method1();
        $this->method2();
    }
}

// Instantiate object and call method
$obj = new MyClass();
$obj->myMethod();

?>