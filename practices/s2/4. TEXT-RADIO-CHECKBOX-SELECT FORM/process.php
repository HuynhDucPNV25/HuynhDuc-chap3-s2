<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <b>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Number</th>
            <th>Message</th>
            <th>Provinces</th>
            <th>Gender</th>
            <th>Subject</th>
        </tr>
    </b>    
    
    <?php
       // YOUR CODE HERE
        $province = "";
        $gender = "";
        $subjects = [];

        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $psw = $_POST["password"];
            $number = $_POST["number"];
            $message = $_POST["message"];
            $province = $_POST["province"];
            $gender = $_POST["gender"];
            if (isset($_POST["skills"])) {
                $subjects = $_POST["skills"];
            }
        } 
    ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $psw ?></td>
            <td><?php echo $number ?></td>
            <td><?php echo $message ?></td>
            <td><?php echo $province ?></td>
            <td>
                <?php 
                   // subjects
                   if (!empty($subjects)) {
                    echo implode(", ", $subjects);
                }
                ?>
            </td>
            <td><?php echo $gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>