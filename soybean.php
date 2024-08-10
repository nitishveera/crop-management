<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'dbmsproject';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// SQL query to select all records from the table
$sql = "SELECT * FROM soybean";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Soybean</title>
    <style>
        img{
            height: 200px;
            width: 200px;
        }
        .container-fluid{
            margin-top: 20px;
            color: whitesmoke;
        }
        p{
            color:whitesmoke;
            padding-left: 20px;
            padding-right:20px;
        }
        h3{
            color:whitesmoke;
        }
        table,tr,th,td{
            color:whitesmoke;
        }
        table{
            border:2px solid white;
            border-collapse: separate;
            border-spacing: 10px;
        }
        th, td {
            border: 1px solid black; /* Just for demonstration purposes */
            padding: 15px; /* Just for demonstration purposes */
        }
    </style>
</head>
<body class="bg-dark">
    <center>
        <div class="container-fluid">
            <img src="product1.jpg" style ="clip-path: circle(50% at 50% 50%);"/>
            <h3>Soybean</h3>
        </div>
        <p>Soybean, scientifically known as Glycine max, is a versatile legume renowned for its high nutritional value and numerous applications. Originating from East Asia, soybeans are now cultivated worldwide, primarily for their protein-rich seeds.</p>
        <div class="container-fluid">
            <table border="1">
                <tr>
                    <th>PROTEIN ( in grams)</th>
                    <th>FAT (in grams)</th>
                    <th>FIBER (in grams)</th>
                    <th>ENERGY (in cal)</th>
                    <th>CARBOHYDRATES (in grams)</th>
                    <th>TEXTURE</th>
                    <th>SEASON</th>
                    <!-- Add more columns as per your table structure -->
                </tr>
                <?php
                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["protein"] . "</td>";
                        echo "<td>" . $row["fat"] . "</td>";
                        echo "<td>" . $row["fiber"] . "</td>";
                        echo "<td>" . $row["energy"] . "</td>";
                        echo "<td>" . $row["carbohydrates"] . "</td>";
                        echo "<td>" . $row["texture"] . "</td>";
                        echo "<td>" . $row["season"] . "</td>";
                        // Output more columns as needed
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </table>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Close connection
$conn->close();
?>