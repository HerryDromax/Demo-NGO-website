<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Save the data to a file or send an email
    // For simplicity, we're just echoing the data here
    echo "Name: $name<br>Email: $email<br>Phone: $phone<br>Address: $address";
}
?>
