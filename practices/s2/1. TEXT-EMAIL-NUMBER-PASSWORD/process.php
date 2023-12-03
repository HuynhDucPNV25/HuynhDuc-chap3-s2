<?php 
    require_once __DIR__."/templates/header.php";
?>
<?php
   if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $psw = $_POST["psw"];
        $msg = $_POST["msg"];
   }
?>
<ul class="list-group">
    <li class="list-group-item"><?php echo $name ?></li>
    <li class="list-group-item"><?php echo $email ?></li>
    <li class="list-group-item"><?php echo $psw ?></li>
    <li class="list-group-item"><?php echo $number ?></li>
    <li class="list-group-item"><?php echo $msg ?></li>

</ul>
<?php 
    require_once __DIR__."/templates/footer.php";
?>  