<?php 
    require_once __DIR__."/templates/header.php";
?>
<?php
    // YOUR CODE HERE
    if (isset($_POST["submit"])) {
        $color = $_POST["color"];
        $range = $_POST["range"];
        $date = $_POST["date"];
    }
?>
<div class="alert alert-secondary">
    <strong>Color: </strong> <span><?php echo $color; ?></span>
</div>
<div class="alert alert-info">
    <strong>Range: </strong> <span><?php echo $range; ?></span>
</div>
<div class="alert alert-danger">
    <strong>Date: </strong> <span><?php echo $date; ?></span>
</div>

<?php 
    require_once __DIR__."/templates/footer.php";
?>  