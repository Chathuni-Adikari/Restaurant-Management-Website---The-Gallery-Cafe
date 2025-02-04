<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        a{
            color: green;
        }
        h1{
            text-align: center;
        }
        h2{
            text-align: center;
        }
        form{
            margin-left: 600px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "the_gallery_cafedb");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Handle order confirmation
    if (isset($_GET['confirm_id'])) {
        $id = $_GET['confirm_id'];
        $sql = "UPDATE cart_checkout SET status='Confirmed' WHERE id='$id'";
        mysqli_query($conn, $sql);
        echo "<p>Order confirmed successfully.</p>";
    }

    // Handle order modification
    if (isset($_POST['modify_order'])) {
        $id = $_POST['id'];
        $first_Name = $_POST['firstName'];
        $second_Name = $_POST['secondName'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $comment = $_POST['comment'];

        $update_sql = "UPDATE cart_checkout SET first_Name='$first_Name', second_Name='$second_Name', tel='$tel', email='$email', city='$city', comment='$comment' WHERE id='$id'";
        mysqli_query($conn, $update_sql);
        echo "<p>Order updated successfully.</p>";
    }

    // Handle order cancellation
    if (isset($_GET['cancel_id'])) {
        $id = $_GET['cancel_id'];
        $sql = "DELETE FROM cart_checkout WHERE id='$id'";
        mysqli_query($conn, $sql);
        echo "<p>Order canceled successfully.</p>";
    }

    // Fetch all orders
    $sql = "SELECT * FROM cart_checkout";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>First Name</th><th>Second Name</th><th>Contact Number</th><th>Email</th><th>City</th><th>Comment</th><th>Actions</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_Name'] . "</td>";
            echo "<td>" . $row['second_Name'] . "</td>";
            echo "<td>" . $row['tel'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['comment'] . "</td>";
            echo "<td>
                <a href='?confirm_id=" . $row['id'] . "'>Confirm</a> |
                <a href='?modify_id=" . $row['id'] . "'>Modify</a> |
                <a href='?cancel_id=" . $row['id'] . "'>Cancel</a>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No orders found.</p>";
    }

    // Modify Order Form
    if (isset($_GET['modify_id'])) {
        $id = $_GET['modify_id'];
        $sql = "SELECT * FROM cart_checkout WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $order = mysqli_fetch_assoc($result);
        ?>
        <h2><br>Modify Order</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
            First Name: <br><input type="text" name="firstName" value="<?php echo $order['first_Name']; ?>"><br><br>
            Second Name:<br> <input type="text" name="secondName" value="<?php echo $order['second_Name']; ?>"><br><br>
            Contact Number:<br> <input type="text" name="tel" value="<?php echo $order['tel']; ?>"><br><br>
            Email: <br><input type="email" name="email" value="<?php echo $order['email']; ?>"><br><br>
            City:<br> <input type="text" name="city" value="<?php echo $order['city']; ?>"><br><br>
            Comment: <br><textarea name="comment"><?php echo $order['comment']; ?></textarea><br><br>
            <input type="submit" name="modify_order" value="Update Order">
        </form>
        <?php
    }

    // Close connection
    mysqli_close($conn);
    ?>
</body>
</html>
