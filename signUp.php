<?php

    session_start();

    include("../php/dbConn.php"); // .. tu untuk undur 1 folder

    if(isset ($_POST['signUpBut'])) //warna oren dlm [ ] tu nama dekat button submit
    {
        // variables to hold values
        $name= $_POST['name'];
        $phoneNum= $_POST['phoneNum'];
        $address= $_POST['address'];
        $email= $_POST['email'];
        $password = $_POST['pswd'];

        // save to database
        $sql = "INSERT INTO student  (`name`, phoneNum, `address`, email, `password`)VALUES ('$name', '$phoneNum', '$address', '$email', '$password')";

        // perfrom query
        $query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn)); //yg die tu untuk tgk kat mna error dia klau ade

        if($query)
        {
            echo "<script>alert('You have succesfully sign up!');
            window.location='../login/login.php'</script>";
        }
        else
        {
            echo"<script>alert('sign up failed');
            window.location='signUp.php'</script>";
        }
    }
?>

<h2>Login</h2>

<form method="post">
    <label>Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label>Phone Number:</label><br>
    <input type="text" id="phoneNum" name="phoneNum"><br>

    <label>Address:</label><br>
    <input type="text" id="address" name="address"><br>

    <label>Email:</label><br>
    <input type="text" id="email" name="email"><br>

    <label>Passowrd:</label><br>
    <input type="text" id="pswd" name="pswd"><br>

    <br>
    <input type="submit" name="signUpBut">
</form> 