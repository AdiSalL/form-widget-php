<?php


require_once __DIR__ . "/Form.php";
require_once __DIR__ . "/ButtonInput.php";
require_once __DIR__ . "/TextInput.php";
require_once __DIR__ . "/PasswordInput.php";

$form = new Form("/", "POST");
$form->addElement(new TextInput("firstname", "First name"));
$form->addElement(new TextInput("email", "Email"));
$form->addElement(new PasswordInput("password", "Password"));
$form->addElement(new ButtonInput("Submit"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $form->render(); ?>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["firstname"] ?   $_POST["firstname"] : "No firstname" ;
    }
    ?>
</body>
</html>
