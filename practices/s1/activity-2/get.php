<?php
require_once('templates/header.php');

echo "<ul>";

    $name = $_GET['name'];
    $hobbies = $_GET['hobbies'];
    $gender = $_GET['gender'];
    
    echo "<li>Your name is $name</li>";
    
    echo "<li>Your hobbies are $hobbies</li>";

    if($gender === 'female'){
        echo "<li>You are a girl</li>";
    } else{
        echo "<li>You are a boy</li>";
    }

echo "</ul>";

require_once('templates/footer.php');
?>