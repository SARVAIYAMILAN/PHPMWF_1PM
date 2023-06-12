<?php
$json_string = '{"name": "Milan", "age": 22, "city": "Rajkot"}';
$decoded_data = json_decode($json_string);

// Accessing the decoded data
echo "Name: " . $decoded_data->name . "<br>";
echo "Age: " . $decoded_data->age . "<br>";
echo "City: " . $decoded_data->city . "<br>";
?>
    