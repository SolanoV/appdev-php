<?php

$firstname = htmlspecialchars($_GET['fname']);
$lastname = htmlspecialchars($_GET['lname']);
$email = htmlspecialchars($_GET['email']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>First Name</th>
            <td><?= $firstname ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?= $lastname ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $email ?></td>
        </tr>

    </table>
</body>
</html>