<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <h1>Products</h1>
        <h2>Available Netballs</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php
            $sql = "SELECT name, description, price, image FROM netballs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>$" . $row['price'] . "</td>";
                    echo "<td><img src='images/" . $row['image'] . "' alt='" . $row['name'] . "' width='100'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No netballs found.</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
