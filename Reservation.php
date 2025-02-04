<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>

        <style>
body{
color: #213c5b;
}
h1{
margin-top: 115px;
text-align: center;
}
h3{
text-align: left;
margin-left: 650px;
}
            
footer {
    margin-top: 170px;
    background-image: url('Resoures/Home/banenr.png.jpg');
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
        </style>
    </head>
    <body>
        

    <?php
            $conn=mysqli_connect("localhost", "root","","the_gallery_cafedb");

            // Check Connection
            if($conn === false){
                die("ERROR: Could not connect."
                .mysqli_connect_error());
            }
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $guests = $_POST['guests'];

           
            $sql = "INSERT INTO reservations VALUES ('$id','$name', '$email', '$phone', '$date', '$time', '$guests', '$status')";
            if(mysqli_query($conn,$sql)){
                echo "<h1>Your reservation has been confirmed.</h1><br>";
                echo "<h3>Name : " . $name . "</h3>";  
                echo "<h3>Email: " . $email . "</h3>";
                echo "<h3>Phone: " . $phone . "</h3>";
                echo "<h3>Date: " . $date . "</h3>";
                echo "<h3>Time: " . $time . "</h3>";
                echo "<h3>Guests: " . $guests . "</h3>";
                
            } else {
                echo "ERROR: Hush! sorry $sql."
                . mysqli_error($conn);
            }
            //close connection
            mysqli_close($conn)

            ?>

<footer>
        <div class="container">
            <p>&copy; 2024 The Gallery Cafe. All rights reserved.</p>
        </div>
    </footer>

    </body>
</html>