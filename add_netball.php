<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    // Move uploaded image to images directory
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image);

    // Insert new netball into the database
    $sql = "INSERT INTO netballs (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
    if ($conn->query($sql) === TRUE) {
        header("Location: products.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
