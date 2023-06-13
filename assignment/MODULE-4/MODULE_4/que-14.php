<!-- Use of The $this keyword -->
<?php
class Car {
    private $make;
    private $model;
    
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    
    public function getMake() {
        return $this->make;
    }
    
    public function getModel() {
        return $this->model;
    }
}
?>