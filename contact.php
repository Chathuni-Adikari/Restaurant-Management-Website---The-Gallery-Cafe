<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>
        <link rel="stylesheet" href="index.css">

        <style>
            body{
                color: #213c5b;
            }
            h1{
                margin-top: 215px;
                text-align: center;

            }
            h3{
                text-align: center;
            }
            footer {
                margin-top: 200px;
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
            $name= $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];

           
            $sql = "INSERT INTO quries VALUES ('$name',' $email','  $message ')";
            if(mysqli_query($conn,$sql)){
            
                echo "<h1>Thank You for Contact Us!</h1><br>";
                echo "<h3>Name : " . $name . "<br></h3>";  
                echo "<h3>Email: " . $email . "<br></h3>";
                echo "<h3>Message: " . $message . "<br></h3>";
 
                
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