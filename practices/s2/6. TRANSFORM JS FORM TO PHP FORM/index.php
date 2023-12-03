<?php 
    if(isset($_POST["password"])){
        if($_POST["password"] == "1234"){
            echo '<script>document.getElementById("hidden").style.display = "block";</script>';
        }
    }
?>