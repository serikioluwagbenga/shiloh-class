<!DOCTYPE html>
<html lang="en">
<?php require_once "include/server.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        <input type="text" name="fullname" placeholder="Enter Fullname">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="number" name="phone_number" placeholder="Enter Phone Number">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>