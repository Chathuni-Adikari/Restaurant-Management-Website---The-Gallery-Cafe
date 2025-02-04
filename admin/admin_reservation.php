<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #213c5b;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        .action-btn {
            padding: 8px 12px;
            color: white;
            border: none;
            cursor: pointer;
        }
        .confirm { background-color: #4CAF50; }
        .modify { background-color: #FFA500; }
        .cancel { background-color: #f44336; }
        footer {
            margin-top: 50px;
            background-image: url('Resources/Home/banner.png');
            color: white;
            text-align: center;
            font-size: 1.5em;
            padding: 25px 0;
        }
        footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            text-align: center;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Admin Dashboard</h1>

<?php
$conn = mysqli_connect("localhost", "root", "", "the_gallery_cafedb");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}

// Fetch reservations
$sql = "SELECT * FROM reservations";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th><th>Guests</th><th>Action</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['guests'] . "</td>";
        echo "<td>";
        echo "<form method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='action' value='confirm'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; // Assuming there's an id field
        echo "<button type='submit' class='action-btn confirm'>Confirm</button>";
        echo "</form>";

        echo "<form method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='action' value='modify'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; // Assuming there's an id field
        echo "<button type='submit' class='action-btn modify'>Modify</button>";
        echo "</form>";

        echo "<form method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='action' value='cancel'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; // Assuming there's an id field
        echo "<button type='submit' class='action-btn cancel'>Cancel</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No reservations found.</p>";
}

// Handle form submissions for confirming, modifying, or canceling reservations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $id = $_POST['id'];

    if ($action == 'confirm') {
        $update_sql = "UPDATE reservations SET status='confirmed' WHERE id='$id'";
        if (mysqli_query($conn, $update_sql)) {
            echo "<p>Reservation confirmed successfully.</p>";
        } else {
            echo "<p>Error confirming reservation: " . mysqli_error($conn) . "</p>";
        }
    } elseif ($action == 'modify') {
        $sql = "SELECT * FROM cart_checkout WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $order = mysqli_fetch_assoc($result);
        ?>
        <h2><br>Modify Reservation</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
            Name: <br><input type="text" name="Name" value="<?php echo $order['Name']; ?>"><br><br>
            Email: <br><input type="email" name="email" value="<?php echo $order['email']; ?>"><br><br>
            Phone:<br> <input type="text" name="tel" value="<?php echo $order['tel']; ?>"><br><br>
            Date: <br><input type="date" name="date" value="<?php echo $order['date']; ?>"><br><br>
            Time:<br> <input type="time" name="time" value="<?php echo $order['time']; ?>"><br><br>
            No. of Guests:<br> <input type="number" name="guests" value="<?php echo $order['guests']; ?>"><br><br>
            <input type="submit" name="modify_order" value="Update Resesrvation"><br><br>
        </form>
        <?php
        exit();
    } elseif ($action == 'cancel') {
        $delete_sql = "DELETE FROM reservations WHERE id='$id'";
        if (mysqli_query($conn, $delete_sql)) {
            echo "<p>Reservation canceled successfully.</p>";
        } else {
            echo "<p>Error canceling reservation: " . mysqli_error($conn) . "</p>";
        }
    }
}

// Close connection
mysqli_close($conn);
?>

<footer>
    <div class="container">
        <p>&copy; 2024 The Gallery Cafe. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
