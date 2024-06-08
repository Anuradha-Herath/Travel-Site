<?php
$connection = mysqli_connect('localhost', 'root', '1234', 'book_db');

if ($connection) {
    if(isset($_POST['send'])){
        $name =  $_POST['name'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $address =  $_POST['address'];
        $location =  $_POST['location'];
        $guests =  $_POST['guests'];
        $arrivals =  $_POST['arrivals'];
        $leaving =  $_POST['leaving'];

        $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        if(mysqli_query($connection, $request)){
            // Data inserted successfully
            header('Location: book2.php');
            exit; // Make sure to exit after the redirect
        } else {
            echo 'Error: ' . mysqli_error($connection);
        }
    } else {
        echo 'Form submission failed. Please try again.';
    }
} else {
    echo 'Failed to connect to the database.';
}
?>
