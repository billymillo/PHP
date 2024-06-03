<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP Inheritance Example with Form</title>
</head>
<body>

<h1>OOP PHP Inheritance Example with Form</h1>

<form method="post">
    <label for="brand">Enter Brand:</label>
    <input type="text" id="brand" name="brand" required>
    <label for="model">Enter Model:</label>
    <input type="text" id="model" name="model" required>
    <label for="color">Enter Color:</label>
    <input type="text" id="color" name="color" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define a parent class
    class Vehicle {
        protected $brand;

        public function __construct($brand) {
            $this->brand = $brand;
        }

        public function getInfo() {
            return "Brand: {$this->brand}";
        }
    }

    // Define a child class inheriting from the parent class
    class Car extends Vehicle {
        private $model;
        private $color;

        public function __construct($brand, $model, $color) {
            parent::__construct($brand);
            $this->model = $model;
            $this->color = $color;
        }

        public function getCarInfo() {
            return "Brand: {$this->brand}, Model: {$this->model}, Color: {$this->color}";
        }
    }

    // Get form data
    $brand = $_POST['brand'] ?? '';
    $model = $_POST['model'] ?? '';
    $color = $_POST['color'] ?? '';

    // Create an instance of the child class
    $car = new Car($brand, $model, $color);

    // Access methods of the parent class
    echo "<p>Parent Class Method Output:</p>";
    echo "<p>" . $car->getInfo() . "</p>";

    // Access methods of the child class
    echo "<p>Child Class Method Output:</p>";
    echo "<p>" . $car->getCarInfo() . "</p>";
}
?>

</body>
</html>
