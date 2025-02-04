<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Restaurant Infromation</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;

        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            margin-left: 150px;
            margin-right: 150px;
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
            color: #213A57;
            text-align: center;
            margin-bottom: 20px;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Restaurant Infromation</h2>
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
                    echo "<p class='message'>Changes applied successfully</p>";
                } else {
                    echo "<p class='error'>ERROR: Could not make changes reservation. " . $conn->error . "</p>";
                }
                $stmt->close();

        }}


    // Fetch data from the database
    $sql = "SELECT * FROM quries";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<h3><br><br>About Us</h3>";
        echo "<br><br><tr>";
        echo "<th>The Gallery Cafe.</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Occupies a beautiful, grand over - 100 year old colonial home at Gregory’s Road in Colombo 7,
         the heart of the city’s residential and diplomatic district.
         With culinary flair, The Gallery Cafe’s chefs have been interpreting traditional Sri Lankan, Chinese & Italian cuisine to the delight of all.</td>";
         echo "<td>
         <form style='display:inline;' method='POST' action=''>
             <button type='submit' name='delete' class='action-btn'>change</button>
         </form>
         </td>";
         echo "</tr>";
 


        echo "<table>";
        echo "<br><br><tr>";
        echo "<th>Bar</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>A delightful cross between a bar and a lounge – for a cocktail or two, with Music presented on on decks
        l from thus- sat and a video 
       wall in a convivial, informal atmosphere. The outside deck offers a pleasant setting for an evening drink.</td>";
       echo "<td>
         <form style='display:inline;' method='POST' action=''>
             <button type='submit' name='delete' class='action-btn'>change</button>
         </form>
         </td>";
       echo "</tr>";


       echo "<table>";
       echo "<h3><br><br>Specials & Prormotions</h3>";
        echo "<br><br><tr>";
        echo "<th>Specials & Prormotions</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><center><p>

          <h1>High Tea Platters</h1><br>
          
          <h4>Indulge In A Variety Of 3 Delectable High Tea Platters!</h4> <br>



          ☕Western Affair -                  Rs. 5,910 Nett For Two<br><br>
          
          ☕Western Vegetarian Affair -  Rs. 4,104 Nett For Two<br><br>
          
          ☕Island Memories  -              Rs. 6,910 Nett For Two<br><br>
          
          
          
        <h4>Venue: L.A.B. (Dine-In Only)</h4>
          
          <h5>Not Available For Delivery</h5>
          
          
          <h4>Time: 2:30pm - 6pm </h4>

        </p></center></td>";
       echo "<td>
         <form style='display:inline;' method='POST' action=''>
             <button type='submit' name='delete' class='action-btn'>change</button>
         </form>
         </td>";
       echo "</tr>";


        

    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>