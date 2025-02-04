<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>

        <style>
            .echo{
                color: red;
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

            $first_Name = $_POST['firstName'];
            $second_Name = $_POST['secondName'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $city= $_POST['city'];
            $comment = $_POST['comment'];

           
            $sql = "INSERT INTO cart_checkout VALUES ('$id', '$first_Name', '$second_Name', '$tel', '$email', '$city', '$comment', '$status')";
            if(mysqli_query($conn,$sql)){
                echo "Order has been confirmed:<br>";
                echo "First Name : " . $first_Name . "<br>";  
                echo "Second Name: " . $second_Name . "<br>";
                echo "Contact Number: " . $tel . "<br>";
                echo "Email: " . $email . "<br>";
                echo "City: " . $city . "<br>";
                echo "Comment: " . $comment . "<br>";
                
                
            } else {
                echo "ERROR: Hush! sorry $sql."
                . mysqli_error($conn);
            }
            //close connection
            mysqli_close($conn)
            ?>

    </body>
</html>