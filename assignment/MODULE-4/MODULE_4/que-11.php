<!-- 
    11)What are PHP Magic Methods/Functions? List them Write program for Static
       Keyword in PHP?
    ANS :
    In PHP, magic methods (also known as magic functions) are special methods that start with the prefix "__" (double underscore) and are used to handle certain events or operations that occur within an object.

    Magic methods are automatically called by PHP when certain conditions are met, such as when a property is accessed or when a method is called on an object. They allow you to define custom behavior for these operations, which can be useful for tasks like validation, error handling, or customizing the behavior of a class.
    
 -->
 <?php

class MyClass {
  public static $myStaticVar = 0;

  public static function myStaticMethod() {
    self::$myStaticVar++;
    echo self::$myStaticVar;
  }
}

MyClass::myStaticMethod(); // Output: 1
MyClass::myStaticMethod(); // Output: 2
MyClass::myStaticMethod(); // Output: 3

?>
