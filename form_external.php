<?php
if(isset($_POST['submit'])) {

    $name = array("Herman", "Student", "Vasya", "Mihail", "Igor", "Sergey", "Aleksey", "Dmitriy");
    $minimum = 5;
    $maximum = 10;
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (strlen($username) < $minimum) {
        echo "Username has to be longer than five";
    }

    if (strlen($username) > $maximum) {
        echo "Username cannot to be longer than ten";

    }

    if (!in_array($username,$name)) {
        echo "Sorry, you are not allowed";
    } else {
        echo "welcome";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form_process.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"> <br>
    <input type="password" name="password" placeholder="Enter Password"> <br>
    <input type="submit" name="submit">
</form>

</body>
</html>

