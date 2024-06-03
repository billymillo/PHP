<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance in PHP</title>
</head>
<body>
    <h1>Vehicle Information</h1>
    
    <form action="" method="post">
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required><br><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br><br>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br><br>
        <button type="submit" name="submit">Create Car</button>
    </form>

    <?php
    // Parent class
    class Vehicle {
        protected $brand;
        protected $model;

        public function __construct($brand, $model) {
            $this->brand = $brand;
            $this->model = $model;
        }

        public function getInfo() {
            return "Brand: " . $this->brand . ", Model: " . $this->model;
        }
    }

    // Child class inheriting from Vehicle
    class Car extends Vehicle {
        private $color;

        public function __construct($brand, $model, $color) {
            parent::__construct($brand, $model);
            $this->color = $color;
        }

        public function getInfo() {
            return parent::getInfo() . ", Color: " . $this->color;
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];

        // Create a new Car object
        $new_car = new Car($brand, $model, $color);

        // Add the new car object to the array
        $cars[] = $new_car;

        // Display the information of all cars
        foreach ($cars as $index => $car) {
            echo "<p>Car " . ($index + 1) . ": " . $car->getInfo() . "</p>";
        }
    }
    ?>
</body>
</html>
