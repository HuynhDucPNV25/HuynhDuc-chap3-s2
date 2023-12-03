<?php require_once 'templates/header.php' ?>
<?php

    $colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
    // CODE HERE 
    $subjects = [];
    if (isset($_POST["submit"])) {
        if (isset($_POST["skills"])) {
            $subjects = $_POST["skills"];
        }
    } 

?>
    <div class="card">
        
        <div class="card-body">
            <?php
                // CODE HERE
                if (!empty($subjects)) {
                    echo "<h3>Selected Skills:</h3>";
                    echo "<ul>";

                    foreach ($subjects as $index => $subject) {
                        $color = $colors[$index % count($colors)];
                        $liClass = "btn border bg-" . $color;
                        $liContent = $subject;
                        echo "<li class=\"$liClass\">$liContent</li>";
                    }
                    
                    echo "</ul>";
                } else {
                    echo "<p>No skills selected.</p>";
                }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>