<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mail = $_REQUEST['mail'];

    function validateEmail($str)
    {
        $emailRegexPatten = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
        if (preg_match($emailRegexPatten,$str)){
            return true;
        }else{
            return false;
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Email :
    <input type="text" name="mail">
    <button type="submit">Check</button>
</form>
<div>
    <?php
    if (isset($mail)){
        if (validateEmail($mail)){
            echo "Validate Email";
        }else{
            echo "Invalid Email";
        }
    }
    ?>
</div>
</body>
</html>
