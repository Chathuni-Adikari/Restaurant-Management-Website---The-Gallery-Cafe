<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Customer Quaries</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-btn {
            margin-right: 5px;
        }
        .message {
            color: green;
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Customer Quaries</h2>
    <?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "the_gallery_cafedb");

    // Check connection
    if ($conn->connect_error) {
        die("ERROR: Could not connect. " . $conn->connect_error);
    }

        // Handling POST requests
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['delete'])) {
                $email = $_POST['email'];
                $stmt = $conn->prepare("DELETE FROM reservations WHERE email = ?");
                $stmt->bind_param("s", $email);
                if ($stmt->execute()) {
                    echo "<p class='message'>Quary deleted successfully</p>";
                } else {
                    echo "<p class='error'>ERROR: Could not delete quary. " . $conn->error . "</p>";
                }
                $stmt->close();

        }}


    // Fetch data from the database
    $sql = "SELECT * FROM quries";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['message']) . "</td>";
            echo "<td>
                    <form style='display:inline;' method='POST' action=''>
                        <input type='hidden' name='email' value='" . htmlspecialchars($row['email']) . "'>
                        <button type='submit' name='delete' class='action-btn'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No reservations found.";
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>