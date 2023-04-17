<!-- 
    5) What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with
       Example
    ANS :
    The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.
    
    
 -->
 <?php
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;  
echo MyClass::CONST_VALUE;
?>