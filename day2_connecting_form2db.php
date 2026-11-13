<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-II</title>
</head>
<body>

    <form method="POST">
        Name: <input type="text" name="username"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit" name="sub">submit</button><br>
        
    </form>

    <?php
    // Connect to MySQL server
    $con=mysqli_connect('localhost',"root","");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    mysqli_query($con,"CREATE DATABASE IF NOT EXISTS my_data");

    // select database
    mysqli_select_db($con,"my_data");

    // create table
    $table="CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100) ,
    password VARCHAR(100)
    )";
    mysqli_query($con,$table);


    if (isset($_POST['sub']))
        {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query="INSERT INTO users(username,email,password)values ('$username','$email','$password')";
            $execute=mysqli_query($con,$query);

        if ($execute) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }


        }
        mysqli_close($con);
        ?>
    
</body>
</html>