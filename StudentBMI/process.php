<?php
include 'index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    // Calculate BMI
    $bmi = $weight / ($height * $height);

    // Insert data into the database
    $sql = "INSERT INTO student_bmi (Stu_name, Stu_weight, Stu_hight, Stu_bmi) VALUES ('$name', $weight, $height, $bmi)";
    
    if ($conn->query($sql) === TRUE) {
        echo "BMI calculated and saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
