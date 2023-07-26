<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
    <h1>Student Data</h1>
    <?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="sampledb";
    // Connect to the database again to fetch the data
    $conn = mysqli_connect($server_name, $username, $password, $database_name);

    // Check the connection
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql_query = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Home Address</th>
                    <th>Email</th>
                    <th>Pincode</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['first_name']."</td>
                    <td>".$row['last_name']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['home_address']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['pincode']."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
