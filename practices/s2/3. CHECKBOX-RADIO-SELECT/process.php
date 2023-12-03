<?php
require_once __DIR__ . "/templates/header.php";
?>
<?php
// YOUR CODE HERE
$province = "";
$gender = "";
$subjects = [];

if (isset($_POST["submit"])) {
    $province = $_POST["province"];
    $gender = $_POST["gender"];
    if (isset($_POST["skills"])) {
        $subjects = $_POST["skills"];
    }
}
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        if ($gender == "Male") {
            echo '<img style="width:60px;heigh:60px;" src="/chapter_3/practices/s2/3. CHECKBOX-RADIO-SELECT/images/female.png" alt="Male">';
        } elseif ($gender == "Female") {
            echo '<img style="width:60px;heigh:60px;" src="/chapter_3/practices/s2/3. CHECKBOX-RADIO-SELECT/images/female.png" alt="Female">';
        } else {
            echo 'Invalid gender';
        }
        ?>
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        foreach ($subjects as $subject) {
            echo '<div class="btn bg-primary text-white p-2 m-2">' . $subject . '</div>';
        }
        ?>
    </div>
</div>
<?php
require_once __DIR__ . "/templates/footer.php";
?>