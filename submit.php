<?php

if (!empty($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['message'])) 
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    if(mail($email, 'New title', $message))
    {
        echo '<h1>GOOD!</H1>';
    }
}
else 
{
    header('Location: /index.php');
}

?>